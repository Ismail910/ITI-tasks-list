<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1> Read a data from databases mySQL   </h1>";


include_once 'connect_to_Database_use_PDO.php';
include_once 'users.php';

$database = new connecte_Database();

$db = $database->Connection();

$items = new user($db);

$stmt = $items->getUsers();
$itemCount = $stmt->rowCount();

echo json_decode($itemCount);

if($itemCount > 0){
    $userArr = array();
    $userArr['body'] = $itemCount;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "ID" => $ID,
            "name" =>$name,
            "password" => $password,
            "photo" => $photo
        );
        array_push($userArr['body'], $e);
    }
    echo json_encode($employeeArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}


/*
https://www.positronx.io/create-simple-php-crud-rest-api-with-mysql-php-pdo/
*/



