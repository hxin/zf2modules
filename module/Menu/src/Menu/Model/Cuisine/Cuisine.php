<?php 
namespace Menu\Model\Cuisine;

class Cuisine extends Addon{
	
	/* (non-PHPdoc)
	 * @see \Menu\Model\CuisineInterface::addAddon()
	 */
	public function addAddon(array $parm) {
		// TODO Auto-generated method stub
		
	}

	/* (non-PHPdoc)
	 * @see \Menu\Model\CuisineInterface::addOption()
	 */
	public function addOption(array $parm) {
		// TODO Auto-generated method stub
		
	}
	
	public function toString(){
		print $this->getId().$this->getName();
	}

	

}