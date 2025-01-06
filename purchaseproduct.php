<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase Products</title>
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    input[type=submit]{ 
        padding: 8px 18px;
        display: inline-block;
        border-radius: 5px;
        margin-right: 50px;
    }
  input[type=button]:hover{
    font-weight: bold;
  }
  input[type=button]:active, input[type=submit]:active{
    box-shadow: 0 5px black;
    transform: translateY(2px);
  }
  #search{
    float: right;
    width: 1480px;
    height: 60px;
    margin-top: 20px;
    margin-right: 10px;
  }
  .button1{
    width: 140px;
    height: 40px;
    border-radius: 50px;
  }
  .button1:hover{
    background-color: green;
    color: white;
    font-weight:bold;
    cursor: pointer;
  }
</style>

<body>

<!-- Intro -->
<?php 
  include ('dbcon.php');
  include ('customer_header.php');
?>

<!-- navbar element -->
<div id="nav">
  <?php include('customer_menu.php') ?>
</div>

<div id="search">
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search" style="width: 1200px; height: 40px; border-radius: 100px; padding-left: 20px; margin-left: 40px; margin-top: 20px; font-size: 20px;">
        <input type="submit" name="submit" value="Search" style="width: 100px; height: 50px; border-radius: 100px; margin-left: 20px; margin-top: 20px; font-size: 20px; cursor: pointer;">
    </form>
</div>

<div style="height: 600px; width: 100%;">
  <!-- Product -->
  <div id="product">
    <?php
        $id = $_GET['id'];
        $customer = $_SESSION['ID'];
        $query = "SELECT * FROM product WHERE product_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $name = $row['product_name'];
            $desc = $row['product_desc'];
            $quantity = $row['product_quantity'];
            $price = $row['product_price'];
        }
    ?>
</div>
<div style="width: 350px; height: 340px; float: left; margin: 60px; padding: 20px; background-color: #B2BD8C;">
    <img src="img/products.jpg" alt="about-1" style="width: 320px; height: 300px; background-color: white; margin-top: 10px; padding: 4px; margin-left: 10px;">
</div>
    <form action="#" method="post">
        <table style="padding: 50px; color: black;" cellspacing="30">
            <tr>
                <td>Product Name: </td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Product Description: </td>
                <td><?php echo $desc; ?></td>
            </tr>
            <tr>
                <td>Stock Quantity: </td>
                <td><?php echo $quantity; ?></td>
            </tr>
            <tr>
                <td>Product Price: </td>
                <td>RM<?php echo $price; ?></td>
            </tr>
            <tr>
                <td>Purchase Quantity: </td>
                <td><input type="number" name="quantity" min="1" max="<?php echo $quantity; ?>" style="width: 100px; height: 30px; padding: 10px;"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Purchase" name="Purchase"></td>
            </tr>
        </table>
    </form>
    
</div>

<!-- footer element -->
<footer><?php include('footer.php') ?></footer>

<?php
    if(isset($_POST['Purchase'])){
        $purchase_quantity = $_POST['quantity'];
        $new_stock_quantity = $quantity - $purchase_quantity;
        $total_price = $price * $purchase_quantity;
        $query = "UPDATE `product` SET `product_quantity` = '$new_stock_quantity' WHERE `product_id` = '$id'";
        $result = mysqli_query($connection, $query);
        if($result){
            $prefix = "P";
            $last_id = 0;
            $sql = "SELECT purchase_id FROM purchase ORDER BY purchase_id DESC LIMIT 1";
            $result1 = mysqli_query($connection,$sql);
            if (mysqli_num_rows($result1) > 0) {
                $row = mysqli_fetch_assoc($result1);
                $last_id = substr($row["purchase_id"], 1);
            }
            $new_id = $prefix . ($last_id + 1);
            $purchase_id = $new_id;
            $currentDateTime = date('Y-m-d H:i:s');
            $query1 = "INSERT INTO `purchase`(`purchase_id`, `purchase_quantity`, `purchase_total`, `purchase_datetime`, `product_id`, `customer_id`) VALUES ('$purchase_id','$purchase_quantity','$total_price','$currentDateTime','$id','$customer')";
            $result2 = mysqli_query($connection,$query1);
            $prefix = "D";
            $last_id = 0;
            $sql = "SELECT invoice_id FROM invoice ORDER BY invoice_id DESC LIMIT 1";
            $result = mysqli_query($connection,$sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $last_id = substr($row["invoice_id"], 1);
            }
            $new_id = $prefix . ($last_id + 1);
            $invoice_id = $new_id;
            $query3 = "INSERT INTO `invoice`(`invoice_id`, `customer_id`, `product_id`, `booking_id`) VALUES ('$invoice_id','$customer','','$booking_id')";
            $result3 = mysqli_query($connection, $query3);
            if ($result2 and $result3){
                echo "<script>alert('Purchase successful!')</script>";
                echo "<script>window.location.href='customer_product.php'</script>";
            } else {
                echo "<script>alert('Purchase failed!')</script>";
            }
        } else {
            echo "<script>alert('Please try again! ')</script>";
        }
    }
?>
</body>
</html>
