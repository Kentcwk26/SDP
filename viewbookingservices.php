<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking Services</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button, input[type=button], input[type=reset], input[type=submit]{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
    }
    input[type=text], input[type=date], input[type=datetime-local]{
        width: 600px; 
        height: 40px; 
        font-size: 14px;
        padding-left: 5px;
        padding-right: 10px;
        font-family: "Times New Roman","Serif";
    }
    input[type=button]:active, input[type=reset]:active, input[type=submit]:active{
      box-shadow: 0 5px;
      transform: translateY(2px);
    }
    #user-input{
        height: 40px;
        width: 600px;
    }
    table{
        border-collapse: collapse;
        border: 1px solid black;
    }
    td{
        width: 200px;
        padding: 10px;
        border: 1px solid black;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM booking where booking_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['booking_id'];
            $customer = $row['customer_id'];
            $pet = $row['pet_id'];
            $staff = $row['staff_id'];
            $vet = $row['vet_id'];
            $service = $row['booking_service'];
            $datetime = $row['booking_datetime'];
        }
    ?>
    <b><h1 style="text-align:center"><u>View Booking Services</u></h1></b>
    <form action="#" method="post">
        <table class="center" style="padding-top: 10px">
            <tr>
                <td>Booking ID:</td>
                <td><?php echo $id?></td>
            </tr>
            <tr>
                <td>Booking Service:</td>
                <td><?php echo $service?></td>
            </tr>
            <tr>
                <td>Customer:</td>
                <td><?php echo $customer?></td>
            </tr>
            <tr>
                <td>Pet:</td>
                <td><?php echo $pet?></td>
            </tr>
            <tr>
                <td>Staff:</td>
                <td><?php echo $staff?></td>
            </tr>
            <tr>
                <td>Vet:</td>
                <td><?php echo $vet?></td>
            </tr>
            <tr>
                <td>Appointment Date & Time:</td>
                <td><?php echo $datetime?></td>
            </tr>
        </table>
        <input type="button" value="Cancel" style="margin-left: 700px; margin-top: 20px; font-weight: bold; font-size: 16px;" onclick="window.open('managebookingservices.php','_self')"></td>
</body>
</html>