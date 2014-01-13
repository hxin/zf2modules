<?php 
namespace Menu\Model\Cuisine;

class Addon implements CuisineInterface,\JsonSerializable{
    /**
     *
     * @var string
     */
    protected $category_id = null;
    
    /**
     *
     * @var string
     */
    protected $category_name = '';
    
    
    /**
     *
     * @var int
     */
    protected $id = null;
    
    /**
     *
     * @var string
     */
    protected $name = '';
    
    
    /**
     *
     * @var string
     */
    protected $description = '';
    

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
    
    /**
     * hot?sweet?nut?
     *
     * @var array
    */
    protected $features = array();
    
    /**
     *
     * @var int
    */
    protected $price = 0;
    
    public function __construct($category_id,$category_name,$id,$name,$des,$price,array $addons,array $options,array $features){
    	$this->category_id=$category_id;
    	$this->category_name=$category_name;
    	$this->id=$id;
    	$this->name=$name;
    	$this->description=$des;
    	$this->price=$price;
    	$this->addons=$addons;
    	$this->options=$options;
    	$this->features=Feature::getFestures($features);
    }
	/**
	 * @return the $category_id
	 */
	public function getCategory_id() {
		return $this->category_id;
	}

	/**
	 * @return the $category_name
	 */
	public function getCategory_name() {
		return $this->category_name;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return the $addons
	 */
	public function getAddons() {
		return $this->addons;
	}

	/**
	 * @return the $options
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * @return the $features
	 */
	public function getFeatures() {
		return $this->features;
	}

	/**
	 * @return the $price
	 */
	public function getPrice() {
		return $this->price;
	}
	/**
	 * @param string $category_id
	 */
	protected function setCategory_id($category_id) {
		$this->category_id = $category_id;
		return $this;
	}

	/**
	 * @param string $category_name
	 */
	protected function setCategory_name($category_name) {
		$this->category_name = $category_name;
		return $this;
	}

	/**
	 * @param number $id
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @param string $name
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $description
	 */
	protected function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * @param multitype: $addons
	 */
	protected function setAddons($addons) {
		$this->addons = $addons;
		return $this;
	}

	/**
	 * @param multitype: $options
	 */
	protected function setOptions($options) {
		$this->options = $options;
		return $this;
	}

	/**
	 * @param multitype: $features
	 */
	protected function setFeatures($features) {
		$this->features = $features;
		return $this;
	}

	/**
	 * @param number $price
	 */
	protected function setPrice($price) {
		$this->price = $price;
		return $this;
	}
	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize() {
		return get_object_vars($this);
	}



   
    
}