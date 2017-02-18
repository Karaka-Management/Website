<?php

namespace Website\App\Controllers;

use Website\App\Application;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;
use phpOMS\System\File\Local\Directory;
use phpOMS\Module\InfoManager;

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

    public function showProductList(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/products');

        $view->setData('modules', $this->getModules());

        return $view;
    }

    public function showProduct(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/product-profile');

        $view->setData('modules', $this->getModules());

        $module = null;
        $doc = '';

        if(file_exists(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/info.json')) {
            $module = new InfoManager(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/info.json');

            if(file_exists(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/Docs/test.md')) {
                $Parsedown = new \Parsedown();
                $doc = $Parsedown->text(file_get_contents(__DIR__. '/../../../Modules/' . $request->getPath(1) . '/Docs/test.md'));
            }
        }

        $view->setData('module', $module);
        $view->setData('doc', $doc);

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
        
        $Parsedown = new \Parsedown();

        $view->setData('doc', $Parsedown->text($doc));

        return $view;
    }

    public function showBlog(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }

    public function showAbout(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }

    public function showTerms(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }

    public function showPrivacy(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }

    public function showContact(RequestAbstract $request, ResponseAbstract $response)
    {
        $view = new View($this->app, $request, $response);
        $view->setTemplate('/Website/App/Templates/Page/front');

        return $view;
    }
}