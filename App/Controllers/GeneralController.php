<?php

namespace Website\App\Controllers;

use Website\App\Application;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;
use phpOMS\System\File\Local\Directory;
use phpOMS\Module\InfoManager;
use phpOMS\Utils\StringUtils;

include_once __DIR__ . '/../../libs/parsedown/Parsedown.php';

class GeneralController
{
    protected $app = null;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    private function getDocsNav()
    {
        $docNav = file_get_contents(__DIR__ . '/../../../Documentation/SUMMARY.md');
        $docNav = str_replace('.md', '', $docNav);
        $docNav = str_replace('](', '](/docs/', $docNav);

        $Parsedown = new \Parsedown();
        return $Parsedown->text($docNav);
    }

    private function getDevGuideNav()
    {
        $docNav = file_get_contents(__DIR__ . '/../../../Developer-Guide/SUMMARY.md');
        $docNav = str_replace('.md', '', $docNav);
        $docNav = str_replace('](', '](/devguide/', $docNav);

        $Parsedown = new \Parsedown();
        return $Parsedown->text($docNav);
    }

    private function getModules()
    {
        $modules = [];
        $mDirs = Directory::list(__DIR__ . '/../../../Modules');

        foreach($mDirs as $dir) {
            if(is_dir($dir) && file_exists($dir . '/info.json')) {
                $module = new InfoManager($dir . '/info.json');
                $module->load();

                if(!isset($modules[$module->getCategory()])) {
                    $modules[$module->getCategory()] = [];
                }

                $modules[$module->getCategory()][] = $module;
            }
        }

        ksort($modules);

        return $modules;
    }

    public function showFront(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }

    public function showModuleList(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/modules');

        $view->setData('modules', $this->getModules());

        return $view;
    }

    public function showModule(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/module-profile');

        $view->setData('modules', $this->getModules());

        $module = null;
        $docs = [];

        if(file_exists(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/info.json')) {
            $module = new InfoManager(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/info.json');
            $list = Directory::list(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/Docs');

            $Parsedown = new \Parsedown();

            foreach($list as $doc) {
                if(StringUtils::endsWith($doc, '.md')) {
                    $docs[] = $Parsedown->text(file_get_contents($doc));
                }
            }
        }

        $view->setData('module', $module);
        $view->setData('docs', $docs);

        return $view;
    }

    public function showDocsList(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/docs');

        $view->setData('customer-nav', $this->getDocsNav());

        return $view;
    }

    public function showDocs(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/docs-article');

        $view->setData('customer-nav', $this->getDocsNav());

        $path = $request->getUri()->getPath();
        $path = str_replace('docs', '', $path);

        $doc = '';
        
        if(file_exists(__DIR__ . '/../../../Documentation/' . $path . '.md')) {
            $doc = file_get_contents(__DIR__ . '/../../../Documentation/' . $path . '.md');
        }
        
        $parsedown = new \Parsedown();

        $view->setData('doc', $parsedown->text($doc));

        return $view;
    }

    public function showDevGuideList(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/devguide');

        $view->setData('customer-nav', $this->getDevGuideNav());

        return $view;
    }

    public function showDevGuideArticle(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/docs-article');

        $view->setData('customer-nav', $this->getDevGuideNav());

        $path = $request->getUri()->getPath();
        $path = str_replace('devguide', '', $path);

        $doc = '';
        
        if(file_exists(__DIR__ . '/../../../Developer-Guide/' . $path . '.md')) {
            $doc = file_get_contents(__DIR__ . '/../../../Developer-Guide/' . $path . '.md');
        }
        
        $parsedown = new \Parsedown();

        $view->setData('doc', $parsedown->text($doc));

        return $view;
    }

    public function showBlog(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/blog');

        $posts = Directory::list(__DIR__ . '/../Templates/Page/blog');
        rsort($posts);

        foreach($posts as $key => $post) {
            if(is_dir($post)) {
                unset($posts[$key]);
            }
        }

        $view->setData('posts', $posts);

        return $view;
    }

    public function showBlogPost(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/blog-post');

        $path = __DIR__ . '/../Templates/Page/blog/' . urldecode($request->getPath(1)) . '.md';

        $parsedown = new \Parsedown();
        $text = '';

        if(file_exists($path)) {
            $text = $parsedown->text(file_get_contents($path));
        }

        $view->setData('post', $text);

        return $view;
    }

    public function showDev(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/dev');

        return $view;
    }

    public function showPlans(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/plans');

        return $view;
    }

    public function showAbout(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/about');

        return $view;
    }

    public function showTerms(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/terms');

        return $view;
    }

    public function showPrivacy(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/privacy');

        return $view;
    }

    public function showContact(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/contact');

        return $view;
    }
}