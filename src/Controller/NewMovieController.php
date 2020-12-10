<?php

class NewMovieController
{
    private $title;
    private $model;

    public function __construct(){
        $this->title = "Ajoutez un film";
        $this->model = new Model;
    }


    function manage(){

        if(isset($_POST['name']) AND $_POST['name'] != null)
        {
            $this->model->addNewMovie($_POST['name'], $_POST['image'],$_POST['release_year']);
        }
        include(__DIR__."./../view/newMovie.php");
    }


}