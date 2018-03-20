<?php

namespace ElephantIO;

use Zend\ModuleManager\ModuleManagerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\EventManager\EventInterface;

class Module {

    public function onBootstrap(EventInterface $e) {

    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__."/src/",
                ),
            )
        );
    }

    public function getConfig(){
       return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig(){
        return array(
            'factories' => array(

            ),
        );
    }
 
}
?>