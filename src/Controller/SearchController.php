<?php
class SearchController
{

    private $title;

    public function __construct(){
        $this->title = "Recherchez un film";
    }


    function manage(){
        include(__DIR__."./../view/search.php");
 
    }

}