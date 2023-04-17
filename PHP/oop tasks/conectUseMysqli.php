<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> connected to database use MYSQLI </h1>";
class Database {
  private $connection;

  public function connect($host, $username, $password, $database) {
    $this->connection = new mysqli($host, $username, $password, $database);

    if ($this->connection->connect_error) {
      die("Connection failed: " . $this->connection->connect_error);
    }
  }

  public function insert($table, $columns, $values) {
   
    try {
      $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    
    if ($this->connection->query($sql) === true) {
      return "New record created successfully";
    } else {
      
      echo "Error: " . $this->connection->error;
    }
  } catch(Exception $e) {
        echo $e->getMessage();//Remove or change message in production code
    }
  }

  public function select($table) {
    $sql = "SELECT * FROM $table";
    $result = $this->connection->query($sql);

    if ($result->num_rows > 0) {
      $rows = array();
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    } else {
      return "0 results";
    }
  }

  public function update($table, $id, $fields) {
    $sql = "UPDATE $table SET ";
    foreach ($fields as $key => $value) {
      $sql .= "$key = '$value', ";
    }
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE id=$id";

    if ($this->connection->query($sql) === TRUE) {
      return "Record updated successfully";
    } else {
      return "Error: " . $sql . "<br>" . $this->connection->error;
    }
  }

  public function delete($table, $id) {
    $sql = "DELETE FROM $table WHERE id=$id";

    if ($this->connection->query($sql) === TRUE) {
      return "Record deleted successfully";
    } else {
      return "Error: " . $sql . "<br>" . $this->connection->error;
    }
  }

  public function close() {
    $this->connection->close();
  }
  
}

$db = new Database();

$db->connect("127.0.0.1", "root", "", "CRUDphp");


// $res = $db-> insert("users", "ID,Name,email,password", "10,'ahmed','ahmed@gmail.com','1254'");
// echo $res;

$result = $db->select("users");
echo "<h3> your users </h3>";
echo "<table class='table'> <tr><th>ID</th>  <th>Name</th>  <th>Email</th><th>Password</th>
<th>Photo</th>
 </tr>";

foreach ($result as $row){
//  $i = 0;
 echo "<tr>";
 foreach ($row as $element){
    //  if ($i === 5 )
    //      continue;
    //  $i++;
     echo "<td>{$element}</td>";
 }


 echo "</tr>";
}
echo "</table>";

// $fields = array("name" => "ismail", "email" => "ismail@magdy.com");
// $resultUpd = $db->update("users", 2, $fields);
// echo $resultUpd;

// $resultDele = $db->delete("users", 2);
// echo $resultDele;


// $db->close();

