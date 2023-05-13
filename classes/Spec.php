<?php

class Spec extends GamePark
{
    protected $useAbility; // 2 ковш - дворники
    protected $color; // желтый - красный - синий


    public function __construct($name, $move, $useAbility, $color)
    {
        parent::__construct($name, $move);
        $this->useAbility = $useAbility;
        $this->color = $color;
    }

    public function newObject()
    {
        $out = parent::newObject();
        $out .= "Использует: {$this->useAbility}<br>
                Цвет: {$this->color}<br>";
        return $out;
    }
        
    public function getUseAbility()
    {
        return $this->useAbility;
    }

    public function getColor()
    {
        return $this->color;
    }
}