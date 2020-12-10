<?php
class Model
{
    public function __construct()
    {
        $db = BddAccess::getInstance();
        $this->handle = $db->getHandle();
        
    }

    public function getAllMovies(){
        try{
            $request = $this->handle->query('SELECT * FROM movies');
            $result = $request->fetchAll();
            return $result;
        } catch(PDOException $e){
            var_dump('Erreur lors de la requete SQL:' . $e->getMessage());
        }
    }

    public function addNewMovie($name,$image,$release_year){
        try{
            $request = $this->handle->prepare('INSERT INTO movies(name, image, release_year) VALUES(?,?,?) ');

            $request->execute(array(
                $name,$image,$release_year
            ));

            // à effacer en prod ?
        } catch (PDOException $e){
            var_dump('Erreur lors de la requete SQL:' . $e->getMessage());
        }
    }
}