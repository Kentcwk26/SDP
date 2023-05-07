<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
    <title>View Sales Report</title>
</head>
<style>
    #blackbox{
        text-align: center;
        background-color: black;
        width: 1500px;
        height: 800px;
    }
    #greycontent{
        background-color: #D9D9D9;
        height: 600px;
        width: 1000px;
        margin: auto;
    }
    table,tr,td,th{
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        font-family: "Times New Roman", Times, serif;
        border-collapse: collapse;
        border: 1px solid black;
        padding: 10px 12px;
    }
    h2{
        font-size: 20px;
        font-weight: bold;
        font-family: "Times New Roman", Times, serif;
        padding-top: 15px;
    }
</style>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(2);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png/Logo4.png"></a></div>
    <div id="blackbox"><h1 style="color: white; padding-top: 30px;">Sales Report</h1>
        <div id="greycontent" style="margin-bottom: 20px;">
            <?php
            $d = $_SESSION['date'];
            $query = "SELECT * FROM purchase INNER JOIN product on product.product_id = purchase.product_id where purchase_date = '$d'";
            $result = mysqli_query($connection,$query);
            $count = mysqli_num_rows($result);
            echo "<h2>Date: ",$d,"</h2>";
            if($count > 0){
                ?>
                <div>
                <table style="margin-top: 8px; margin-left: auto; margin-right: auto;">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Purchase Quantity</th>
                        <th>Purchase Date</th>
                    </tr>
                <?php
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tr><td>$row[product_id]</td>";
                        echo "<td>$row[product_name]</td>";
                        echo "<td>$row[product_price]</td>";
                        echo "<td>$row[purchase_date]</td></tr>";
                    }            
            } else {
                    echo "<br>","No records found. <br>";
                }?>
                </table>
            <?php
            echo "<br>", "Top Sales: ";
            ?>
            <table style="margin-top: 16px; margin-left: auto; margin-right: auto;">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                </tr>
                <?php
                    $query1 = "SELECT * FROM purchase INNER JOIN product on product.product_id = purchase.product_id ORDER BY purchase_date DESC LIMIT 5";
                    $result1 = mysqli_query($connection,$query1);
                    $count1 = mysqli_num_rows($result1);
                    if($count1 > 0){
                        while($row1=mysqli_fetch_assoc($result1)){
                            ?>
                            <tr>
                                <td><?php echo $row1['product_id']; ?></td>
                                <td><?php echo $row1['product_name']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<br>","No records found. <br>";
                    }
                ?>
            </table>
            </div>
            <div style="cursor: pointer;"><img src="png\Tick.png" alt="Correct" height= 80px; width= 85px; style="margin-left: 18px; float:left;" onclick="window.print()"></div>
            <div style="cursor: pointer;"><img src="png\Screenshot 2023-04-06 211934.png" alt="Wrong" height= 80px; width= 80px; style="margin-right: 20px; float:right; cursor: pointer;" onclick="window.open('gsr.php','_SELF')"></div>
            <div style="clear:both;"></div>
        </div>
    </div></center>
</body>
</html>