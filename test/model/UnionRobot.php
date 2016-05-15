<?php
include_once '/base/RobotBase.php';

class UnionRobot extends RobotBase{
    private $robots = array();
    
    public function addRobot($robot){
        if(is_array($robot))
            foreach ($robot as $value) 
                $this->robots[] = $value;
        else
            $this->robots[] = $robot;
        $this->refreshStats();
    } 
    
    public function getSpeed(){
       return $this->speed;
    }
    
    public function getWeight(){
       return $this->weight;
    }
    
    public function getHeight(){
       return $this->height;
    }
    
    /**
     * Обновить свойства.
     */
    private function refreshStats(){
        $speed  = array();
        $weight = 0;
        $height = 0;
        foreach ($this->robots as $value) {
            $speed[] = $value->speed;
            $weight += $value->weight;
            $height += $value->height;
        }
        $this->speed = min($speed);
        $this->weight = $weight;
        $this->height = $height;
    }
}