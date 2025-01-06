<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Delete Booking Services</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
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
    table{
      border-collapse: collapse;
      text-align: center;
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
    input[type=submit]:hover{
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
    input[type=button]:hover{
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
  <br><b><h1 style="text-align:center;"><u>Delete Booking Services</u></h1></b>
  <form action="#" method="POST">
    <input type="text" name="record" id="user-input" placeholder="- Please search the booking that need to delete -" style="padding-left: 10px;" autofocus>
    <input type="submit" name="submit" value="Search">
    <?php
      if(isset($_POST['submit'])){
        $search = $_POST['record'];
        $query = "SELECT customer.customer_id, customer.customer_name, pet.pet_name, appointment.pet_id, appointment_id, appointment_datetime, appointment_service FROM `appointment` INNER JOIN customer ON appointment.customer_id = customer.customer_id INNER JOIN pet ON appointment.pet_id = pet.pet_id WHERE appointment.appointment_id LIKE '%$search%' OR appointment.customer_id LIKE '%$search%' OR appointment_datetime LIKE '%$search%' OR appointment_service LIKE '%$search%'";
        $result = mysqli_query($connection,$query);
      ?>
      <table class="center" style="margin-top: 20px; width: 68%">
        <tr>
          <td>Appointment ID</td>
          <td>Customer Name</td>
          <td>Booking Service</td>
          <td>Booking Datetime</td>
        </tr>
          <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['appointment_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['appointment_datetime'] . "</td>";
                echo "<td>" . $row['appointment_service'] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "No results found.";
            }
          }
      ?>
    </table>
    <table class="center" style="margin-top: 10px" >
      <tr>
        <td colspan="3" style="border: none"><input type="button" value="Cancel" onclick="window.open('managebookingservices.php','_self')"></td>
        <td style="border: none"><b>Final Decision:</b><input type="text" name="delete-booking" style="padding-left: 10px; margin-top: 5px; width: 360px; height: 20px;" placeholder="Kindly please insert the appointment ID will do"></td>
        <td style="border: none"><input type="submit" name="delete" value="Delete"></td>
      </tr>
    </table>
  </table>
  <?php
    if(isset($_POST['delete'])){
      if(empty($_POST['delete-booking'])){
        echo "<script>alert('Empty input!')</script>";
      } else {
        $deletebooking = $_POST['delete-booking'];
        $query1 = "DELETE FROM appointment WHERE appointment_id = '$deletebooking'";
        $results = mysqli_query($connection,$query1);
        if($result1 && $results){
              echo "<script>alert('Appointment record deleted successfully!')</script>";
              echo "<script>window.open('staffmain.php','_self')</script>";
          } else {
              echo "<script>alert('Appointment record failed to delete, please try again!')</script>";
          }
      }
    }
    mysqli_close($connection);
    ?>
    </form>
</body>
</html>