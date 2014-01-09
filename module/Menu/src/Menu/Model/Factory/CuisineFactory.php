<?php 
namespace Menu\Model\Factory;

class CuisineFactory implements FactoryInterface{
    
    protected $cuisines = array();
    
    /*
     * (non-PHPdoc) @see \Menu\Model\Factory\FactotyInterface::create()
    */
    public function createFromFile($file)
    {
    	$this->cuisines = array();
    	if (file_exists($file)) {
    		$a = fopen($file, "r") or exit("Unable to open cuisine file!");
    		while (! feof($a)) {
    			$row = fgets($a);
    			$row = trim($row, "\n");
    			$items = explode("\t", $row);
    			$addon = new Addon($items[0], $items[1], $items[2], $items[3], Feature::getFestures(array(
    					$items[4],
    					$items[5],
    					$items[6]
    			)));
    			array_push($this->addons, $addon);
    		}
    		fclose($a);
    	} else {
    		exit("addon file doesn't exist");
    	}
    }
    /*
     * (non-PHPdoc) @see \Menu\Model\Factory\FactoryInterface::get()
    */
    public function get($id)
    {
    	if (empty($this->addons)) {
    		exit('please create addons first!');
    	}
    
    	$result = array_filter($this->addons, function ($n)
    	{
    		if ($n->getId() === $id) {
    			return true;
    		}
    	});
    
    	if (empty($result)) {
    		exit("cannot find addon with id $id");
    	} else {
    		return $result[0];
    	}
    }

	
}