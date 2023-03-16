<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'pet_care';
    $connection = mysqli_connect($host,$username,$password,$database);

    if ($connection == false){
        die ('Connect failed'.mysqli_connect_error());
    }
?>