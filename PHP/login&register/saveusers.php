<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Save user  </h1>";

$username = $_POST["name"];
$email = $_POST["email"];
$userpassword = $_POST["password"];



$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

if(preg_match($pattern,$email)){
    $useremail = $_POST["email"];
}else{
echo "<br>"."your email is not valid pz try again";
exit();
}

$errors =[];
$formdata = [];

if(empty($username) and isset($username)){

    $errors['name']='name required';
}else{
    $formdata["name"]= $username;
}

if(empty($useremail) and isset($useremail)){

    $errors['email']='email required';
}else{
    $formdata["email"]= $useremail;
}
if(empty($userpassword) and isset($userpassword)){

    $errors['password']='password required';
}else{
    $formdata["password"]= $userpassword;
}

if($errors){
    $errors_str= json_encode($errors);
 
    $url="Location:register.php?errors={$errors_str}";

    if($formdata){
        $old_data= json_encode($formdata);
        $url .="&old={$old_data}";
    }
    header($url);
}else {


    try {
        var_dump($_POST);
        $fileobj = fopen('users.txt', 'a');
        $id = time();
        $image_new_name ='';

        if(isset($_FILES['image']) and ! empty($_FILES['image']['name'])){
            $imagename= $_FILES["image"]['name'];
            var_dump($imagename);
            $tmp_name = $_FILES['image']['tmp_name'];
            $ext = pathinfo($imagename)['extension'];
            var_dump($ext);
            $image_new_name = "{$id}.{$ext}";
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

        $user_data = "{$id}:{$_POST["name"]}:{$_POST["email"]}:{$_POST["password"]}:{$image_new_name}" . PHP_EOL;
        fwrite($fileobj, $user_data);
        fclose($fileobj);
        header('Location:login.php');

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
