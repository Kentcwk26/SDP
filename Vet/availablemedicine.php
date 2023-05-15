<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Medicine</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #ffffa1;
    }

    #loginblock{height:70px;width: 600px;
        text-align:right;
        display:block;
    position:flex;
    float: left;
    background-color: #DABA9E;

    }

    #my-button{ background-color: #f7d0af;
        padding: 20px 40px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 30px;
        margin-right: 30px

    }

    #button{ 
        margin-left: 90px;
        margin-right: 90px;
        display: inline-block;

    }

    table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: white;
    color: black;
  }
  tr{
    background-color: white;
  }

  form {
  display: center;
  align-items: lcenter;
}

input[type="text"] {
  padding: 10px 300px;
  border: none;
  border-radius: 5px;
  margin-right: 10px;
  font-size: 16px;
}

button[type="submit"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #f7d0af;
  color: black;
  font-size: 16px;
  cursor: pointer;
}

</style>
<body>
<?php
        include "header1.php";
    ?>
    <br>
    <center><div id="button"><a href="#">About Us</a></div> <div id="button"><a href="#">Terms & Conditions</a></div> <div id="button"><a href="#">Privacy Notes</a></div> <div id="button"><a href="#"> Help & Support </a></div></center>
    <br>
    <center><p><b>Available Medicine</b></p></center>
    <center><form>
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </form></center>
    <br>
    <table>
    <tr>
        <th>Medicine ID</th>
        <th>Medicine Name</th>
        <th>Medicine Stock</th>
        <th>Medicine Price</th>
    </tr>
    <?php
        // Connect to the database
        $conn = mysqli_connect("localhost","root","","pet_care");

        // Retrieve the data
        $sql = 'SELECT * FROM medicine';
        $result = mysqli_query($conn, $sql);

        // Format and display the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['medicine_id'].'</td>';
            echo '<td>'.$row['medicine_name'].'</td>';
            echo '<td>'.$row['medicine_stock'].'</td>';
            echo '<td>'.'RM',$row['medicine_price'].'</td>'; 
            echo '</tr>';
        }

        // Close the database connection
        mysqli_close($conn);
    ?>
      </table>
      <br>
      <center><div id="my-button"><a href="vetschedule.php">Back</a></div></center>
</body>
</html>