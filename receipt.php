<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Receipt</title>
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
        cursor: pointer;
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
        width: 1200px;
        height: 1000px;
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
    <b><h1 style="text-align:center"><u>View Receipt</u></h1></b>
    <div class="center">
        <div id="box">
            <?php    
                $inid = $_SESSION['invoice'];
                $query = "SELECT customer_username, customer_password, customer_name, customer_contactnumber, customer_email, customer_profile, invoice.invoice_id, invoice.customer_id, invoice.product_id FROM customer INNER JOIN invoice ON customer.customer_id = invoice.customer_id WHERE invoice.invoice_id = '$inid'";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)){
                    $profile = $row['customer_profile'];
                    $customerid = $row['customer_id'];
                    $name = $row['customer_name'];
                    $username = $row['customer_username'];
                    $email = $row['customer_email'];
                    $contact = $row['customer_contactnumber'];
                    $invoiceid = $row['invoice_id'];
                    $productid = $row['product_id'];
                    $query1 = "SELECT product_name, product_price FROM product WHERE product_id = '$productid'";
                    $result1 = mysqli_query($connection, $query1);
                    $query2 = "SELECT pet_name, pet_allergy, pet_type, pet_gender FROM pet WHERE customer_name = '$name'";
                    $result2 = mysqli_query($connection, $query2);
                    while ($row2 = mysqli_fetch_assoc($result2)){
                        $petname = $row2['pet_name'];
                        $pettype = $row2['pet_type'];
                        $petgender = $row2['pet_gender'];
                        $petallergy = $row2['pet_allergy']; 
                    }
                    $query3 = "SELECT * FROM invoice INNER JOIN booking ON invoice.booking_id = booking.booking_id WHERE invoice.invoice_id = '$invoiceid'";
                    $result3 = mysqli_query($connection, $query3);
                    while ($row3 = mysqli_fetch_assoc($result3)){
                        $bookingid = $row3['booking_id'];
                        $service = $row3['booking_service'];
                        $staff = $row3['staff_id'];
                        $vet = $row3['vet_id'];
                        $datetime = $row3['booking_datetime'];
                        $venue = $row3['venue'];
                    }
                }
            ?>
            <table class="center">
                <tr>
                    <td>Invoice ID</td>
                    <td><?php echo $invoiceid ?></td>
                </tr>
                <td colspan=2 style="font-weight: bold; font-size: 18px; padding: 16px 6px;">Customer</td>
                <tr>
                    <td>Customer Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Customer Contact Number</td>
                    <td><?php echo $contact ?></td>
                </tr>
                <td colspan=2 style="font-weight: bold; font-size: 18px; padding: 16px 6px;">Pet</td>
                <tr>
                    <td>Pet Name</td>
                    <td><?php echo $petname ?></td>
                </tr>
                <tr>
                    <td>Pet Type</td>
                    <td><?php echo $pettype ?></td>
                </tr>
                <tr>
                    <td>Pet Gender</td>
                    <td><?php echo $petgender ?></td>
                </tr>
                <tr>
                    <td>Pet Allergy</td>
                    <td><?php echo $petallergy ?></td>
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
                <tr>
                    <td>Price (RM):</td>
                    <td>
                        <?php 
                            if ($service = "Pet Grooming" or $service = "Pet Sitting") {
                                $price = 20.00;
                                echo "RM",$price;
                            } else if ($service = "Pet Medicial Service") {
                                $price = 50.00;
                                echo "RM",$price;
                            } else if ($service = "Overnight Pet Care (day)"){
                                $price = 100.00;
                                echo "RM",$price;
                            } else {
                                $price = 0.00;
                                echo "RM",$price;
                            }
                        ?>
                    </td>
                </tr>
                <td colspan=2 style="font-weight: bold; font-size: 18px; padding: 16px 6px;">Involved Staff / Vet</td>
                <tr>
                    <td>Staff</td>
                    <td><?php echo $staff ?></td>
                </tr>
                <tr>
                    <td>Vet</td>
                    <td><?php echo $vet ?></td>
                </tr>
                <tr>
                    <td colspan=2 style="text-align: center; padding: 30px;">
                        <h2>Thank you, have a nice day ~<br><h5>SDP PET PARADISE @COPYRIGHT 2023, ALL RIGHT RESERVED.</h5></h2>
                        <?php
                            $currentDateTime = date('Y-m-d H:i:s');
                            echo "Done Generate: ",$currentDateTime;
                        ?>
                    </td>
                </tr>
            </table>
            <div class="center">
                <input type="button" value="Back" id="my-button2" onclick="window.open('staffmain.php','_self')">
                <input type="button" value="Generate" name="Generate" id="my-button" onclick="window.open('printreceipt.php','_self')">
            </div>
        </div>
    </div>
</body>
</html>