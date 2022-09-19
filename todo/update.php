<?php

if(isset($_POST['update']))
{
   
    include('db_config.php');
   $id = $_POST['id'];
   $title = $_POST['todo'];

           
   $sql = "UPDATE `todo` SET `title` = '$title' WHERE `todo`.`id` = '$id';";
  
  
   $result = mysqli_query($conn, $sql);
   
   if($result)
   {
    header('location: ./index.php');
       echo 'Update Success';
   }else{
       echo 'Update Unsuccessful';
   }
   mysqli_close($conn);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Update</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="update.php" method="post">

            <label>Enter  ID</label><input type="number" name="id"  value=""><br><br>
            <label>UpdateTo</label><input type="text" name="todo" ><br><br>
            <input type="submit" name="update" value="Update Data">

        </form>

    </body>
</html>