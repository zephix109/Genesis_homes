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
		<title>Owner Posting</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="march 3, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="OwnerPosting.html">English</a> <a href="OwnerPosting.html">Francais</a> | <a href="Login.php">Login</a></p>
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
				<span id="profTitle">Post a property</span>
				<form name="profForm" id="profile" method="post" onsubmit="return validatePost()" action="OwnerPostingSubmit.php">
					<span class="formTitle">Property specs</span><br><br>
					<div id="basicInfo">
					<label for="postTitle">Title: </label>
					<input type="text" class="profileInput" name="title" id="postTitle"/><br><br>
					<label for="numRooms">Room(s): </label>
					<select id="numRooms" name="rooms" class="profileInput">
						<option value="1" selected>1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4+">4+</option>
					</select><br><br>
					<label for="postPrice">Monthly price: $</label>
					<input type="text" id="postPrice" name="pricerange" class="profileInput"><br><br>
					<label for="postAddress">Street address: </label>
					<input type="text" id="postAddress" name="street_address" class="profileInput"><br><br>
					<label for="postCity">City: </label>
					<input type="text" id="postCity" name="city" class="profileInput"><br><br>
					<label for="postProvince">Province: </label>
					<select id="postProvince" name="province" class="profileInput">
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
					<label for="postPostal">Postal code: </label>
					<input type="text" id="postPostal" name="postal" class="profileInput"><br><br>
					<label for="postPicture">Post a picture: </label>
					<input type="file" name="postPicture" id="postPicture" multiple/><br><br>
					<label>Available: </label>
					<input type="date" min="2015-03-18" max="2025-06-01" name="available" class="profileInput"/><br><br>
					<label id="persMess" for="personalMessage">Personal Message: </label>
					<textarea id="personalMessage" name="personalMessage" rows="5" cols="30"> </textarea>
					</div><br>
					
					<input type="submit" class="profButton" value="Post Property"/>
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