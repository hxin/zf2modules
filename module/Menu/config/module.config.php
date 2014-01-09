<?php
namespace Menu;

return array(
    'controllers' => array(
        'invokables' => array(
            'Menu\Controller\Index' => 'Menu\Controller\IndexController'
        )
    ),
    'router' => array(
        'routes' => array(
            'menu' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/menu',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Menu\Controller',
                        'controller' => 'Index',
                        'action' => 'index'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array()
                        )
                    )
                )
            )     
        )
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        
        'display_exceptions' => true
    )
);


