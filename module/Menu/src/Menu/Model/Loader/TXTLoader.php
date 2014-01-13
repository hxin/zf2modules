<?php 
namespace Menu\Model\Loader;

class TXTLoader implements LoaderInterface{
    
    /**
     * 
     * @var AbstractRow
     */
    public $rowIndex;
    
    public function __construct(AbstractRow $row){
    	$this->rowIndex=$row;
    }
	/* (non-PHPdoc)
	 * @see \Menu\Model\Loader\LoaderInterface::load()
	 */
	public function load($filepath) {
	    $result=array();
	    if (file_exists($filepath)) {
	    	$file = fopen($filepath, "r") or exit("Unable to open $filepath!");
	    	while (! feof($file)) {
	    		$row = fgets($file);
	    		$rindex=$this->rowIndex;
	    		##skip comment
	    		if(preg_match('/^#/', $row)) continue;
	    		$row = trim($row, "\n");
	    		$items = explode("\t", $row);
	    		$tmp[$rindex::ROW_CATEGORY_ID]=$items[0];
	    		$tmp[$rindex::ROW_CATEGORY_NAME]=$items[1];
	    		$tmp[$rindex::ROW_CUISINE_ID]=$items[2];
	    		$tmp[$rindex::ROW_CUISINE_NAME]=$items[3];
	    		$tmp[$rindex::ROW_CUISINE_DESCRIPTION]=$items[4];
	    		$tmp[$rindex::ROW_PRICE]=$items[5];
	    		$tmp[$rindex::ROW_FEATURES]=json_decode($items[6]);
	    		$tmp[$rindex::ROW_OPTIONS]=json_decode($items[7]);
	    		$tmp[$rindex::ROW_ADDONS]=json_decode($items[8]);
	    		array_push($result, $tmp);
	    	}
	    	fclose($file);
	    } else {
	    	exit("$filepath doesn't exist");
	    }
	    return $result;		
	}

	
	/* (non-PHPdoc)
	 * @see \Menu\Model\Loader\LoaderInterface::getRowIndex()
	 */
	public function getRowIndex() {
		return $this->rowIndex;
	}




	
}

