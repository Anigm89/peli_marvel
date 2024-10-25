<?php
require_once 'consts.php';
//require 'functions.php'; // funciona sin exportar ese archivo, es como pegar aqui el archivo
require_once 'functions.php'; //solo lo requiere una vez en todo el proyecto(para q no de errores). Si el archivo no existe, da error.
//include_once 'functions.php'; //si no encuentra el archivo solo da una advertencia, pero sigue ejecutando el resto del código. Para cosas secundarias o poco importantes

$data = get_data(API_URL);
$untilMessage = get_until_message($data['days_until']);

//var_dump($data);

?>

<?php render_template('head', ['title' => $data['title']]) ; ?>
<?php render_template('main', array_merge(
    $data,
    ['untilMessage' => $untilMessage]
)); ?>
<?php render_template('styles') ; ?>
