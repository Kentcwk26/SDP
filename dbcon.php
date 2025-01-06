
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
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