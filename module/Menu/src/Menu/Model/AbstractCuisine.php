<?php
namespace Menu\Model;

abstract class AbstractCuisine implements CuisineInterface
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
    
    
	public function __construct($id,$chineseName,$englishName,$features,$price){
		$this->id=(int)$id;
		$this->chineseName=($chineseName)?$chineseName:'';
		$this->englishName=($englishName)?$englishName:'';
		$this->features=empty($features)?$features:array();
		$this->price=$price?$price:0;
	}
    
    
    
    
    
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $chineseName
	 */
	public function getChineseName() {
		return $this->chineseName;
	}

	/**
	 * @return the $englishName
	 */
	public function getEnglishName() {
		return $this->englishName;
	}

	/**
	 * @return the $chineseDescription
	 */
	public function getChineseDescription() {
		return $this->chineseDescription;
	}

	/**
	 * @return the $englishDescription
	 */
	public function getEnglishDescription() {
		return $this->englishDescription;
	}

	/**
	 * @return the $category
	 */
	public function getCategory() {
		return $this->category;
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
	 * @return the $feature
	 */
	public function getFeature() {
		return $this->feature;
	}

	/**
	 * @return the $price
	 */
	public function getPrice() {
		return $this->price;
	}
	/**
	 * @param number $id
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @param string $chineseName
	 */
	protected function setChineseName($chineseName) {
		$this->chineseName = $chineseName;
		return $this;
	}

	/**
	 * @param string $englishName
	 */
	protected function setEnglishName($englishName) {
		$this->englishName = $englishName;
		return $this;
	}

	/**
	 * @param string $chineseDescription
	 */
	protected function setChineseDescription($chineseDescription) {
		$this->chineseDescription = $chineseDescription;
		return $this;
	}

	/**
	 * @param string $englishDescription
	 */
	protected function setEnglishDescription($englishDescription) {
		$this->englishDescription = $englishDescription;
		return $this;
	}

	/**
	 * @param \Menu\Model\Category $category
	 */
	protected function setCategory($category) {
		$this->category = $category;
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
	 * @param multitype: $feature
	 */
	protected function setFeature($feature) {
		$this->feature = $feature;
		return $this;
	}

	/**
	 * @param number $price
	 */
	protected function setPrice($price) {
		$this->price = $price;
		return $this;
	}



  

    
    
    
    
    
    
    
    
    
    
    
}