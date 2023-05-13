<?php

class Tanks extends GamePark
{
    protected $useAbility; // 1 стрелять
    protected $color; // 1 камуфляж


    public function __construct($name, $move, $useAbility, $color)
    {
        parent::__construct($name, $move);
        $this->useAbility = $useAbility;
        $this->color = $color;
    }

    public function newObject()
    {
        $out = parent::newObject();
        $out .= "Использует пушку для возможности {$this->useAbility}<br>
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