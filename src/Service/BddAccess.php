<?php
class BddAccess
{
    private static $instance = null;
    private $handle;

    public function __construct(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $dbName = "movies_land";

        try{
            $this->handle = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password,
            array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION)
        );

        } catch(PDOException $e){
            die ('Echec de la connection'. $e->getMessage());
            }
        
    }

    //Singleton
    public static function getInstance(){
        if(is_null(self::$instance)){
            //$instance = nouvel objet de la class BddAccess
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return$this->handle;
    }
}