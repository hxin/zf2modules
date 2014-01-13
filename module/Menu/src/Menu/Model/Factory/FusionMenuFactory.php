<?php
namespace Menu\Model\Factory;


use Menu\Model\Cuisine\Cuisine;
use Menu\Options\ModuleOptions;

class FusionMenuFactory implements FactoryInterface
{
    /**
     * 
     * @var ModuleOptions
     */
    protected $options=array();
    
    /* (non-PHPdoc)
     * @see \Menu\Model\Factory\FactoryInterface::__construct()
    */
    public function __construct(\Menu\Options\ModuleOptions $module_options) {
    	$this->options=$module_options;
    }
    
    /*
     * (non-PHPdoc) @see \Menu\Model\Factory\FactoryInterface::create()
     */
    public function create(\Menu\Model\Loader\LoaderInterface $loader)
    {
        // TODO Auto-generated method stub 
        $array = $loader->load(__DIR__ . "/../../../../data/menu_chinese");
        $cuisines=array();
        $rowindex=$loader->getRowIndex();
        
        foreach ($array as $c) {
            $cuisine=new Cuisine($c[$rowindex::ROW_CATEGORY_ID],$c[$rowindex::ROW_CATEGORY_NAME],$c[$rowindex::ROW_CUISINE_ID], 
                $c[$rowindex::ROW_CUISINE_NAME], $c[$rowindex::ROW_CUISINE_DESCRIPTION],
                 $c[$rowindex::ROW_PRICE], (array)$c[$rowindex::ROW_ADDONS],(array)$c[$rowindex::ROW_OPTIONS], 
                (array)$c[$rowindex::ROW_FEATURES]);
            $cuisines[]=$cuisine;
        }
        $menu=new \Menu\Model\Menu\FusionMenu($cuisines);
        return $menu;
    }




}