<?php
declare(strict_types=1);

namespace app;

use phpOMS\ApplicationAbstract;
use phpOMS\Dispatcher\Dispatcher;
use phpOMS\Message\Http\Request;
use phpOMS\Message\Http\Response;
use phpOMS\Router\WebRouter;
use phpOMS\Uri\UriFactory;
use phpOMS\Views\View;

class Application extends ApplicationAbstract
{
    public function __construct()
    {
        $this->setupHandlers();

        $request  = $this->initRequest();
        $response = $this->initResponse($request);

        $pageView = new View(null, $request, $response);
        $pageView->setTemplate('/app/tpl/business');
        $response->set('Content', $pageView);

        $this->router = new WebRouter();
        $this->router->importFromFile(__DIR__ . '/Routes.php');

        $this->dispatcher = new Dispatcher($this);

        $dispatched = $this->dispatcher->dispatch(
            $this->router->route(
                $request->getUri()->getRoute(),
                null,
                $request->getRouteVerb()
            ),
            $request,
            $response
        );
        $pageView->addData('dispatch', $dispatched);

        /** @var \phpOMS\Message\Http\Header $header */
        $header = $response->getHeader();
        $header->push();

        echo $response->getBody();
    }

    private function setupHandlers() : void
    {
        //\set_exception_handler(['\phpOMS\UnhandledHandler', 'exceptionHandler']);
        //\set_error_handler(['\phpOMS\UnhandledHandler', 'errorHandler']);
        //\register_shutdown_function(['\phpOMS\UnhandledHandler', 'shutdownHandler']);
        \mb_internal_encoding('UTF-8');
    }

    private function initRequest() : Request
    {
        $request = Request::createFromSuperglobals();

        $request->createRequestHashs(0);
        $request->getUri()->setRootPath('/');
        UriFactory::setupUriBuilder($request->getUri());

        return $request;
    }

    private function initResponse(Request $request) : Response
    {
        $response = new Response();
        $response->getHeader()->set('content-type', 'text/html; charset=utf-8');
        $response->getHeader()->set('x-xss-protection', '1; mode=block');
        $response->getHeader()->set('x-content-type-options', 'nosniff');
        $response->getHeader()->set('x-frame-options', 'SAMEORIGIN');
        $response->getHeader()->set('referrer-policy', 'same-origin');

        if ($request->isHttps()) {
            $response->getHeader()->set('strict-transport-security', 'max-age=31536000');
        }

        return $response;
    }
}
