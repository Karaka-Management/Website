<?php
namespace Website\App;

use phpOMS\ApplicationAbstract;
use phpOMS\DataStorage\Database\DatabasePool;
use phpOMS\DataStorage\Database\DatabaseStatus;
use phpOMS\Dispatcher\Dispatcher;
use phpOMS\Localization\Localization;
use phpOMS\Message\Http\Request;
use phpOMS\Message\Http\RequestStatus;
use phpOMS\Message\Http\Response;
use phpOMS\Model\Html\Head;
use phpOMS\Router\Router;
use phpOMS\Uri\Http;
use phpOMS\Views\View;
use phpOMS\Uri\UriFactory;

class Application extends ApplicationAbstract
{
    public $config = [];

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->run();
    }

    private function run()
    {
        set_exception_handler(['\phpOMS\UnhandledHandler', 'exceptionHandler']);
        set_error_handler(['\phpOMS\UnhandledHandler', 'errorHandler']);
        register_shutdown_function(['\phpOMS\UnhandledHandler', 'shutdownHandler']);
        mb_internal_encoding('UTF-8');
        date_default_timezone_set('Europe/Berlin');

        $request  = new Request(new Localization());
        $response = new Response(new Localization());
        $response->getL11n()->setLanguage('en');
        $request->getL11n()->setLanguage('en');
        $request->getUri()->setRootPath($this->config['page']['root']);
        
        UriFactory::setupUriBuilder($request->getUri());

        $response->getHeader()->set('x-xss-protection', '1; mode=block');
        $response->getHeader()->set('x-content-type-options', 'nosniff');
        $response->getHeader()->set('x-frame-options', 'SAMEORIGIN');
        $response->getHeader()->set('content-security-policy', 'script-src \'self\' \'unsafe-inline\' https://cdnjs.cloudflare.com; child-src \'self\'', true);

        if ($this->config['page']['https']) {
            $response->getHeader()->set('strict-transport-security', 'max-age=31536000');
        }

        $response = $this->generateContent($request, $response);
        $response->getHeader()->push();

        echo $response->render();
    }

    private function generateContent(Request $request, Response $response)
    {
        $this->router = new Router();
        $this->router->importFromFile(__DIR__ . '/Routes.php');

        $this->dispatcher = new Dispatcher($this);
        $dispatched       = $this->dispatcher->dispatch($this->router->route($request), $request, $response);

        if (empty($dispatched)) {
            $dispatched[] = new View($this, $request, $response);
            $dispatched[0]->setTemplate('/Website/App/Templates/Page/error');
            $response->setStatusCode(RequestStatus::R_404);
        }

        $pageView = new View($this, $request, $response);
        $head     = new Head();
        $baseUri  = $request->getUri()->getBase();

        $pageView->setData('head', $head);
        $pageView->setData('dispatch', $dispatched);
        $pageView->setTemplate('/Website/App/Templates/index');
        $response->set('Content', $pageView);

        return $response;
    }
}
