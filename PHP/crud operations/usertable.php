<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>All users  </h1>";

try {
    $users = file("user.txt");
    echo "<table class='table'> <tr> <th> id</th>
        <th> First Name </th>  <th> Last Name </th>  <th> Email </th> <th>password</th><th>phone</th>
        <th> Edit </th> <th> Delete</th>
        </tr>";
    foreach ($users as $user) {
        echo '<tr>';
        $users_data = explode(":", $user);
        foreach ($users_data as $item)
        {
            echo "<td> {$item}</td>";
        }
        echo" <td> <a class='btn btn-warning' href='edit.php?id={$users_data[0]}
        &fistName={$users_data[1]}
        &lastName={$users_data[2]}
        &email={$users_data[3]}
        &password={$users_data[4]}
        &phone={$users_data[5]}
        '> Edit</a></td>
         <td> <a class='btn btn-danger' href='deleteuser.php?id={$users_data[0]}'> Delete</a></td>
 
        </tr>";


    }
    echo "</table>";

}catch (Exception $e){
    echo $e->getMessage();
}


?>

<a href="form.php" class="btn btn-primary">Add new user </a>
