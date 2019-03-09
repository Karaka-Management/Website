<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\System\File\Local\Directory;
use phpOMS\Utils\Parser\Markdown\Markdown;
use phpOMS\Views\View;
use phpOMS\ApplicationAbstract;

class InfoController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    private function setupNavigation(RequestAbstract $request, ResponseAbstract $response) : void
    {
        $nav = \file_get_contents(__DIR__ . '/../../Documentation/SUMMARY.md');
        $nav = \str_replace(']({%}', '](/info', $nav);

        $response->get('Content')->setData('nav', Markdown::parse($nav));
    }

    public function viewHome(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/info');
        $this->setupNavigation($request, $response);

        $view = new View();
        $view->setTemplate('/app/tpl/info_news');

        $articles = Directory::list(__DIR__ . '/../tpl/articles/', '.*\.md$');
        usort($articles, function($a, $b) {
            $a = \explode('/', $a)[1];
            $b = \explode('/', $b)[1];
            return \strcmp($a, $b) > 0 ? -1 : 1;
        });

        $list = [];
        foreach ($articles as $article) {
            if (\stripos($article, '/_') !== false) {
                continue;
            }

            $f        = \fopen(__DIR__ . '/../tpl/articles/' . $article, 'r');
            $headline = \fgets($f);

            $start = false;
            $end   = false;

            $summary = '';
            while (!$end && ($line = \fgets($f)) !== false) {
                if (\trim($line) !== '') {
                    $summary .= $line;
                    $start    = true;
                } elseif ($start && !$end) {
                    $end = true;
                }
            }

            \fclose($f);

            $headline = \str_replace('#', '', $headline);
            $headline = \trim($headline);

            $list[] = [
                'headline' => $headline,
                'summary'  => \str_replace(['<p>', '</p>'], '', Markdown::parse($summary)),
                'path'     => \explode('/', $article)[0],
                'name'     => \str_replace('.md', '', \explode('/', $article)[1]),
            ];
        }

        $view->setData('articles', $list);

        return $view;
    }

    public function viewDoc(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/info');
        $this->setupNavigation($request, $response);

        $view = new View();
        $view->setTemplate('/app/tpl/info_doc');

        if (\file_exists(__DIR__ . '/../../Documentation/' . $request->getData('page') . '.md')) {
            $view->setData('markdown', Markdown::parse(\file_get_contents(__DIR__ . '/../../Documentation/' . $request->getData('page') . '.md')));
        }

        return $view;
    }

    public function viewArticle(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/info');
        $this->setupNavigation($request, $response);

        $view = new View();
        $view->setTemplate('/app/tpl/info_doc');

        if (\file_exists(__DIR__ . '/../tpl/articles/news/' . $request->getUri()->getPathElement(3) . '.md')) {
            $view->setData('markdown', Markdown::parse(\file_get_contents(__DIR__ . '/../tpl/articles/news/' . $request->getUri()->getPathElement(3) . '.md')));
        }

        return $view;
    }
}
