<?php 
namespace Menu\Model;

Interface CuisineInterface{
    
    public function getPrice();
    
	public function toJson();
	public function toString();
}