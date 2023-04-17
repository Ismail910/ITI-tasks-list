<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> Curd Operations  </h1>";

class user {
    private $conn;
    private $db_Table = "users";
    public $ID;
    public $Name;
    public $email;
    public $password;
    public $photo;

    public function __construct($db){
        $this->conn = $db;
    }
    public function getUsers(){
        $sql = "SELECT * FROM " . $this->db_Table . "";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function creatUser(){

        //$query="Insert INTO `users` (`Name`, `email`, `password`, `photo`) Values(:username,:useremail,:userpassword,:userphoto)";
        //$stmt=$db->prepare($query);
        //$stmt->bindParam(":username", $name, PDO::PARAM_STR);
        //$stmt->bindParam(":useremail", $email, PDO::PARAM_STR);
        //$stmt->bindParam(":userpassword", $password, PDO::PARAM_STR);
        //$stmt->bindParam(":userphoto", $image_new_name, PDO::PARAM_STR);
        //$stmt->execute();
        //var_dump($stmt->rowCount());
        //var_dump($db->lastInsertId());
        //header("Location:userstable.php");

        $sql = "INSERT INTO" . $this->db_Table . "
        SET Name = :name, email= :email, password= :password, photo= :photo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name",$this->Name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":password",$this->password, PDO::PARAM_STR);
        $stmt->bindParam(":photo", $this->photo, PDO::PARAM_STR);
        if($stmt->execute()){
            return true;
        }else{
            return false ;
        }
    }


    public function getSingleUser(){
        $sql = "SELECT * FROM" . $this->db_Table . "WHERE ID = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($sql);
        $stmt = bindParam(1,$this->ID);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->Name = $dataRow['Name'];
        $this->email = $dataRow['email'];
        $this->password = $dataRow['password'];
        $this->photo =$dataRow['photo'];
    }


    public function updateUser(){
        $sql = "UPDATE" . $this->db_Table . "SET Name = :name, email= :email, password = :password, photo= :photo WHERE ID = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":name",$this->Name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":password",$this->password, PDO::PARAM_STR);
        $stmt->bindParam(":photo", $this->photo, PDO::PARAM_STR);
        $stmt->bindParem(":id", $this->ID, PDO::PARAM_STR);

        if ($stmt->executr()){
            return true;
        }else{
            return false ;
        }
    }


    public function deleteUser(){
            $sql = "DELET FROM " . $this->db_Table . "WHERE ID = ?";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(1 , $this->ID);
            if($stmt->execute()){
                return true;
            }
            return false;
    }


}

