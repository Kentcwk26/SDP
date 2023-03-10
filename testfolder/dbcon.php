<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';
    $connection = mysqli_connect($host,$username,$password,$database);

    if ($connection == false){
        die ('Connect failed'.mysqli_connect_error());
    }
?>