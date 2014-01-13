<?php 
namespace Menu\Model\Factory;

use Menu\Model\Loader\LoaderInterface;
use Menu\Options\ModuleOptions;
interface FactoryInterface{
    
    public function __construct(ModuleOptions $module_options);
    /**
     * 
     * @param LoaderInterface $loader
     * @return \Menu\Model\MenuInterface
     */
    public function create(LoaderInterface $loader);
    
}