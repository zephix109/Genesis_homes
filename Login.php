<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="april 9, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="Login.php">English</a> <a href="Login.php">Francais</a> | <a href="Login.php">Login</a></p>
			<h1><img id="mini_house" src="Images/mini_house.png" alt="Red house missing"><span id="headtxt"><span id="Lar">Genesis</span>|Homes<br></span></h1>
			<form id="menuBar">
				<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
				<input type="button" class="homeButton" name="tenantButton" value="Tenants" onclick="goTenants()"/>
				<input type="button" class="homeButton" name="ownerButton" value="Owners" onclick="goOwners()"/>
				<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
				<input type="button" class="homeButton" name="regButton" value="Sign Up" onclick="goRegister()"/>
			</form>
			<!-- Page specific code starts here -->
			
			<p id="regPage">
				<h2>Login</h2>
				<form name="logForm" method="post" action="Profile.php">
					<input type="text" name="loginUser" class="regData1" value="Username" onfocus="clearLogUser()"/><br>
					<input type="password" name="loginPassword" class="regData1" value="Password" onfocus="clearLogPass()"/><br>
					<input type="submit" value="Login" class="logButton"/>
					<input type="reset" value="Clear" class="logButton"/>
				</form>				
			</p>
				
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