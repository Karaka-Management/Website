<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\Application\ApplicationAbstract;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;

class GeneralController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewImprint(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/imprint');
    }

    public function viewTermsOfService(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/terms_of_service');
    }

    public function viewPrivacyPolicy(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/privacy_policy');
    }

    public function viewStatus(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/status');
    }

    public function viewCareer(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/career');
    }

    public function viewTeam(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/team');
    }

    public function viewContact(RequestAbstract $request, ResponseAbstract $response, $data = null): void
    {
        $response->get('Content')->setTemplate('/app/tpl/contact');
    }
}
