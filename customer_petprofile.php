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
	<link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
	input[type="text"],input[type="number"], input[type=textarea] {
		width: 700px;
		height: 22px;
		padding: 8px;
		text-align: left; 
	}
	select, option{
		width: 720px;
		height: 42px;
		padding: 8px;
		text-align: left; 
	}
	input[type=submit], input[type=button]{
		width: 100px;
		height: 40px;
		margin-top: 10px;
		text-align: center; 
		border-radius: 50px;
		cursor: pointer;
	}
	input[type=submit]:hover{
		background-color: green;
		color: white;
		font-weight: bold;
	}
	input[type=button]:hover{
		background-color: black;
		color: white;
		font-weight: bold;
	}
	input[type=submit]:active, input[type=button]:active{
		box-shadow: 0 5px black;
		transform: translateY(2px);
	}
	.circular-img {
		width: 185px;
		height: 185px;
		object-fit: cover;
		object-position: center;
		border-radius: 50%;
		padding: 8px;
		float: right;
	}
	.circle{
		padding-right: 20px;
		border-radius: 50%;
		margin: 6px;
		z-index:-1;
	}
</style>
<body>
	
<!-- Intro -->
<?php include('customer_header.php') ?>
<?php include('dbcon.php') ?>

<!-- navbar element -->
<div id="nav">
	<?php include('customer_menu.php') ?>
</div>
<!-- sidebar -->
<div id="sidenav">
	<?php include('customer_sidemenu.php') ?>
</div>

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
		$petid = $row1['pet_id'];
		$petname = $row1['pet_name'];
		$petage = $row1['pet_age'];
		$pettype = $row1['pet_type'];
		$petgender = $row1['pet_gender'];
		$petallergy = $row1['pet_allergy']; 
	}
?>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<div id="main">
	<div id="appointment" style="margin-top: 20px; margin-bottom: 20px; width: 100%; height: 600px">
		<h1 style="padding-top: 20px; text-align: center">Edit Profile</h1>
		<form method="POST">
			<table style="width: 80%; margin-left: 440px;" border ="0" cellpadding="10" cellspacing="20">
				<tr>
					<td>Pet Name:</td>
					<td><input type="text" required name="pet_name" value="<?php echo $petname ?>" required></td>
				</tr>
				<tr>
					<td>Age :</td>
					<td><input type="number" min=0 max=5 step=0.5 required name="pet_age" value="<?php echo $petage; ?>"> </td>
				</tr>
				<tr>
					<td>Type:</td>
					<td style="padding-left: 10px"><label for="pettype"></label>
					<select name="pettype" id="pettype">
						<option value="Dog" <?php if($pettype == "Dog"){ echo "selected";}?>>Dog</option>
						<option value="Cat" <?php if($pettype == "Cat"){ echo "selected";}?>>Cat</option>
						<option value="Rabbit" <?php if($pettype == "Rabbit"){ echo "selected";}?>>Rabbit</option>
						<option value="Hamster" <?php if($pettype == "Hamster"){ echo "selected";}?>>Hamster</option>
						<option value="Bird" <?php if($pettype == "Bird"){ echo "selected";}?>>Bird</option>
						<option value="Turtle" <?php if($pettype == "Turtle"){ echo "selected";}?>>Turtle</option>
					</select></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td style="padding-left: 10px"><label for="petgender"></label>
					<select name="petgender" id="petgender">
						<option value="Male" <?php if($petgender == "Male"){ echo "selected";}?>>Male</option>
						<option value="Female" <?php if($petgender == "Female"){ echo "selected";}?>>Female</option>
					</select></td>
				</tr>
				<tr>
					<td>Allergy :</td>
					<td><input type="textarea" name="pet_allergy" value="<?php echo $petallergy; ?>"> </td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left: 300px;">
						<input type="button" value="Back" onclick="window.open('customer_petprofile1.php','_SELF')">
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php 
	if(isset($_POST['update'])){
		$pet_name = $_POST['pet_name'];
		$pet_age = $_POST['pet_age'];
		$pet_type = $_POST['pettype'];
		$pet_gender = $_POST['petgender'];
		$pet_allergy = $_POST['pet_allergy'];
		$query = "UPDATE `pet` SET `pet_name`= '$pet_name',`pet_age`= '$pet_age',`pet_type`= '$pet_type',`pet_gender`='$pet_gender',`pet_allergy`='$pet_allergy' WHERE `pet_id`='$petid'";
		$result = mysqli_query($connection, $query);
		if($result){
			echo "<script>alert('Profile updated successfully!')</script>";
			echo "<script>window.open('customer_petprofile1.php','_self')</script>";
		} else{
			echo "<script>alert('Failed to update details! Please try again!')</script>";
		}
	}
?>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>

</body>
</html>