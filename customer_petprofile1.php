<?php
	session_start();
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
	tr,td,th{
		padding: 20px 30px;
		font-size: 18px;
	}
	button:active{
		box-shadow: 0 4px black;
        transform: translateY(2px);
	}
</style>
<body>
	
<!-- Intro -->
<?php 
	include('dbcon.php');
	include('customer_header.php');
?>

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
	$customer = $_SESSION['ID'];
	$sql = "SELECT * FROM customer WHERE customer_id = '$customer'";
	$data = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_assoc($data)){
		$name = $row['customer_name'];
		$username = $row['customer_username'];
		$email = $row['customer_email'];
		$contact = $row['customer_contactnumber'];
	}
	$query2 = "SELECT customer.customer_name, pet.pet_id, pet.pet_name,pet.pet_age, pet.pet_type, pet.pet_gender, pet.pet_allergy FROM customer INNER JOIN pet ON customer.customer_name = pet.customer_name WHERE customer.customer_name='$name'";
	$result2 = mysqli_query($connection,$query2);
	while ($row1 = mysqli_fetch_assoc($result2)){
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
		<table width="30%" style="border-collapse: collapse; margin-left: 10px" cellpadding="10" cellspacing="40">
			<td colspan=2><h1 style="text-align: center; padding-right: 100px;">Pet Profile</h1></td>
			<tr>
				<td>Pet Name :</td>
				<td><?php echo $petname?></td>
			</tr>
			<tr>
				<td>Pet Age :</td>
				<td><?php echo $petage?>-year-old</td>
			</tr>
			<tr>
				<td>Type :</td>
				<td><?php echo $pettype?></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><?php echo $petgender?></td>
			</tr>
			<tr>
				<td>Allergies:</td>
				<td><?php echo $petallergy?></td>
			</tr>
		</table>
		<div style="padding: 30px">
			<button onclick="window.open('customer_petprofile.php','_SELF')" style="cursor: pointer; width: 100px; font-weight: bold; height: 40px; border-radius: 50px; background-color: #A3825C; color: white; margin-right: 40px;">Edit</button>
		</div>
	</center>
</div>

<!-- footer element -->
<footer><?php include('footer.php') ?></footer>

</body>
</html>