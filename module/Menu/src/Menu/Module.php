<?php
namespace Menu;

use Zend\ServiceManager\ServiceManager;



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
                'menu_config' => function(ServiceManager $sm){
                	$config = $sm->get('Config');
                	return new Options\MenuOptions(isset($config['menu']['menu_settings']) ? $config['menu']['menu_settings'] : array());
                },
                'menu_factory' => function(ServiceManager $sm){
                	return new MenuFactoty($sm->get('menu_config'));
                },
                
            )
        )
        ;
    }

}
