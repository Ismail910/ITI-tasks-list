<?php

include "connection.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";
echo "<h1>All users  </h1>";

//var_dump($_REQUEST);
$id= $_GET['id'];
$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST['password'];
$image_new_name ='';
$imgtime = time();
if(isset($_FILES['image']) and ! empty($_FILES['image']['name'])){
    $imagename= $_FILES["image"]['name'];
    var_dump($imagename);
    $tmp_name = $_FILES['image']['tmp_name'];
    $ext = pathinfo($imagename)['extension'];
    var_dump($ext);
    $image_new_name = "{$imgtime}.{$ext}";
    if (in_array($ext,['png', 'jpg'])){
        try{
            $uploaded = move_uploaded_file($tmp_name,"$image_new_name");
            var_dump($uploaded);

        } catch (Exception $e){
            var_dump($e->getMessage());
            exit;
        }
    }
}

$errors =[];
$formdata = [];

if(empty($username) and isset($username)){

    $errors['Name']='name required';
}else{
    $formdata["Name"]= $username;
}

if(empty($email) and isset($email)){

    $errors['email']='email required';
}else{
    $formdata["email"]= $email;
}
if(empty($password) and isset($password)){

    $errors['password']='password required';
}else{
    $formdata["password"]= $password;
}

if($errors) {
    $errors_str = json_encode($errors);

    $url = "Location:edit.php?errors={$errors_str}";

    if ($formdata) {
        $old_data = json_encode($formdata);
        $url .= "&old={$old_data}";
    }
    header($url);
}
try{
    $db = connect_to_db();
    if($db){

        $select_query= "update users  set `name`=:username, `email`=:useremail, `password`=:userpassword ,`photo`=:userphoto where ID=:ID";
        $stmt = $db->prepare($select_query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':useremail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
        $stmt->bindParam(":userpassword", $password, PDO::PARAM_STR);
        $stmt->bindParam(":userphoto", $image_new_name, PDO::PARAM_STR);
        $res = $stmt->execute();
        if($stmt->rowCount()){
            echo "updated ";
            header("Location:userstable.php");
        }

    }

}catch(Exception $e){
    echo $e->getMessage();
}