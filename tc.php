<!DOCTYPE html>
<html>
<head>
	<title>Terms and Conditions Section</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\style6.css">
	<link rel="icon" type="image/x-icon" href="png/Icon.png">
	<style>
		p , div{
			text-align: justify;
			text-justify: inter-word;
		}
	</style>
</head>
<body>
	<?php
		include "dbcon.php";
		include "header3.php";
	?>
	<div class="heading">
		<h1>Terms and Conditions</h1>
	</div>
	<div class="left2">
		<p class="move">Welcome to PetParadise, the online platform for pet daycare and pet products. By using our website, you agree to the following terms and conditions:</p>
		<ol>
			<li><b>Use of PetParadise:</b> PetParadise provides services related to pet daycare and pet products. You must be at least 18 years old to use our services. By using our website, you represent that you are at least 18 years old.</li>
			<li><b>Account registration:</b> In order to use our services, you must create an account with PetParadise. You agree to provide accurate, complete, and current information during the registration process. You are solely responsible for maintaining the confidentiality of your account and password.</li>
			<li><b>Payments:</b> Payments for pet daycare services and pet products must be made at the time of purchase. PetParadise accepts major credit cards and other payment methods as specified on our website.</li>
			<li><b>Shipping:</b> PetParadise ships pet products within only within West Malaysia. Shipping fees and delivery times vary based on location and product availability. We are not responsible for any shipping delays or issues caused by the shipping carrier.</li>
			<li><b>Returns and Refunds:</b> PetParadise accepts returns and issues refunds for defective or damaged products within 30 days of purchase. We do not accept returns or issue refunds for pet daycare services. Please contact our customer service team for assistance with returns and refunds.</li>
			<li><b>Pet daycare services:</b> PetParadise offers pet daycare services to pets that meet our eligibility requirements. You agree to provide accurate, complete, and current information about your pet during the registration process. You are solely responsible for your pet's behavior while in our care. PetParadise reserves the right to refuse service to any pet at our discretion.</li>
			<li><b>Liability:</b> PetParadise is not responsible for any harm or injury caused by your pet while using our services. You agree to indemnify, defend, and hold PetParadise harmless from any claims, damages, or expenses arising from your use of our services.</li>
			<li><b>Intellectual Property:</b> All content on the PetParadise website, including but not limited to text, graphics, logos, images, and software, is the property of PetParadise or its licensors and is protected by Malaysia and international copyright laws. You may not use any content on our website without our prior written permission.</li>
			<li><b>Termination:</b> PetParadise may terminate your account and access to our services at any time, with or without cause. You may terminate your account by contacting our customer service team.</li>
			<li><b>Changes to Terms and Conditions:</b> PetParadise reserves the right to change these terms and conditions at any time. Your continued use of our website after such changes will constitute your acceptance of the new terms and conditions.</li>
		</ol>
		<p>If you have any questions about these terms and conditions, please contact us at support@petparadise</p>
	</div>
		<div class="heading">
		<h1>Help and Supports</h1>
	</div>
	<div class="left">
		<h2 class="heading">Contact Us</h2>
		<form action="https://formsubmit.co/62fcc1c5bef335d9fc00c3ee217be12b"method="POST">
			<label for="name">Name</label><br>
			<input type="text" name="Name" placeholder="Full Name" required><br>
			<label for="Email">Email Adress</label><br>
			<input type="email" name="Email" placeholder="Email Adress" required><br>
			<label for="continent">States</label><br>
			<select name="Continent"><br>
				<option>Selangor</option>
				<option>Kelantan</option>
				<option>Perak</option>
				<option>Melaka</option>
				<option>Johor</option>
				<option>Kedah</option>
				<option>Penang</option>
				<option>Negeri Sembilan</option>
				<option>Terengganu</option>
				<option>Pahang</option>
			</select><br>
			<label for="Message">Message</label><br>
			<textarea class="box" name="Message" placeholder="Message" required></textarea><br>
			<button type="submit">Submit</button>
		</form>
	</div>
</div>
</body>
</html>