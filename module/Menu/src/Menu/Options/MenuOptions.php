<?php

namespace Menu\Options;

use Zend\Stdlib\AbstractOptions;

class MenuOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $address = '57 Clerk Street, Edinburgh, EH8 9JQ';
    
    /**
     * @var string
     */
    protected $tel = '01316676616';
    
	/**
	 * @return the $tel
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * @param string $tel
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}

	/**
	 * @return the $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}


  
}
