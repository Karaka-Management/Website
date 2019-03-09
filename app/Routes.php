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
    '^info$' => [
        [
            'dest' => '\app\controller\InfoController:viewHome',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^info\?page=.*$' => [
        [
            'dest' => '\app\controller\InfoController:viewDoc',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^info/article.*$' => [
        [
            'dest' => '\app\controller\InfoController:viewArticle',
            'verb' => RouteVerb::GET,
        ],
    ],
];
