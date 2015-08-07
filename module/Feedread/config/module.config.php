<?php

return [
    'router' => [
        'routes' => [
            'Feedread-home' => [
                'type' => 'Literal',
                'options' => [
                    'route'    => '/feed',
                    'defaults' => [
                        'controller' => 'Feedread\Controller\Feedread',
                        'action'     => 'index'
                    ],
                ]
            ]        
        ]
    ],

    'service_manager' => [
        'invokables' => [
            'Feedread\Service\FeedreadService' => 'Feedread\Service\FeedreadService'
        ]
    ],
       
    'controllers' => [
        'invokables' => [
            'Feedread\Controller\Feedread' => 'Feedread\Controller\FeedreadController'
        ]
    ],

    'view_manager' => [        
        'template_path_stack' => [
            __DIR__ . '/../view',
        ]
    ]
    
];