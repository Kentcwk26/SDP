<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Generate Sales Report</title>
</head>
<style>
    #blackbox{
        text-align: center;
        background-color: grey;
        width: 100%;
        height: 490px;
    }
    #button{
        width: 250px;
        height: 65px;
        background: #D9D9D9;
        border-radius: 50px;
    }
    input[type=date]{
        width: 200px;
        height: 40px;
        margin: 10px;
        border: none;
        background: none;
        outline: none;
        font-size: 18px;
        color: black;
        font-weight: bold;
        font-family: "Times New Roman", Times, serif;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 120px;">Generate Sales Report</h1>
        <center><div id="button" style="margin-top: 10px; margin-bottom: 5px;">
        <form  method=post>
            <label for="date"><input type="date" id="date" name="date" style="margin-left: 10px; margin-right: 10px;"></label>
            <input type="submit" name="Generate" value="Generate" style="margin-top: 40px;">
        </form>
    </div>
    <?php
        if(isset($_POST["Generate"])){
            if(empty($_POST['date'])){
                echo "<script>alert('Please enter a date')</script>";
            } else {
                $d = $_POST['date'];
                $query = "SELECT * FROM purchase where purchase_date = '$d'";
                $result = mysqli_query($connection,$query);
                $row = mysqli_fetch_assoc($result);
                if($row['purchase_date'] == $d){
                    $_SESSION['date'] = $d;
                    ?>
                    <script>
                        window.location.href = "vsr.php";
                        alert("Generating Sales Report");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        window.location.href = "gsr.php";
                        alert("Failed to generate sales report");
                    </script>
                    <?php
            }
        }
        }
    ?>
</body>
</html>