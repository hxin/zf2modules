<?php 
namespace Menu\Model;

class Feature{
	const FEATURE_HOT='hot';
	const FEATURE_NUT='nut';
	const FEATURE_VEG='veg';
	
	public static function getFestures(array $features){
	    $results=array();
	    if ($features[0] === 'y') {
	    	$results[]=Feature::FEATURE_HOT;
	    }
	    if($features[1] === 'y'){
	    	$results[]=Feature::FEATURE_NUT;
	    }
	    if($features[2] === 'y'){
	    	$results[]=Feature::FEATURE_VEG;
	    }
	}
}