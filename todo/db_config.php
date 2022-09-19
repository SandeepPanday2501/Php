<?php
$conn = new mysqli("localhost:3306","root","","test");

if($conn->connect_error){
    die($conn->connect_error);
}

echo "Connection Success <br>";

?>