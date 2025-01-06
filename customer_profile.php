<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pet Paradise Pet Care System</title>
	<link rel="stylesheet" type="text/css" href="css/style5.css">
	<link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
	input[type="text"],input[type="number"], input[type=textarea], input[type=password], select, option{
		width: 700px;
		height: 30px;
		padding: 5px;
		text-align: left; 
	}
	input[type=submit],input[type=button],button{
		margin-top: 20px;
		width: 190px;
		height: 40px;
		float: right;
		margin-right: 40px;
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
	.holder{
        display: flex;
        align-items: center;
    }
	.button2:hover{
        background-color: red;
        color: white;
        font-weight:bold;
        cursor: pointer;
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
		$password = $row['customer_password'];
	}
?>

<div id="main">
	<div id="appointment" style="margin-top: 10px; margin-bottom: 20px; width: 100%; height: 600px">
	<h1 style="padding-top: 20px; text-align: center;">Edit Profile</h1>
	<form method="POST">
		<div class="circle">
			<a target="_blank" href="Avatar\<?php echo $profile?>.jpg"><img src="Avatar\<?php echo $profile; ?>.jpg" class="circular-img"></a>
		</div>
			<table width="65%" border ="0" cellpadding="10" cellspacing="20">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="cus" value="<?php echo $username;?>"> </td>
				</tr>

				<tr>
					<td>Password :</td>
					<td><div class="holder">
                        <input type="password" name="pwd" value="<?php echo $password;?>" required id="password" onfocus="border0()" onblur="border1()">
                        <img src="png/eye2.png" onclick="showPassword(this)" width="40px" height="40px" style="padding-left: 10px; cursor: pointer">
                    </div>
					</td>
				</tr>

				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" value="<?php echo $name;?>"> </td>
				</tr>

				<tr>
					<td>Phone Number:</td>
					<td><input type="text" name="contactnumber" value="<?php echo $contact;?>"> </td>
				</tr>

				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td>
				</tr>
			</table>
			<a href="customer_profile1.php"><button class="button2">Back</button></a>
			<input type="button" value="Change Profile Picture" onclick="window.open('changeprofile.php','_SELF')">
			<input type="submit" name="update" value="Update">
		</form>
	</div>
</div>

<script>
	function border0(){
		var a = document.querySelector('.holder');
	}

	function border1(){
		var a = document.querySelector('.holder');
	}

	function showPassword(image) {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
			image.src = "png/eye.png";
		} else {
			x.type = "password";
			image.src = "png/eye2.png";
		}
	}
</script>

<?php
	if(isset($_POST['update'])){
		$customer_username = $_POST['cus'];
		$customer_password = $_POST['pwd'];
		$customer_name = $_POST['name'];
		$customer_contactnumber = $_POST['contactnumber'];
		$customer_email = $_POST['email'];
		$query = "UPDATE customer SET customer_password = '$customer_password', customer_username = '$customer_username', customer_username = '$customer_username', customer_name= '$customer_name', customer_contactnumber = '$customer_contactnumber', customer_email = '$customer_email' WHERE customer_id='$customer'";
		$result = mysqli_query($connection, $query);
		if($result){
			echo "<script>alert('Profile updated successfully!')</script>";
			echo "<script>window.open('customer_profile1.php','_self')</script>";
		} else {
			echo "<script>alert('Failed to update details! Please try again!')</script>";
		}
		// do update process
	}
?>

<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>

<!-- footer element -->
<footer><?php include('footer.php') ?></footer>

</body>
</html>