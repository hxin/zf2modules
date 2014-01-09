<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Log\Logger;


class TestController extends AbstractActionController
{
    protected $logger;
    
    public function indexAction()
    {
        $this->getLogger()->emerg('aaa');
    	return new ViewModel();
    }
    
    public function index2Action()
    {
       
    	return new ViewModel();
    }
    
    public function getLogger(){
    	if(!$this->logger instanceof Logger){
    		$this->logger=new Logger();
    		$this->logger->addWriter('stream', null, array('stream' => 'php://output'));
    		Logger::registerErrorHandler($this->logger);
    	}
    	return $this->logger;
    }
}
