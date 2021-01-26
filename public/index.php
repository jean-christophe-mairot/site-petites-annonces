<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

// $router->map( 'GET', '/', function() {
//     require __DIR__ . '/view/accueil.view.php';
// });
$router->map( 'GET', '/', 'index', 'index' );


var_dump($_GET);
?>
