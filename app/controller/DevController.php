<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\ApplicationAbstract;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\System\File\Local\Directory;
use phpOMS\Utils\Parser\Markdown\Markdown;

class DevController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewHome(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/dev');

        $posts = $this->getPostList();
        $response->get('Content')->setData('posts', $posts);

        $guides = $this->getGuidesList();
        $response->get('Content')->setData('guides', $guides);
    }

    private function getPostList() : array
    {
        $posts = Directory::list(__DIR__ . '/../tpl/posts/', '.*\.md$');
        \usort($posts, function($a, $b) {
            return \strcmp($a, $b) > 0 ? -1 : 1;
        });

        $list  = [];
        $count = 0;
        foreach ($posts as $post) {
            ++$count;

            if (\stripos($post, '/_') !== false) {
                continue;
            }

            $f        = \fopen(__DIR__ . '/../tpl/posts/' . $post, 'r');
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
                'name'     => \str_replace('.md', '', $post),
            ];

            if ($count > 4) {
                break;
            }
        }

        return $list;
    }

    private function getGuidesList() : array
    {
        $summary  = \fopen(__DIR__ . '/../../Developer-Guide/SUMMARY.md', 'r');
        $section  = '';
        $sections = [];

        while(($line = \fgets($summary)) !== false) {
            if ($line[0] === '#') {
                if ($section !== '') {
                    $sections[] = $section;
                }

                $section = \preg_replace('/\#+/', '##', $line);
            } elseif ($line !== '') {
                $line     = \str_replace(']({%}', ']({%}/guide', $line);
                $section .= $line;
            } else {
                continue;
            }
        }

        $sections[] = $section . "\n";
        $guides     = [];

        foreach ($sections as $block) {
            if (\substr_count($block, "\n") > 1) {
                $guides[] = Markdown::parse($block);
            }
        }

        return $guides;
    }

    public function viewGuide(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/dev_guide');

        if (\file_exists(__DIR__ . '/../../Developer-Guide/' . $request->getData('page') . '.md')) {
            $response->get('Content')->setData('markdown', Markdown::parse(\file_get_contents(__DIR__ . '/../../Developer-Guide/' . $request->getData('page') . '.md')));
        }

        $this->setupGuideNavigation($request, $response);
    }

    private function setupGuideNavigation(RequestAbstract $request, ResponseAbstract $response) : void
    {
        $nav = \file_get_contents(__DIR__ . '/../../Developer-Guide/SUMMARY.md');

        $response->get('Content')->setData('nav', Markdown::parse($nav));
    }

    public function viewPost(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/dev_post');

        if (\file_exists(__DIR__ . '/../tpl/posts/' . $request->getUri()->getPathElement(2) . '.md')) {
            $response->get('Content')->setData('markdown', Markdown::parse(\file_get_contents(__DIR__ . '/../tpl/posts/' . $request->getUri()->getPathElement(2) . '.md')));
        }
    }
}
