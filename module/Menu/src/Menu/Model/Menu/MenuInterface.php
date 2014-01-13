<?php 
namespace Menu\Model\Menu;

use Menu\Model\Cuisine\Cuisine;
Interface MenuInterface{
    /**
     * @param  String $id
     * @return \CuisineInterface
     */
    public function findCuisine($id);
    /**
     * 
     * @param Cuisine $cuisine
     */
    public function addCuisine(Cuisine $cuisine);

}