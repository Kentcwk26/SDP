<?php
    $conn=new mysqli("localhost","root","","pet_care");
    if($conn->connect_error){
        die("Connect Failed".$conn->connect_error);
    }
?>