<?php

use phpOMS\Router\RouteVerb;

return [
	'^\/*$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showFront',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^module$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showModuleList',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^module/.*$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showModule',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^docs$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showDocsList',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^docs/.*$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showDocs',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^blog$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showBlog',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^blog/.*$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showBlogPost',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^plans$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showPlans',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^contact$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showContact',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^terms$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showTerms',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^privacy$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showPrivacy',
            'verb' => RouteVerb::GET,
        ],
    ],
    '^about$' => [
        [
            'dest' => 'Website\App\Controllers\GeneralController:showAbout',
            'verb' => RouteVerb::GET,
        ],
    ],
];