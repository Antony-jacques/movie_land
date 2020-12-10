<?php

class MovieController
{

    private $title;

    public function __construct(){
        $this->title = "Voir le detail du film";
    }

    function manage(){
        include(__DIR__."./../view/movie.php");

    }

}