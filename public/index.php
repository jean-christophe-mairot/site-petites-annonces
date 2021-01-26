<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

//le mapping des route la carte des routes
// /accueil , target, nom de la route
$router->map( 'GET', '/Accueil', 'accueil', 'accueil' );
$router->map( 'GET', '/404', '404', '404' );
$router->map( 'GET', '/Ajout', 'creatAnnonces', 'creatAnnonces' );
$router->map( 'GET', '/Modification', 'updateAnnonces', 'updateAnnonces' );

//on fait matdher les route au map
$match = $router->match();

//check si il a une des map qui est dans le tableau sinon renvoie une 404
if(is_array($match)){
    if(is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        $target=  $match['target'];
        //match le target with view
        include "../views/{$target}.view.php";
    }
}else{
    //renvoie vers la 4040
    include "../views/404.view.php";
}

?>
