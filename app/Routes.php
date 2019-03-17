<?php

use phpOMS\Router\RouteVerb;

return [
    '^/*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/solutions.*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewSolutions',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/services.*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewServices',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/info$' => [
        [
            'dest' => '\app\controller\InfoController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/info\?page=.*$' => [
        [
            'dest' => '\app\controller\InfoController:viewDoc',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/info/article.*$' => [
        [
            'dest' => '\app\controller\InfoController:viewArticle',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/shop$' => [
        [
            'dest' => '\app\controller\ShopController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/support$' => [
        [
            'dest' => '\app\controller\SupportController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/demo$' => [
        [
            'dest' => '\app\controller\AppController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/contact$' => [
        [
            'dest' => '\app\controller\GeneralController:viewContact',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/imprint$' => [
        [
            'dest' => '\app\controller\GeneralController:viewImprint',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/terms$' => [
        [
            'dest' => '\app\controller\GeneralController:viewTermsOfService',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/privacy$' => [
        [
            'dest' => '\app\controller\GeneralController:viewPrivacyPolicy',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/security$' => [
        [
            'dest' => '\app\controller\GeneralController:viewSecurityStatement',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/career$' => [
        [
            'dest' => '\app\controller\GeneralController:viewCareer',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/status$' => [
        [
            'dest' => '\app\controller\GeneralController:viewStatus',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/live$' => [
        [
            'dest' => '\app\controller\LiveController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^/dev$' => [
        [
            'dest' => '\app\controller\DevController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
];
