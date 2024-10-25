<?php
class SuperHero{
    public $name;
    public $powers;
    public $planet;

    public function __construct($name, $powers, $planet) //funcion que crea el objeto
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }

    public function attack(){
        return "¡$this=>name ataca con sus poderes!";
    }

    public function description(){
        return "$this->name es un superhéroe que viene de $this->planet y tiene estos poderes: $this->powers";
    }
}

$hero = new SuperHero('Superman', 'Inteligencia, fuerza y rayos láser', 'Krypton');
//$hero->name = 'Batman';
//$hero->powers = 'Inteligencia, dinero y tecnología';
//$hero->planet = 'Gotham';
 echo $hero->description();
?>