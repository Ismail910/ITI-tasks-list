<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>Save user  </h1>";


if(isset($_GET["errors"])){
    $errors = json_decode($_GET["errors"], true);
}
if(isset($_GET["old"])){

    $old_data = json_decode($_GET["old"], true);

}

$id=trim(strip_tags($_GET['id']));
$firstName = trim(strip_tags($_GET['fistName']));
$lastName = trim(strip_tags($_GET['lastName']));
$email = trim(strip_tags($_GET['email']));
$password = trim(strip_tags($_GET['password']));
$phone = trim(strip_tags($_GET['phone']));

$edit_user_data=["id"=>$id,"firstName"=>$firstName,"lastName"=>$lastName,"email"=>$email,
    "password"=>$password,"phone"=>$phone];
var_dump( $edit_user_data);
$users= file('user.txt');

foreach ($users as $index=>$user)
{
    $users_data= explode(':', $user);
 if ($users_data[0]==$id)
 {
//   $users_data[0]=$id;
//   $users_data[1]=$firstName;
//   $users_data[2]=$lastName;
//   $users_data[3]=$email;
//   $users_data[4]=$password;
//   $users_data[5]=$phone;
   unset($users[$index]);
     break;
 }
}
$fileobj=fopen("user.txt", 'w');
foreach ($users as $user){
    fwrite($fileobj, $user);
}
fclose($fileobj);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container d-flex justify-content-center p-auto mt-5">
    <div class="row w-50 ">
        <form action="savedata.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="id" hidden="true" id="form3Example1"
                               class="form-control"
                               value=" <?php
                               if (isset($edit_user_data['id']))
                                   echo $edit_user_data['id'];
                               ?>"
                        />
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="firstName" id="form3Example1"
                               class="form-control"
                               value=" <?php
                               if (isset($edit_user_data['firstName']))
                                   echo $edit_user_data['firstName'];
                               ?>"
                        />
                        <label class="form-label" for="form3Example1">First name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="lastName"
                               value=" <?php
                               if (isset($edit_user_data['lastName']))
                                   echo $edit_user_data['lastName'];
                               ?>"
                               id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control"
                       value=" <?php
                       if (isset($edit_user_data['email']))
                           echo $edit_user_data['email'];
                       ?>"/>
                <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control"  <?php
                if (isset($edit_user_data['password']))
                    echo $edit_user_data['password'];
                ?>/>
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" name="phone" id="form3Example4" class="form-control" value="  <?php
                if (isset($edit_user_data['phone']))
                    echo $edit_user_data['phone'];
                ?>"
                />

                <label class="form-label" for="form3Example4">phone</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
