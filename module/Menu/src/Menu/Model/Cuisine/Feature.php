<?php 
namespace Menu\Model\Cuisine;

class Feature{
	const FEATURE_HOT='hot';
	const FEATURE_NUT='nut';
	const FEATURE_VEG='veg';
	
	public static function getFestures(array $features){
	    $results=array();
	    if(in_array('h', $features)){
	    	$results[]=Feature::FEATURE_HOT;
	    }
	    if(in_array('n', $features)){
	    	$results[]=Feature::FEATURE_NUT;
	    }
	    if(in_array('v', $features)){
	    	$results[]=Feature::FEATURE_VEG;
	    }
        return $results;
	}
}