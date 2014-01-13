<?php
namespace Menu\Model\Cuisine;

class AbstractCuisine implements CuisineInterface,\JsonSerializable
{ 

    /**
     *
     * @var int
     */
    protected $id = null;

    /**
     *
     * @var string
     */
    protected $chineseName = '';

    /**
     *
     * @var string
     */
    protected $englishName = '';

    /**
     *
     * @var string
     */
    protected $chineseDescription = '';

    /**
     *
     * @var string
     */
    protected $englishDescription = '';

    /**
     *
     * @var Category
     */
    protected $category = null;

    /**
     *
     * @var array
     */
    protected $addons = array();

    /**
     *
     * @var array
     */
    protected $options = array();

    /**	/* (non-PHPdoc)
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
    /*
     * hot?sweet?nut?
     *
     * @var array
     */
    protected $features = array();

    /**Cuisine
     *
     * @var int
     */
    protected $price = 0;
    
    
	public function __construct($id,$chineseName,$englishName,$features,$price){
		$this->id=(int)$id;
		$this->chineseName=($chineseName)?$chineseName:'';
		$this->englishName=($englishName)?$englishName:'';
		$this->features=empty($features)?$features:array();
		$this->price=$price?$price:0;
	}
	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize() {
	    return get_object_vars($this);
	}



    
    

}