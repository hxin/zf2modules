<?php 
namespace Menu\Model;

class Option extends AbstractCuisine{
	
    public function __construct($id,$englishName,$chineseName,$price,array $features){
    	parent::__construct($id, $chineseName, $englishName, $features, $price);
    }
    
	/* (non-PHPdoc)
	 * @see \Menu\Model\CuisineInterface::toJson()
	 */
	public function toJson() {
		// TODO Auto-generated method stub
		
	}

	/* (non-PHPdoc)
	 * @see \Menu\Model\CuisineInterface::toString()
	 */
	public function toString() {
		// TODO Auto-generated method stub
		
	}


}