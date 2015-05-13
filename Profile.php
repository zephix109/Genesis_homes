<?php
include('dbInfo.php');
$db=mysqli_connect('localhost',$dbUser,$dbPass,$database);
//test connection to database
if(mysqli_connect_errno()){
	printf("Connection failed: %s <br/>",mysqli_connect_errno());
	exit();
	}	
	
	//start session if login is valid
	$logUser = $_POST['loginUser'];
	$logPass = $_POST['loginPassword'];
	$logUser = htmlspecialchars($logUser);
	$logPass = htmlspecialchars($logPass);
	
	$query = "SELECT* FROM contacts WHERE user = '$logUser' AND pass = '$logPass'";
	
	$result = mysqli_query($db, $query);
	
	$num_rows = mysqli_num_rows($result);

	if($num_rows > 0){
		session_start();
		$_SESSION['login'] = "ok";		
	}
	else{
		header ("Location: Login.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="date" content="april 9, 2015">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="css/text" href="CSS/Laramee_Rentals.css"/>
		<script type="text/javascript" src="Javascript/Laramee_Rentals.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="Profile.php">English</a> <a href="Profile.php">Francais</a> | <a href="Login.php">Login</a></p>
			<h1><img id="mini_house" src="Images/mini_house.png" alt="Red house missing"><span id="headtxt"><span id="Lar">Genesis</span>|Homes<br></span></h1>
			<form id="menuBar">
				<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
				<input type="button" class="homeButton" name="tenantButton" value="Tenants" onclick="goTenants()"/>
				<input type="button" class="homeButton" name="ownerButton" value="Owners" onclick="goOwners()"/>
				<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
				<input type="button" class="homeButton" name="regButton" value="Sign Up" onclick="goRegister()"/>
			</form>
			<!-- Page specific code starts here -->
			
			<h2>Profile page</h2>
			<p id="profile">
			Basic information <br><br>
			<?php
				$row = mysqli_fetch_assoc($result);
				echo "ID#: ".$row['id']."<br>"."First name: ".$row['first']."<br>"."Last name: ".$row['last']."<br>";
				echo "Phone#: ".$row['phone']."<br>"."Email: ".$row['email']."<br>";
				
				if($row['tenant'] == '1')
					$_SESSION['tenant'] = "Tenant";
				else
					$_SESSION['tenant'] = "Owner";
				echo "Type: ".$_SESSION['tenant'];
				
				$_SESSION['id'] = $row['id'];
				$id = $row['id'];
			
				$query2 = "SELECT* FROM tenant_owner_info WHERE contact_id = '$id'";
				$result2 = mysqli_query($db, $query2);
				$num_rows2 = mysqli_num_rows($result2);
				
				if($num_rows2 > 0){
					$row2 = mysqli_fetch_assoc($result2);
					if($row['tenant'] == 1){
						echo "<br><br>Occupation: ".$row2['occupation']."<br>Age: ".$row2['age'];
						
						if($row2['pet'] == '1')	
							echo "<br>Pet: Yes";
						else
							echo "<br>Pet: No";
						
						if($row2['smoker'] == 1)
							echo "<br>Smoker: Yes";
						else
							echo "<br>Smoker: No";
						
						echo "<br>Annual income: ".$row2['annualincome'];
					}	
					else{
						echo "<br><br>Preferred occupation: ".$row2['occupation']."<br>Preferred age: ".$row2['age'];
						
						if($row2['pet'] == '1')	
							echo "<br>Allow pets: Yes";
						else
							echo "<br>Allow pets: No";
						
						if($row2['smoker'] == 1)
							echo "<br>Allow smokers: Yes";
						else
							echo "<br>Allow smokers: No";
						
						echo "<br>Preferred annual income: ".$row2['annualincome'];
					}
				}
			?>
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