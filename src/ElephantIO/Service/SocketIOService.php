<?php

namespace ElephantIOModule\Service;

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;

class SocketIOService
{

    private static $servicemanager;

    public function __construct($sm)
    {
        self::$servicemanager = $sm;
    }

    public function emit($arrayMessage = [])
    {
        $config = $this->_sm->get("Config");
        $endpoint = $config['elephant-io']['endpoint'] . ':' . $config['elephant-io']['port'];

        $client = new Client(new Version1X($endpoint));

        $client->initialize();
        $client->emit('message', $arrayMessage);

        $client->close();
    }

}
