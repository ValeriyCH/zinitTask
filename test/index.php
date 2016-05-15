<?php
header('Content-Type: text/html; charset=utf-8');
include '/factory/Factory.php';
include '/model/MyHydra1.php';
include '/model/MyHydra2.php';
include '/model/UnionRobot.php';

$factory = new Factory();

$factory->addType(new MyHydra1());
$factory->addType(new MyHydra2());

echo '<pre>';
var_dump($factory->createMyHydra1(2));
var_dump($factory->createMyHydra2(4));
echo '</pre>';

$unionRobot = new UnionRobot();
$unionRobot->addRobot(new MyHydra1());
$unionRobot->addRobot($factory->createMyHydra2(2));

$factory->addType($unionRobot);

$union = $factory->createUnionRobot(2);

$res = reset($union);

echo "Скорость объедененного робота: {$res->getSpeed()}";
echo '</br>';
echo "Вес объедененного робота: {$res->getWeight()}";