<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Receipt</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{
        height:70px;
        width: 650px;
        text-align:right;
        display:block;
        position:flex;
        float: left; 
        background-color: #DABA9E;
    }
    #loginblock{
        height:70px;
        width: 600px;
        text-align:right;
        display:block;
        position:flex;
        float: left;
        background-color: #DABA9E;
    }
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    #user-input{
        height:320px;
        width: 700px;
    }
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-bottom: 20px;
    }   
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <b><h1 style="text-align:center"><u>Generate Receipt</u></h1></b>
    <div class="center">
        <form action="#" method="post">
            <input list="invoice" name="invoice" style="width:400px; height: 40px; border-radius: 50px; font-family: Times New Roman; font-size: 14px; text-align: center">
            <datalist id="invoice">
                <?php
                    $query = "SELECT * FROM invoice";
                    $result = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($result)){
                        $invoice_id = $row['invoice_id'];
                        echo "<option value='$invoice_id'>$invoice_id</option>";
                    }
                ?>
            </datalist>
            <div class="center" style="padding-top: 20px">
                <input type="button" value="Back" id="my-button" onclick="window.open('staffmain.php','_self')">
                <input type="submit" value="Generate" name="Generate" id="my-button">
            </div>
        </form>
    </div>
    <?php
        if(isset($_POST["Generate"])){
            if(empty($_POST['invoice'])){
                echo "<script>alert('Please select an invoice')</script>";
            } else {
                $inid = $_POST['invoice'];
                $query = "SELECT * FROM invoice WHERE invoice_id = '$inid'";
                $result = mysqli_query($connection,$query);
                $row = mysqli_fetch_assoc($result);
                if($row['invoice_id'] == $inid){
                    $_SESSION['invoice'] = $inid;
                    ?>
                    <script>
                        window.location.href = "receipt.php";
                        alert("Generating Receipt to Customer");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>alert("Failed to generate receipt");</script>
                    <?php
                }
            }
        }
    ?>
</body>
</html>