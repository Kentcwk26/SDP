<?php
session_start();

//connect to database
require_once('dbcon.php');

if(isset($_POST['Submit'])){
	//declare variables
	$prefix = "Q";
	$last_id = 0;
	$sql2 = "SELECT appointment_id FROM appointment ORDER BY appointment_id DESC LIMIT 1";
	$result = mysqli_query($connection,$sql2);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$last_id = substr($row["appointment_id"], 1);
	}
	$new_id = $prefix . ($last_id + 1);
	$AppointmentID = $new_id;
	$CusID = $_POST['customer_id'];
	$PetID = $_POST['pet_id'];
    $DateTime = $_POST['datetime'];
	$Service = $_POST['service'];

	//add records to query
	$query= "INSERT INTO appointment (customer_id, pet_id, appointment_id, appointment_datetime, appointment_service) VALUES('$CusID', '$PetID', '$AppointmentID','$DateTime',' $Service')";
	$result= mysqli_query($connection, $query);

	if($result){
		echo "<script>alert('Appointment booked successfully'); window.location='customer_home.php'</script>";
	} else{
		echo "<script>alert('Failed to book appointment! Please try again!); </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Paradise Pet Care System</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
  </head>
<style>
	td{
		padding: 20px;
		width: 2000px;
	}
	input[type=text], input[type=datetime-local], select, option{
		width: 402px;
		height: 40px;
		padding-left: 4px;
		padding-right: 4px;
	}
	input[type=submit]{
		width: 200px;
		height: 40px;
		background-color: #A3825C;
		color: white;
		border: none;
		border-radius: 50px;
	}
	input[type=button]{
		width: 200px;
		height: 40px;
		background-color: black;
		color: white;
		border: none;
		border-radius: 50px;
	}
	input[type=submit]:hover{
		background-color: #D9BB97;
		color: black;
	}
	input[type=submit]:active,input[type=button]:active{
		box-shadow: 0 5px black;
		transform: translateY(2px);
	}
</style>
<body>
	
<!-- Intro -->
<?php include('customer_header.php') ?>

<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
</div>

<!-- sidebar -->
<div id="sidenav">
<?php include('customer_sidemenu.php') ?>
</div>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<?php
	$customer_id = $_SESSION['ID'];
	$query = "SELECT * FROM customer where customer_id = '$customer_id'";
	$result = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($result)){
		$id = $row['customer_id'];
		$name = $row['customer_name'];
		$username = $row['customer_username'];
		$email = $row['customer_email'];
		$contact = $row['customer_contactnumber'];
	}
	$query2 = "SELECT customer.customer_name, customer.customer_contactnumber, pet.pet_id, pet.pet_name,pet.pet_age, pet.pet_type, pet.pet_gender, pet.pet_allergy FROM customer INNER JOIN pet ON customer.customer_id = pet.customer_id WHERE customer.customer_id = '$id'";
	$result2 = mysqli_query($connection,$query2);
	while ($row1 = mysqli_fetch_assoc($result2)){
		$petid = $row1['pet_id'];
		$petname = $row1['pet_name'];
		$petage = $row1['pet_age'];
		$pettype = $row1['pet_type'];
		$petgender = $row1['pet_gender'];
		$petallergy = $row1['pet_allergy']; 
	}
?>

<div id="main">
	<center>
		<div id="appointment" style="margin-top: 20px; margin-bottom: 20px; width: 100%; height: 600px">
			<h1 style="padding-top: 25px;">Make Appointment</h1>
			<form action="customer_add.php" method="POST">
				<table width="60%" cellpadding="10" cellspacing="8" style="padding-top: 10px;">
					<tr>
						<td><label for="time">Please select the appointment datetime:</label></td>
						<td><input type="datetime-local" id="datetime" name="datetime"></td>
					</tr>
					<tr>
						<td>Type of Service:</td>
						<td>
							<select name="service" required>
							<option value="" hidden>Select a service type</option>
							<option value="Pet Grooming">Pet Grooming</option>
							<option value="Pet Boarding">Pet Boarding</option>
							<option value="Veterniary Services">Veterinary Services</option>
							<option value="Overnight Pet Care (1 day)">Overnight Pet Care (1 day)</option>
							</select>
						</td>
					</tr>
				</table>
				<input type="button" name="Back" value="Back" style="float: left; margin: 62px; font-weight: bold; cursor: pointer;" onclick="window.open('customer_view.php','_SELF');">
				<input type="submit" name="Submit" value="Make An Appointment" style="float: right; margin: 60px; font-weight: bold; cursor: pointer;">
				<table width="60%">
					<tr>
						<td colspan="2"><input type="text" name="customer_id" value="<?php echo $id?>" hidden></td>
					</tr>
					<tr>
						<td colspan=2><input type="text" name="pet_id" value="<?php echo $petid?>" hidden></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</div>

<!-- footer element -->
<footer><?php include('footer.php') ?></footer>

</body>
</html>