<?php 
namespace Menu\Model\Factory;

use Menu\Model\Option;
use Menu\Model\Feature;
class OptionFactory implements FactoryInterface{
    
    protected $options = array();
    
    /*
     * (non-PHPdoc) @see \Menu\Model\Factory\FactotyInterface::create()
    */
    public function createFromFile($file)
    {
    	$this->options = array();
    	if (file_exists($file)) {
    		$a = fopen($file, "r") or exit("Unable to open option file!");
    		while (! feof($a)) {
    			$row = fgets($a);
    			$row = trim($row, "\n");
    			$items = explode("\t", $row);
    			$option = new Option($items[0], $items[1], $items[2], $items[3], Feature::getFestures(array(
    					$items[4],
    					$items[5],
    					$items[6]
    			)));
    			array_push($this->options, $option);
    		}
    		fclose($a);
    	} else {
    		exit("option file doesn't exist");
    	}
    }
    /*
     * (non-PHPdoc) @see \Menu\Model\Factory\FactoryInterface::get()
    */
    public function get($id)
    {
    	if (empty($this->options)) {
    		exit('please create options first!');
    	}
    
    	$result = array_filter($this->options, function ($n)
    	{
    		if ($n->getId() === $id) {
    			return true;
    		}
    	});
    
    	if (empty($result)) {
    		exit("cannot find option with id $id");
    	} else {
    		return $result[0];
    	}
    }
	
}