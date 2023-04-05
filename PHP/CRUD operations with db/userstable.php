<?php
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo "<div class='container fs-4'  >";
echo "<h1>All users  </h1>";


try{
    $db = connect_to_DB();
    if($db){

        $query = "select * from `users`";
        $select_stmt = $db->prepare($query);
        $res=$select_stmt->execute();
        $data = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<table class='table'> <tr><th>ID</th>  <th>Name</th>  <th>Email</th>
           <th>Photo</th><th>Edit</th><th>Delete</th>
            </tr>";

        foreach ($data as $row){
            $i = 0;
            echo "<tr>";
            foreach ($row as $element){
                if ($i>2)
                    continue;
                $i++;
                echo "<td>{$element}</td>";
            }
             echo"
            <td> <img width='100' height='100' src='{$row['photo']}'> </td>";

            echo " <td> <a href='edit.php?ID={$row['ID']}' class='btn btn-warning'> Edit </a> </td>";
            echo " <td> <a href='delete.php?ID={$row['ID']}' class='btn btn-warning'> Delete </a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}catch (Exception $e){
    echo $e->getMessage();
}


?>

<a class="btn btn-info"
   href="register.php"> add new user</a>

