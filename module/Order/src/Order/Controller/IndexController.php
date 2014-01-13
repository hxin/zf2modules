<?php
/**
 * coolcsn * Index Controller
 * @link https://github.com/coolcsn/CsnUser for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnUser/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>
 * @author Nikola Vasilev <niko7vasilev@gmail.com>
 * @author Svetoslav Chonkov <svetoslav.chonkov@gmail.com>
 * @author Stoyan Revov <st.revov@gmail.com>
 */

namespace Order\Controller;

use Zend\Mvc\Controller\AbstractActionController;


use Zend\ServiceManager\ServiceManager;


/**
 * <b>Authentication controller</b>
 * This controller has been build with educational purposes to demonstrate how authentication can be done
 */
class IndexController extends AbstractActionController
{
    /**
     * @var ModuleOptions
     */
    protected $options;


    /**
     * 
     * @var ServiceManager
     */
    protected $sm;
    
    /**
     * Index action
     *
     * The method show to users they are guests
     *
     * @return Zend\View\Model\ViewModelarray navigation menu
     */
    public function indexAction()
    {
        header('Content-Type: text/html; charset=utf-8');
        $f=$this->getMenuFactory();
        $menu=$f->create($this->getTXTLoader());
        return new JsonModel(array('menu'=>$menu));
    }
    
    public function testAction(){
        ini_set('xdebug.var_display_max_data', '99999999');
        header('Content-Type: text/html; charset=utf-8');
        $f=$this->getMenuFactory();
        $menu=$f->create($this->getTXTLoader());
        print var_dump(json_encode($menu,JSON_PRETTY_PRINT));
        exit;
    }
    
    /**
     * @return FusionMenuFactory
     */
    public function getMenuFactory(){
    	return $this->getServiceLocator()->get('menu_fusionmenufactory');
    }
    
    /**
     * @return TXTLoader
     */
    public function getTXTLoader(){
    	return $this->getServiceLocator()->get('menu_txtloader');
    }

     /**
     * set options
     *
     * @return IndexController
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * get options
     *
     * @return ModuleOptions
     */
    public function getOptions()
    {
        if (!$this->options instanceof ModuleOptions) {
            $this->setOptions($this->getServiceLocator()->get('menu_module_options'));
        }
        return $this->options;
    }
}
