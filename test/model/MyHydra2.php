<?php
include_once '/base/RobotBase.php';

class MyHydra2 extends RobotBase{
    function __construct() {
        $this->weight = 10;
        $this->height = 50;
        $this->speed  = 30;
    }
}