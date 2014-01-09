<?php 
namespace Menu\Model;

class Cuisine extends AbstractCuisine{
	
    protected $addons=array();
    protected $options=array();
    
    public function __construct($id,$category,$chineseName,$englishName,$chineseDescription,$englishDescription,
    		$addons,$options,$features,$price){
        parent::__construct($id, $chineseName, $englishName, $features, $price);
        $this->category=$category;
    	$this->chineseDescription = ($chineseDescription) ? $chineseDescription : '';
    	$this->englishDescription = ($englishDescription) ? $englishDescription : '';
    	$this->addons=empty($addons)?$addons:array();
    	$this->options=empty($options)?$options:array();
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