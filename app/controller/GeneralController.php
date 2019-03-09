<?php
declare(strict_types=1);

namespace app\controller;

use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;
use phpOMS\ApplicationAbstract;

class GeneralController
{
    public function __construct(ApplicationAbstract $app)
    {

    }

    public function viewImprint(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/imprint');
    }

    public function viewTermsOfService(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/terms_of_service');
    }

    public function viewPrivacyPolicy(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/privacy_policy');
    }

    public function viewSecurityStatement(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/security_statement');
    }

    public function viewStatus(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/status');
    }

    public function viewCareer(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/career');
    }

    public function viewTeam(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/team');
    }

    public function viewContact(RequestAbstract $request, ResponseAbstract $response, $data = null)
    {
        $response->get('Content')->setTemplate('/app/tpl/contact');
    }
}
