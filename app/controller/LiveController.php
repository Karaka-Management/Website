<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\Application\ApplicationAbstract;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;

class LiveController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewHome(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/live');

        $live     = \json_decode(\file_get_contents(__DIR__ . '/../tpl/videos/live.json'), true);
        $tutorial = \json_decode(\file_get_contents(__DIR__ . '/../tpl/videos/tutorial.json'), true);
        $vlog     = \json_decode(\file_get_contents(__DIR__ . '/../tpl/videos/vlog.json'), true);

        $response->get('Content')->setData('live', $live);
        $response->get('Content')->setData('tutorial', $tutorial);
        $response->get('Content')->setData('vlog', $vlog);
    }
}
