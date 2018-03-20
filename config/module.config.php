<?php

return [

    'service_manager' => [
        'factories' => [
            \ElephantIOModule\Service\SocketIOService::class => function ($sm) {
                return new \ElephantIOModule\Service\SocketIOService($sm);
            },
        ],

        'aliases' => [
            'elephant-io' => \ElephantIOModule\Service\SocketIOService::class,
        ],
    ],

];