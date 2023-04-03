<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Save user  </h1>";

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
 
    $url="Location:login.php?errors={$errors_str}";

    if($formdata){
        $old_data= json_encode($formdata);
        $url .="&old={$old_data}";
    }
    header($url);
}else {
        $logged_in= false;
        $users= file("users.txt");
        foreach ($users as $index=>$user){
            echo $user, $index, '<br>';
            $users_data = explode(':', $user);
            if($users_data[2]==$useremail and $users_data[3]==$userpassword){
                echo 'Logged in successed';
                $logged_in= true;
                break;
            }

        }

        if($logged_in){
            session_start();
            $_SESSION['user_email']=$useremail;
            $_SESSION['login']=true;

        }else{
            header("Location:login.php?error=invalidemailpassword");
        }


    }