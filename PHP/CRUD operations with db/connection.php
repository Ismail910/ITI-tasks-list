<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_DATABASE = "CRUDphp";

function connect_to_DB(){
    $table = "users";
    try {
        $dsn = 'mysql:dbname=CRUDphp;host=127.0.0.1;port=3306;';
        $db =new PDO($dsn, DB_USER, DB_PASSWORD);
        return $db;




//        $db = new PDO("mysql:dbname=CRUDphp;host=127.0.0.1", "root", "" );
//        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//        $sql ="CREATE table if not exists $table  (
//         ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
//         Name VARCHAR( 250 ) NOT NULL,
//        email VARCHAR(50) NOT NULL UNIQUE ,
//        password VARCHAR(20) NOT NULL,
//        photo VARCHAR(50)
//
//           );" ;
//        $db->exec($sql);
//        print("Created $table Table.\n");


    }catch (Exception $e){
        echo $e->getMessage();
    }
}
//var_dump(connect_to_DB());


//
//try {
//    $db = new PDO("mysql:dbname=mydb;host=localhost", "root", "" );
//    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
//    $sql ="CREATE table $table(
//     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
//     Prename VARCHAR( 50 ) NOT NULL,
//     Name VARCHAR( 250 ) NOT NULL,
//     StreetA VARCHAR( 150 ) NOT NULL,
//     StreetB VARCHAR( 150 ) NOT NULL,
//     StreetC VARCHAR( 150 ) NOT NULL,
//     County VARCHAR( 100 ) NOT NULL,
//     Postcode VARCHAR( 50 ) NOT NULL,
//     Country VARCHAR( 50 ) NOT NULL);" ;
//    $db->exec($sql);
//    print("Created $table Table.\n");
//
//} catch(PDOException $e) {
//    echo $e->getMessage();//Remove or change message in production code
//}