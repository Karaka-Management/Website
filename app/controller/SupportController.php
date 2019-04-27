<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\ApplicationAbstract;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;

class SupportController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewHome(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/support');
    }
}
