<?php 
namespace Menu\Model\Factory;

interface FactoryInterface{
    public function createFromFile($file);
    public function get($id);
}