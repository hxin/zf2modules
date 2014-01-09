<?php 
namespace Menu\Model;

class Category{
    /**
     *
     * @var int
     */
	protected $id;
	/**
	 * 
	 * @var string
	 */
	protected $chineseName='';
	/**
	 *
	 * @var string
	 */
	protected $englishName='';
	/**
	 * @param number $id
	 */
	
	public function __construct($id,$chineseName,$englishName){
		$this->id=(int)$id;
		$this->chineseName=($chineseName)?$chineseName:'';
	    $this->englishName=($englishName)?$englishName:'';
	}
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


	
	
	
	
	
}