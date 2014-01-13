<?php
namespace Menu;

use Zend\ServiceManager\ServiceManager;
use Menu\Model\Factory\FusionMenuFactory;
use Menu\Model\Loader\TXTLoader;
use Menu\Model\Loader\TXTRow;



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
                'menu_module_options' => function (ServiceManager $sm)
                {
                    $config = $sm->get('Config');
                    return new Options\ModuleOptions(isset($config['menu']['module_settings']) ? $config['menu']['module_settings'] : array());
                },
                'menu_fusionmenufactory' => function(ServiceManager $sm){
                    $options=$sm->get('menu_module_options');
                	return new FusionMenuFactory($options);
                },
                'menu_txtloader' => function(ServiceManager $sm){
                	return new TXTLoader(new TXTRow());
                },
                
                
            )
        )
        ;
    }

}
