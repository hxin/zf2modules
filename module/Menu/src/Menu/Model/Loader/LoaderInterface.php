<?php 
namespace Menu\Model\Loader;

interface LoaderInterface{
    /**
     * 
     * @param String $filepath
     * @return array menu array
     */
    public function load($filepath);
    /**
     * @return RowInterface
     */
    public function getRowIndex();
}