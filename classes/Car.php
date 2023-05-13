<?php

class Car extends GamePark
{
    protected $useAbility; // 3 нитро - дворники - сигнал
    protected $carInterior; // 3 кожа - кожзам - полиестр
    protected $color; // любой    

    public function __construct($name, $move, $useAbility, $carInterior, $color)
    {
        parent::__construct($name, $move);
        $this->useAbility = $useAbility;
        $this->carInterior = $carInterior;
        $this->color = $color;
    }

    public function newObject()
    {
        $out = parent::newObject();
        $out .= "Использует: {$this->useAbility}<br>
            Имеет: {$this->carInterior} салон<br>
            Цвет: {$this->color}<br>";
        return $out;
    }
// можно добавлять любое колличество свойств
    public function getUseAbility()
    {
        return $this->useAbility;
    }

    public function getCarInteriory()
    {
        return $this->carInteriory;
    }

        public function getColor()
    {
        return $this->color;
    }
}