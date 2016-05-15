<?php
include_once '/base/RobotBase.php';

class MyHydra1 extends RobotBase{
    function __construct() {
        $this->weight = 20;
        $this->height = 30;
        $this->speed  = 10;
    }
}
