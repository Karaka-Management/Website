<?php
declare(strict_types=1);

namespace app;

use phpOMS\Application\ApplicationAbstract;
use phpOMS\Dispatcher\Dispatcher;
use phpOMS\Message\Http\HttpRequest;
use phpOMS\Message\Http\HttpResponse;
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
                $request->uri->getRoute(),
                null,
                $request->getRouteVerb()
            ),
            $request,
            $response
        );
        $pageView->addData('dispatch', $dispatched);

        $response->header->push();

        echo $response->getBody();
    }

    private function setupHandlers() : void
    {
        //\set_exception_handler(['\phpOMS\UnhandledHandler', 'exceptionHandler']);
        //\set_error_handler(['\phpOMS\UnhandledHandler', 'errorHandler']);
        //\register_shutdown_function(['\phpOMS\UnhandledHandler', 'shutdownHandler']);
        \mb_internal_encoding('UTF-8');
    }

    private function initRequest() : HttpRequest
    {
        $request = HttpRequest::createFromSuperglobals();

        $request->createRequestHashs(0);
        $request->uri->setRootPath('/');
        UriFactory::setupUriBuilder($request->uri);

        return $request;
    }

    private function initResponse(HttpRequest $request) : HttpResponse
    {
        $response = new HttpResponse();
        $response->header->set('content-type', 'text/html; charset=utf-8');
        $response->header->set('x-xss-protection', '1; mode=block');
        $response->header->set('x-content-type-options', 'nosniff');
        $response->header->set('x-frame-options', 'SAMEORIGIN');
        $response->header->set('referrer-policy', 'same-origin');

        if ($request->isHttps()) {
            $response->header->set('strict-transport-security', 'max-age=31536000');
        }

        return $response;
    }
}
