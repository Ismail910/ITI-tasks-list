<?php

include 'connection.php';

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
echo "<div class='container'> ";

## 1- get old data

if(isset($_GET['ID'])){
    $id = $_GET['ID'];


    try{

        $db = connect_to_db();
        if($db){

            $select_query= "Select * from users where ID=:id";
            $stmt = $db->prepare($select_query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $res = $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row){
                var_dump($row);

            }else{
                header("Location:userstable.php");
            }
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }



}else{
    exit;
}





if(isset($_GET["errors"])){
            var_dump($_GET);
    $errors = json_decode($_GET["errors"], true);
            var_dump($errors);
}
if(isset($_GET["old"])){
            var_dump($_GET);
    $old_data = json_decode($_GET["old"], true);
            var_dump($errors);
}





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
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4" action="updat.php?id=<?php

                                echo $row['ID'] ?>" method="post" enctype="multipart/form-data">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" value="<?php
                                            if(isset($old_data['Name'])) echo $old_data['Name'];
                                            echo $row['Name']; ?>" id="form3Example1c" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                            <span class="text-danger"> <?php if(isset($errors['Name'])) echo $errors['Name']; ?> </span>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="email" id="form3Example3c" class="form-control"
                                                   value="<?php
                                                   if(isset($old_data['email'])) echo $old_data['email'];
                                                   echo $row['email']; ?>"
                                            />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                            <span class="text-danger"> <?php if(isset($errors['email'])) echo $errors['email']; ?> </span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="form3Example4c" class="form-control"
                                                   value="<?php  ?>" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <span class="text-danger"> <?php if(isset($errors['password'])) echo $errors['password']; ?> </span>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="file" name="image" id="form3Example4cd" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">uplay your photo</label>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" value="submit" class="btn btn-primary btn-lg"/>
                                    </div>

                                </form>


                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                     class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
