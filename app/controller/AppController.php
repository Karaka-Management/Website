<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;
use phpOMS\ApplicationAbstract;

class AppController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewHome(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/demo');
    }
}
