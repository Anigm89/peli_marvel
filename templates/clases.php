<?php
declare(strict_types=1);

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
    
    public function show_all(){
        return get_object_vars($this);
    }

    public function description(){
        $powers = implode(", ", $this->powers) ; //implode convierte array en cadena de texto
        return "$this->name es un superhéroe que viene de $this->planet y tiene estos poderes: $powers ";
    }

    public static function random(){
        $names = ['Thor', 'Lobezno', 'Ironman'];
        $powers = [
            ['superfuerza', 'martillo', 'volar'],
            ['garras adamantium', 'fuerza', 'regeneración'],
            ['volar', 'tecnología', 'dinero'],
        ];
        $planets =['Asgard', 'Tierra',];
        $name = $names[array_rand($names)]; //devuelve la key aleatoria del array
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

       // echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes:" . implode(", ", $power);

       //creamos el objeto dentro
       return new self($name,$power, $planet);
    }
}
//método publico. Hay que instanciar
$hero = new SuperHero('Superman', ['Inteligencia', 'fuerza', 'rayos láser'], 'Krypton');

 echo $hero->description();

 //var_dump($hero->show_all());

 //método estático
 //SuperHero::random(); //para acceder al metodo  estatico ramdom y mostrar el echo comentado

 $hero = SuperHero::random();
 echo $hero->description();

?>
