<?php
include_once '/base/FactoryBase.php';

class Factory extends FactoryBase{
     /**
     * Методы для создания роботов. $name - название класса
     * @param type $count
     * @return type
     */
    public function createMyHydra1($count){
        $name = 'MyHydra1';
        return $this->createRobot($name, $count);
    }
    public function createMyHydra2($count){
        $name = 'MyHydra2';
        return $this->createRobot($name, $count);
    }
    public function createMyHydra3($count){
        $name = 'MyHydra3';
        return $this->createRobot($name, $count);
    }
    public function createUnionRobot($count){
        $name = 'UnionRobot';
        return $this->createRobot($name, $count);
    }
    
    //**************************************************************************

}