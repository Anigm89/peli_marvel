<?php
declare(strict_types=1);
//const API_URL = 'https://whenisthenextmcufilm.com/api';

function render_template(string $template, array $data = [])
{   
    extract($data);
   // var_dump($data);
 //   $data = ['title' => 'hola']; 
 //   $title = 'hola';  esto es lo que obtenemos al hacer el extract
    require "templates/$template.php"; 

}
function get_data( string $url) : array 
{
    $result = file_get_contents($url); //solo hace get
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match(true){
        $days === 0 => 'Hoy se estrena',
        $days === 1 => 'Mañana se estrena',
        $days < 7   => 'Se estrena esta semana',
        $days < 30  => 'se estrena en este mes',
        default     => "$days días hasta el estreno",

    };
}

?>
