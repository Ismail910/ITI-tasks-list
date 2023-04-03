<?php

if(isset($_GET["errors"])){
    $errors = json_decode($_GET["errors"], true);
}
if(isset($_GET["old"])){
    $old_data = json_decode($_GET["old"], true);
    var_dump($old_data);
}
if(isset($_GET["edit"])){
    $edit_data = json_decode($_GET["edit"], true);
    var_dump($edit_data);

}
echo "<h1>Add user </h1>";

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
                        <input type="text" name="firstName" id="form3Example1"
                               class="form-control"
                             value=" <?php
                              if (isset($old_data['firstName']))
                                  echo $old_data['firstName'];
                              ?>"
                        />
                        <span class="text-danger"> <?php if(isset($errors['firstName'])) echo $errors['firstName']; ?> </span>
                        <label class="form-label" for="form3Example1">First name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="lastName"
                           value=" <?php
                            if (isset($old_data['lastName']))
                                echo $old_data['lastName'];
                            ?>"
                               id="form3Example2" class="form-control" />
                        <span class="text-danger"> <?php if(isset($errors['lastName'])) echo $errors['lastName']; ?> </span>
                        <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control"
                    value=" <?php
                    if (isset($old_data['email']))
                        echo $old_data['email'];
                    ?>"/>
                <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
                <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control"  <?php
                if (isset($old_data['password']))
                    echo $old_data['password'];
                ?>/>
                <span class="text-danger"> <?php if(isset($errors['password'])) echo $errors['password']; ?> </span>
                <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="form-outline mb-4">
                <input type="number" name="phone" id="form3Example4" class="form-control" value="  <?php
                if (isset($old_data['phone']))
                    echo $old_data['phone'];
                ?>"
                />
                <span class="text-danger"> <?php if(isset($errors['phone'])) echo $errors['phone']; ?> </span>

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