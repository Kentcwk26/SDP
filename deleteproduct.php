<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{
        height: 70px;
        width: 650px;
        text-align: right;
        display: block;
        position: flex;
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
        height: 30px;
        width: 700px;
    }
    #user-textarea{
        height:70px;
        width: 700px;
    }
    td{
      padding: 10px;
      border-collapse: collapse;
      border: 1px solid black;
      width: 125px;
      text-align: center;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
        padding-left: auto;
        padding-right: auto;
    }
    textarea {
        resize: none;
    }
    input[type=submit],input[type=reset],input[type=button]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
        box-shadow: 0 5px #C69468;
        transform: translateY(2px);
    }
    input[type=button]:hover{
        background-color: green;
        border-color: green;
        color: white;
        font-weight:bold;
    }
    input[type=reset]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
    }
    input[type=submit]:hover{
        background-color: red;
        font-weight: bold;
    }
    form {
      margin: 0 auto;
      text-align: center;
    }
</style>
<body>
  <?php
    include "dbcon.php";
    include "header2.php";
  ?>
  <br><b><h1 style="text-align:center;"><u>Delete Product</u></h1></b>
  <form action="#" method="POST">
      <input type="text" name="product" id="user-input" placeholder="- Please search the product that need to delete (if needed) -" style="padding-left: 10px;" autofocus>
      <input type="submit" name="submit" value="Search">
    <?php
      if(isset($_POST['submit'])){
        $search = $_POST['product'];
        $query = "SELECT * FROM product WHERE product_id LIKE '%$search%' OR product_name LIKE '%$search%' OR product_quantity LIKE '%$search%' OR product_price LIKE '%$search%'";
        $result = mysqli_query($connection,$query);
      ?>
      <table class="center" style="padding-top: 20px">
        <tr>
          <td style="font-weight: bold">Product ID</td>
          <td style="font-weight: bold">Product</td>
          <td style="font-weight: bold">Product Stock</td>
          <td style="font-weight: bold">Product Price (RM)</td>
        </tr>
          <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_quantity'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "No results found.";
            }
          }
      ?>
    </table>
    <table class="center" style="padding-top: 10px" >
      <tr>
        <td colspan="3" style="border: none"><input type="button" value="Cancel" onclick="window.open('WHmanageproducts.php','_self')"></td>
        <td style="border: none"><b>Final Decision:</b><input type="text" name="delete-product" style="padding-left: 10px; margin-top: 5px; width: 360px; height: 20px;" placeholder="Please choose only one product ID to delete"></td>
        <td style="border: none"><input type="submit" name="delete" value="Delete"></td>
      </tr>
    </table>
  </table>
  <?php
    if(isset($_POST['delete'])){
        $deleteproduct = $_POST['delete-product'];
        $query1 = "DELETE FROM product WHERE product_id = '$deleteproduct'";
        $results = mysqli_query($connection,$query1);
        if($results){
            echo "<script>alert('Deleted successfully!')</script>";
            echo "<script>window.open('staffmain.php','_self')</script>";
        } else {
            echo "<script>alert('Failed to delete, please try again!')</script>";
        }
    }
    mysqli_close($connection);
    ?>
    </form>
</body>
</html>