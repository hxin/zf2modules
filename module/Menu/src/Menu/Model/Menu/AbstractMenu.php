<?php
namespace Menu\Model\Menu;

use Menu\Model\Cuisine\Cuisine;


class AbstractMenu implements MenuInterface,\JsonSerializable
{

    protected $cuisines=array();
    protected $date=null;
    
    public function __construct(array $cuisines){
    	$this->cuisines=$cuisines;
    	
    	
    }
    
    /*
     * (non-PHPdoc) @see \Menu\Model\MenuInterface::findCuisine()
     */
    public function findCuisine($id)
    {
        if (empty($this->cuisines)) {
            return null;
        }
        
        $result = array_filter($this->cuisines, function (Cuisine $c)
        {
            if ($c->getId() === $id) {
                return true;
            }
        });
        
        if (empty($result)) {
            exit("cannot find cuisine with id $id");
        } else {
            return $result[0];
        }
    }
    
    /*
     * (non-PHPdoc) @see \Menu\Model\MenuInterface::addCuisine()
     */
    public function addCuisine(Cuisine $cuisine)
    {
        $this->cuisines[]=$cuisine;
    }

	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize() {
	    return get_object_vars($this);
	}


	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */


 

    
}

