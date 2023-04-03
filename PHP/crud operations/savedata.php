<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Save user  </h1>";

var_dump($_POST);
$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$email =$_POST['email'];
$password =$_POST['password'];
$phone =$_POST['phone'];

$errors = [];
$formdata = [];

if (empty($firstName))
{
    $errors['firstName'] = 'first name is required';
}else{
    $formdata["firstName"]= $firstName;
}
if (empty($lastName))
{
    $errors['lastName']= 'last name is required' ;
}else{
    $formdata["lastName"]= $lastName;
}

if (empty($email))
{
    $errors['email'] = 'Email is required';
}else{
    $formdata["email"]= $email;
}
if (empty($password))
{
    $errors['password']= 'Password is required' ;
}else{
    $formdata["password"]= $password;
}
if (empty($phone))
{
    $errors['phone'] = 'phone is required';
}else{
    $formdata["phone"]= $phone;
}
if ($errors)
{
    $errors_str= json_encode($errors);
    $url="Location:form.php?errors={$errors_str}";
    if ($formdata)
    {
        $old_data= json_encode($formdata);
        $url .= "&old={$old_data}";
    }
    header($url);
}else{
    try {
        var_dump($_POST["id"]);
        if ($_POST["id"]){

            $fileobj = fopen('user.txt','a');
            $user_id=$_POST["id"];
            $user_data="{$user_id}:{$firstName}:{$lastName}:{$email}:{$password}:{$phone}". PHP_EOL;
            fwrite($fileobj,$user_data);
            fclose($fileobj);
            header('location:usertable.php');
        }else {


            $fileobj = fopen('user.txt', 'a');
            $id = time();
            $user_data = "{$id}:{$firstName}:{$lastName}:{$email}:{$password}:{$phone}" . PHP_EOL;
            fwrite($fileobj, $user_data);
            fclose($fileobj);
            header("location:usertable.php");
        }
    }catch (Exception $e){
        echo $e -> getMessage();
    }

}




