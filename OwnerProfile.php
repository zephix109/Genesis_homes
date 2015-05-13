<?php
session_start();
//check if user is logged in, if not, send to login page
if($_SESSION['login'] != "ok")
	header ("Location: Login.php");

//check if user is a tenant
if($_SESSION['tenant'] == "Tenant")
	header ("Location: TenantHome.html");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Owner Profile</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="march 3, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="OwnerProfile.html">English</a> <a href="OwnerProfile.html">Francais</a> | <a href="Login.php">Login</a></p>
			<h1><img id="mini_house" src="Images/mini_house.png" alt="Red house missing"><span id="headtxt"><span id="Lar">Genesis</span>|Homes<br></span></h1>
			<form id="menuBar">
				<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
				<input type="button" class="homeButton" name="tenantButton" value="Tenants" onclick="goTenants()"/>
				<input type="button" class="homeButton" name="ownerButton" value="Owners" onclick="goOwners()"/>
				<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
				<input type="button" class="homeButton" name="regButton" value="Sign Up" onclick="goRegister()"/>
			</form>
			<!-- Page specific code starts here -->
			
			<!--Basic info section-->
			<p id="profPage">
				<span id="profTitle">Owner Profile</span>
				<form name="profForm" id="profile" method="post" action="OwnerProfileSubmit.php">
					<span class="formTitle">Tenant Criteria</span><br><br>
					<div id="basicInfo">
					<label for="oOccu">Preferred occupation: </label>
					<input type="text" name="occupation" class="profileInput" id="oOccu"/><br><br>
					<label for="oAge">Age preference: </label>
					<select id="oAge" name="age" class="profileInput">
						<option value="none" selected>Any</option>
						<option value="<21">under 21</option>
						<option value="21-30">21 - 30</option>
						<option value="31-40">31 - 40</option>
						<option value="41-55">41 - 55</option>
						<option value="55+">55+</option>
					</select><br><br>
					<label for="oPet">Allow pets? </label>
					<select id="oPet" name="pet" class="profileInput">
						<option value="" selected>No</option>
						<option value="1">Yes</option>
					</select><br><br>
					<label for="oSmoke">Allow smokers? </label>
					<select id="oSmoke" name="smoker" class="profileInput">
						<option value="">No</option>
						<option value="1">Yes</option>
					</select><br><br>
					<label for="oIncome">Income range: </label>
					<select id="oIncome" name="annualincome" class="profileInput">
						<option value="none" selected>Doesn't matter</option>
						<option value="<25,000">under $25,000</option>
						<option value="26,000-35,000">$26,000 - $35,000</option>
						<option value="36,000-45,000">$36,000 - $45,000</option>
						<option value="46,000-55,000">$46,000 - $55,000</option>
						<option value="56,000+">$56,000+</option>
					</select><br>
					</div><br>
					
					<input type="submit" class="profButton" value="Create Profile"/>
					<input type="reset" class="profButton" value="Clear Form"/>
				</form>
			
			
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