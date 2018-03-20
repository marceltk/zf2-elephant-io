<?php

return [

    'service_manaer' => [
        'factories' => [
            'ElephantIO\Service\SocketIOService' => function ($sm) {
                return new \ElephantIO\Service\SocketIOService($sm);
            },
        ],
    ],

];