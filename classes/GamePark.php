<?php

abstract class GamePark implements Auto
{
        public $name;
        public $move;
        
    
    public function __construct($name, $move)
    {
        $this->name = $name;
        $this->move = $move;
    }

    // abstract public function newObject() 
    // для реализации абстрактного метода 
// нижеследующий код:
// {
//     return "<hr><b>О транспорте:</b><br>
//             Наименование: {$this->name}<br>
//             Едет: {$this->move}<br>";
// }

// public function getName()
// {
//     return $this->name;
// }

// public function getMove()
// {
//     return $this->move;
// }
// разносится для реализации в наследуемые классы, что мною полностью осазнается,
// но целесообразность сего действия для меня сомнительна
// если я в чем то не прав, ожидаю от Вас комментарии

    public function newObject()
    {
        return "<hr><b>О транспорте:</b><br>
                Наименование: {$this->name}<br>
                Едет: {$this->move}<br>";
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getMove()
    {
        return $this->move;
    }
}