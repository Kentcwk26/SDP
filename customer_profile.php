<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pet Paradise Pet Care System</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="png/profile.jpg">
  </head>
<body>
	
<!-- Intro -->
<div id="intro">
<?php include('customer_header.php') ?>
</div>


<!-- navbar element -->
<div id="nav">
<?php include('customer_menu.php') ?>
    </div>

		<div id="main">
		<center>
				<h1>My Profile</h1>
				<div id="appointment">
					<form action="customer_add.php" method="POST">
						<table width="90%" border ="0" cellpadding="10" cellspacing="20">
							<tr>
								<td>IC Number :</td>
								<td><input type="text" name="ICNo" pattern="[0-9]{12}" oninvalid="this.setCustomValidity('Enter only 12 digits!')" oninput="this.setCustomValidity()" placeholder="e.g. 030109020409 (without -)" size="25" required></td>
							</tr>

							<tr>
								<td>Name :</td>
								<td><input type="text" name="Name" placeholder="e.g. Ivan Wang" size="25" required></td>
							</tr>

							<tr>
								<td>Phone Number :</td>
								<td><input type="text" name="PhoneNo" placeholder="e.g. 01172869409" size="25" required></td>
							</tr>
							
							<tr>
								<td>Email Address:</td>
								<td><input type="text" name="Email" placeholder="e.g. ivanwang913@gmail.com" size="25" required></td>
							</tr>

							<tr>
								<td>Pet Name:</td>
								<td><input type="text" name="PetName" placeholder="e.g. Doggo" size="25" required></td>
							</tr>



							<tr>
				<td colspan="2" align="center"><input type="submit" name="Edit" value="Edit"></td>
			</tr>

<?php
session_start();

//connect to database
require_once('connection.php');

$username =$_SESSION['uname'];
$data = mysqli_query($conn, "SELECT * FROM appointment WHERE UserID='$username'");


$no=1;
while($row=mysqli_fetch_array($data)){


?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo $row['ICNo']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['PhoneNo']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['PetName']; ?></td>


  </tr>
<?php 
}
?>


                    </table>
                </form>
            </div>
        </center>
    </div>

<!-- footer element -->
<footer>
<?php include('footer.php') ?>
</footer>

</body>
</html>