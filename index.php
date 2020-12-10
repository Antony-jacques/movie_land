<?php

require('src/Controller/HomeController.php');
require('src/Controller/SearchController.php');
require('src/Controller/AllMoviesController.php');
require('src/Controller/MovieController.php');
require('src/Controller/NewMovieController.php');
require('src/Model/model.php');
require('src/Service/BddAccess.php');





//permet de recuperer la variable de la superglobale GET qui a l'index "page". si il n'y a pas de resultat la f rencoie null
$page = filter_input(INPUT_GET, "page");

// on cree toutes les routes qui vont chacune appeller une class
$route = array(
    "home" => HomeController::class,
    "search" => SearchController::class,
    "movies" => AllMoviesController::class,
   // "ad" => AdsController::class,
    "newMovie" => NewMovieController::class


);

foreach($route as $routeValue => $className){
    //compare la page qui est dans get (url) avec l'index du tableau $route que nous avons créé
    if($page === $routeValue){
        $controller = new $className;
        $controller->manage();
        break;
    }
}

//si $controller n'existe pas
if(!isset($controller)){
    //on va a la page d'accueil
    $controller = new HomeController();
    $controller->manage();
}