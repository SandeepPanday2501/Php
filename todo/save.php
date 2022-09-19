<?php
 include('./db_config.php');
 
if($_SERVER['REQUEST_METHOD']==="POST"){
   $data=$_POST['todo'];
   echo "You have entered " .$data;

   $sql="INSERT INTO todo(`Title`) VALUES('$data')";   
   $result = $conn->query($sql);
   header('location: ./index.php');

}
    ?>