<?php

use phpOMS\Router\RouteVerb;

return [
    '^/*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^solutions.*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewSolutions',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^services.*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewServices',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^info.*$' => [
        [
            'dest' => '\app\controller\BusinessController:viewInfo',
            'verb' => RouteVerb::GET,
        ],
    ],
];
