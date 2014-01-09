<?php 
namespace Menu\Model;

class Menu implements MenuInterface{ 
    
    protected $cuisines;
    protected $date;
    
    public function __construct(array $cuisines,$address,$tel){
        print "menucons";
    }
    
	/* (non-PHPdoc)
	 * @see \Menu\Model\MenuInterface::toJson()
	 */
	public function toJson() {
		// TODO Auto-generated method stub
		print 'toJson';
	}

	/* (non-PHPdoc)
	 * @see \Menu\Model\MenuInterface::toString()
	 */
	public function toString() {
		// TODO Auto-generated method stub
		
	}


	
}

