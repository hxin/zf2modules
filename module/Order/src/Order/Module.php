<?php
namespace Order;

use Zend\ServiceManager\ServiceManager;
use Order\Options\OrderOptions;




class Module
{

    
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__
                )
            )
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'order_module_options' => function (ServiceManager $sm)
                {
                    $config = $sm->get('Config');
                    return new OrderOptions(isset($config['order']['module_settings']) ? $config['order']['module_settings'] : array());
                },                
            )
        )
        ;
    }

}
