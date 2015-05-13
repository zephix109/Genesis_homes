<?php
session_start();
//check if user is logged in, if not, send to login page
if($_SESSION['login'] != "ok")
	header ("Location: Login.php");

//check if user is a tenant
if($_SESSION['tenant'] == "Owner")
	header ("Location: OwnerHome.html");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tenant Profile</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="march 3, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="TenantProfile.html">English</a> <a href="TenantProfile.html">Francais</a> | <a href="Login.php">Login</a></p>
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
				<span id="profTitle">Tenant Profile</span>
				<form name="profForm" id="profile"  method="post" onsubmit="return validateTenant()" action="TenantProfileSubmit.php">
					<span class="formTitle">Basic Info</span><br><br>
					<div id="basicInfo">
					<label for="tOccu">Occupation: </label>
					<input type="text" class="profileInput" name="occupation" id="tOccu"/><br><br>
					<label for="tAge">Age: </label>
					<select id="tAge" name="age" class="profileInput">
						<option value="<21" selected>under 21</option>
						<option value="21-30">21 - 30</option>
						<option value="31-40">31 - 40</option>
						<option value="41-55">41 - 55</option>
						<option value="55+">55+</option>
					</select><br><br>
					<label for="tPet">Do you own a pet? </label>
					<select id="tPet" name="pet" class="profileInput">
						<option value="" selected>No</option>
						<option value="1">Yes</option>
					</select><br>
					<label for="yesPet">If yes, what species? </label>
					<input type="text" class="profileInput" id="yesPet"/><br><br>
					<label for="tSmoke">Are you a smoker? </label>
					<select id="tSmoke" name="smoker" class="profileInput">
						<option value="">No</option>
						<option value="1">Yes</option>
					</select><br><br>
					<label for="tIncome">Annual income: </label>
					<select id="tIncome" name="annualincome" class="profileInput">
						<option value="<$25,000">under $25,000</option>
						<option value="$26,000-$35,000" selected>$26,000 - $35,000</option>
						<option value="$36,000-$45,000">$36,000 - $45,000</option>
						<option value="$46,000-$55,000">$46,000 - $55,000</option>
						<option value="$56,000+">$56,000+</option>
					</select><br>
					</div><br>
					
					<!--Rental preferences section-->
					<span class="formTitle">Rental Preferences</span><br><br>
					<div id="rentalPreferences">
					<label for="tProvince">Province: </label>
					<select id="tProvince" name="province" class="profileInput">
						<option value="Ontario">Ontario</option>
						<option value="Quebec">Quebec</option>
						<option value="BC">British Colombia</option>
						<option value="Manitoba">Manitoba</option>
						<option value="Alberta">Alberta</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="NewBrunswick">New Brunswick</option>
						<option value="NovaScotia">Nova Scotia</option>
						<option value="PEI">Prince Edward Island</option>
						<option value="Newfoundland">Newfoundland</option>
					</select><br><br>
					<label for="tCity">City: </label>
					<input type="text" name="city" class="profileInput" id="tCity"/><br><br>
					<label for="numRooms">Room(s): </label>
					<select id="numRooms" name="rooms" class="profileInput">
						<option value="1" selected>1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4+">4+</option>
					</select><br><br>
					<label>Monthly price range: </label>
					<select id="priceFrom" name="pricerange" class="profileInput">
						<option value="<400">under $400</option>
						<option value="400-500">$400-$500</option>
						<option value="500-600">$500-$600</option>
						<option value="600-700">$600-$700</option>
						<option value="700-800">$700-$800</option>
						<option value="800-900">$800-$900</option>
						<option value="900-1000">$900-$1000</option>
						<option value="1000-1200">$1000-$1200</option>
						<option value="1200+">$1200+</option>
					</select><br><br>
					<label>Available before: </label>
					<input type="date" name="available" min="2015-03-18" max="2025-06-01" class="profileInput"/><br><br>
					<label id="persMess" for="personalMessage">Personal Message: </label>
					<textarea id="personalMessage" name="personalMessage" rows="5" cols="30"> </textarea>
					</div>
					
					<!--Button will be changed to submit button for assignment 4-->
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