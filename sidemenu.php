<!DOCTYPE html>
<html>
<head>
	<title>Simple Side Menu</title>
	<link rel="stylesheet" href="css\sidemenu.css">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
	a{
		text-decoration: none;
	}
	a:hover{
		text-decoration-line: underline;
	}
</style>
<body>
	<div class="sidebar">
		<ul style="margin-top: 80px;">
			<li><a href="admin.php">Admin</a></li>
			<li><a href="manageuser.php">Manage Users</a></li>
			<li><a href="salesreport.php">Sales Report</a></li>
			<li><a href="cbh.php">Customer Booking History</a></li>
			<li><a href="cph.php">Customer Purchase History</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
	<div class="menu-icon">&#9776;</div>
	<script src="js/sidemenu.js"></script>
</body>
</html>
