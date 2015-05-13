<?php
include('dbInfo.php');
$db=mysqli_connect('localhost',$dbUser,$dbPass,$database);
//test connection to database
if(mysqli_connect_errno()){
	printf("Connection failed: %s <br/>",mysqli_connect_errno());
	exit();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="march 3, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="Register.html">English</a> <a href="Register.html">Francais</a> | <a href="Login.php">Login</a></p>
			<h1><img id="mini_house" src="Images/mini_house.png" alt="Red house missing"><span id="headtxt"><span id="Lar">Genesis</span>|Homes<br></span></h1>
			<form id="menuBar">
				<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
				<input type="button" class="homeButton" name="tenantButton" value="Tenants" onclick="goTenants()"/>
				<input type="button" class="homeButton" name="ownerButton" value="Owners" onclick="goOwners()"/>
				<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
				<input type="button" class="homeButton" name="regButton" value="Sign Up" onclick="goRegister()"/>
			</form>
			<!-- Page specific code starts here -->
			
			<h2>
			<?php			
				$val = $_POST['firstname'];
				$val2 = $_POST['lastname'];
				$val3 = $_POST['phonenumber'];
				$val4 = $_POST['emailaddress'];
				$val5 = $_POST['username'];
				$val6 = $_POST['userpassword'];
				$val7 = $_POST['tenown'];
				if($val7 === 'tenant')
					$val7 = true;
				else
					$val7 = false;
				
				$query = "INSERT INTO contacts VALUES('','$val','$val2','$val3','$val4','$val5','$val6','$val7')";
				if(mysqli_query($db,$query))
					echo "<br>Thank you for registering!";
				else
					echo "Error: ".$query."<br>".mysqli_error($db);
			?>
			<br><a href="Login.php">Log in</a>
			</h2>	
				
			<!-- Footer is identical on every page -->
			<footer>
				<table id="footerTable">
					<tr><th>Site Map</th><th>Contact Us</th><th>Find Us!</th></tr>
					<tr>
						<td><a href="HomePage.html">Home</a></td>
						<td>Laramee-Genesis Ltd.</td>
					</tr>
					<tr>
						<td><a href="TenantHome.html">Tenants</a></td>
						<td>2480 Benny Crescent</td>
						<td rowspan=2><img src="Images/facebook.png" alt="Facebook" onclick="goFacebook()"></td>
					</tr>
					<tr>
						<td><a href="OwnerHome.html">Owners</a></td>
						<td>Montreal, Quebec, H4B-2R3</td>
					</tr>
					<tr>
						<td><a href="Register.html">Sign Up</a></td>
						<td>Office: 514-994-9092</td>
					</tr>
				</table>	
				<p id="copyright">Laramee-Genesis Copyright © 2015 by Andrew Laramee All rights reserved</p>
			</footer>
		</div>
	</body>
</html>