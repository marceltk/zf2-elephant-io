<?php

return [

    'service_manager' => [
        'factories' => [
            \Unisoft\ElephantIO\Service\SocketIOService::class => function ($sm) {
                return new \Unisoft\ElephantIO\Service\SocketIOService($sm);
            },
        ],
        
        'aliases' => [
            'elephant-io' => \Unisoft\ElephantIO\Service\SocketIOService::class,
        ],
    ],

];