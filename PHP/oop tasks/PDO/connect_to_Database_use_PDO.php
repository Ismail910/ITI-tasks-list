<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> connected to database use PDO </h1>";


class connecte_Database {
    
    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "";
    private $database = "CRUDphp";
    public $conn;
    public function Connection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=". $this.$this->host . ";dbname=" . $this->database, $this->userName, $this->password);
            $this->conn->exec("set names ");
        }catch(PDOException $e){
            echo "Database could not be connected: " . $e->getMessage();
        }
        return $this->conn;
    }
}

