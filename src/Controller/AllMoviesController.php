<?php

class AllMoviesController
{

    private $title;
    private $movieList;
    private $model;

    public function __construct(){
        $this->title = "Toutes les films";
        $this->model = new Model();
        $this->movieList = null;
    }

    function manage(){

        $this->movieList = $this->model->getAllMovies();
        include(__DIR__."./../view/movies.php");

    }

}