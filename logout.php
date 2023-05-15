<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
    <?php
        echo "<script>alert('Log Out!')<script>";
        session_start();
        session_destroy();
        header("Location: index.php");
    ?>
</body>
</html>