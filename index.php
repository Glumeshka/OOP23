<?php

require_once 'interfaces/Auto.php';
require_once 'classes/GamePark.php';
require_once 'classes/Car.php';
require_once 'classes/Tanks.php';
require_once 'classes/Spec.php';

$car = new Car('Волга', 'вперед', 'сигнал', 'кожаный', 'синий');
echo $car->newObject();

$spec = new Spec('Бульдозер', 'назад', 'Ковш', 'желтый');
echo $spec->newObject();

$tank = new Tanks('Т98', 'боком', 'стрелять', 'камуфляжный');
echo $tank->newObject();
