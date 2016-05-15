<?php

class FactoryBase{
    private $types = array();
    private $robots = array();
    
    /**
     * Добавить тип робота.
     * @param object $type
     */
    public function addType($type){
        $this->types[get_class($type)] = $type;
    }
    
    public function createRobot($name, $count){
        for($i = 0; $i < $count; $i++){
            $this->robots[$name][]  = clone $this->types[$name];
        }
        return $this->robots[$name];
    }

}