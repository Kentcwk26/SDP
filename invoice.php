<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Invoice</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #my-button{ 
        background-color: green;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
        font-weight: bold;
    }
    #my-button2{ 
        background-color: red;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
        font-weight: bold;
        cursor: pointer;
    }
    #user-input{
        height:320px;
        width: 700px;
    }
    #box{
        background-color: white;
        width: 1000px;
        height: 100%;
    }
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }
    table{
        padding-top: 40px;
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
        width: 300px;
        border-collapse: collapse;
        padding: 6px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "header2.php";
    ?>
    <b><h1 style="text-align:center"><u>View Invoice</u></h1></b>
    <div class="center">
        <div id="box">
            <?php
                $id = $_GET['id'];  
                $sql = "SELECT * FROM invoice WHERE invoice_id = '$id'";
                $customer = $_SESSION['ID'];
                $query = "SELECT customer_username, customer_password, customer_name, customer_contactnumber, customer_email, customer_profile, invoice.invoice_id, invoice.booking_id, invoice.customer_id, invoice.product_id FROM customer INNER JOIN invoice ON customer.customer_id = invoice.customer_id WHERE invoice.invoice_id = '$id'";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)){
                    $profile = $row['customer_profile'];
                    $customerid = $row['customer_id'];
                    $name = $row['customer_name'];
                    $username = $row['customer_username'];
                    $email = $row['customer_email'];
                    $contact = $row['customer_contactnumber'];
                    $invoiceid = $row['invoice_id'];
                    $bookingid = $row['booking_id'];
                    $productid = $row['product_id'];
                }
                $query2 = "SELECT * FROM purchase INNER JOIN invoice ON invoice.purchase_id = purchase.purchase_id WHERE invoice.invoice_id ='$invoiceid'";
                $result2 = mysqli_query($connection, $query2);
                while ($row3 = mysqli_fetch_assoc($result3)){
                    $service = $row3['booking_service'];
                    $datetime = $row3['booking_datetime'];
                    $venue = $row3['venue'];
                }
                $query3 = "SELECT * FROM booking INNER JOIN invoice ON invoice.booking_id = booking.booking_id WHERE invoice.invoice_id ='$invoiceid'";
                $result3 = mysqli_query($connection, $query3);
                while ($row3 = mysqli_fetch_assoc($result3)){
                    $service = $row3['booking_service'];
                    $datetime = $row3['booking_datetime'];
                    $venue = $row3['venue'];
                }
            ?>
            <table class="center">
                <td colspan=2 style="font-weight: bold; font-size: 18px; padding: 16px 6px;">Customer</td>
                <tr>
                    <td>Customer Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Customer Contact Number</td>
                    <td><?php echo $contact ?></td>
                </tr>
                <td colspan=2 style="font-weight: bold; font-size: 18px; padding: 16px 6px;">Appointment</td>
                <tr>
                    <td>Appointment ID: </td>
                    <td><?php echo $bookingid ?></td>
                </tr>
                <tr>
                    <td>Appointment Service: </td>
                    <td><?php echo $service ?></td>
                </tr>
                <tr>
                    <td>Appointment Datetime: </td>
                    <td><?php echo $datetime ?></td>
                </tr>
                <tr>
                    <td>Venue: </td>
                    <td><?php echo $venue ?></td>
                </tr>
            </table>
            <div class="center">
                <input type="button" value="Back" id="my-button2" onclick="window.open('customer_view.php','_self')">
            </div>
        </div>
    </div>
</body>
</html>