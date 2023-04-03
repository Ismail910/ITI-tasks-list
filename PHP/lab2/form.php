<?php

    if(isset($_GET["errors"])){
//        var_dump($_GET);
        $errors = json_decode($_GET["errors"], true);
//        var_dump($errors);
    }
    if(isset($_GET["old"])){
    //        var_dump($_GET);
        $old_data = json_decode($_GET["old"], true);
    //        var_dump($old);
    }
    if(isset($_GET["edit"])){
      //        var_dump($_GET);
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
                <div class="row mb-3">
                  <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="first_name" name="firstName" 
                    value="<?php if(isset($old_data['firstName'])) echo $old_data['firstName'];
                      else if  (isset($edit_data['firstName'])) echo $edit_data['firstName']; 
                    ?>"
                    >
                    <span class="text-danger"> <?php if(isset($errors['firstName'])) echo $errors['firstName']; ?> </span>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="last_name" name="lastName" 
                      value="<?php if(isset($old_data['lastName'])) echo $old_data['lastName'];
                        else if  (isset($edit_data['lastName'])) echo $edit_data['lastName']; 
                       ?>">
                      <span class="text-danger"> <?php if(isset($errors['lastName'])) echo $errors['lastName']; ?> </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-8">
                      <input  class="form-control" id="address" name="address"
                      value="<?php if(isset($edit_data['address'])) echo $edit_data['address'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <select name="country" class="w-50">
                        <option   value="Egypt"> Egypt</option>
                        <option   value="Italy"> Italy</option>
                        <option   value="Sudan"> Sudan</option>
                    </select>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="Male" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Male
                      </label>
                    </div>
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="Femal">
                      <label class="form-check-label" for="gridRadios2">
                        Femal
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="row mb-3">
                 <label class="col-sm-3 col-form-label">Skills</label>
                  <div class="col-sm-8 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" value="JavaScript" name="Skills[]">
                      <label class="form-check-label" for="gridCheck1">
                        JavaScript
                      </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" value="Html5" name="Skills[]">
                        <label class="form-check-label" for="gridCheck1">
                          Html5
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" value="Css3"name="Skills[]">
                        <label class="form-check-label" for="gridCheck1">
                         Css3
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1" value="PHP" name="Skills[]">
                        <label class="form-check-label" for="gridCheck1">
                          PHP
                        </label>
                      </div>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email"  
                      value="<?php if(isset($old_data['email'])) echo $old_data['email']; 
                      else if  (isset($edit_data['email'])) echo $edit_data['email']; 
                      ?>">
                      <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="department" class="col-sm-3 col-form-label">Department</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="department" name="department"
                      value="<?php if(isset($edit_data['department'])) echo $edit_data['department'];?>">
                    </div>
                  </div>
                  <div class="row mb-3 d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary w-25">Submit</button>
                     <button type="reset" class="btn btn-primary w-25">Reset</button>
                  </div>
              </form>
        </div>
    </div>
</body>
</html>