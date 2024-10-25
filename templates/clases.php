<?php
class SuperHero{
    
    //funcion que crea el objeto
    //promoted properties, exclusivo de php 8.0
    public function __construct( 
        readonly public string $name, //readonly para qe no se pueda modificar 
        public array $powers,  
        private string $planet) //no se puede acceder a ella desde fuera
    {
       
    }

    public function attack(){
        return "¡$this=>name ataca con sus poderes!";
    }

    public function description(){
        $powers = implode(",", $this->powers) ; //implode convierte array en cadena de texto
        return "$this->name es un superhéroe que viene de $this->planet y tiene estos poderes: $powers";
    }
}

$hero = new SuperHero('Superman', ['Inteligencia', 'fuerza', 'rayos láser'], 'Krypton');

 echo $hero->description();
?>