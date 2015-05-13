<?php
include('dbInfo.php');
$db=mysqli_connect('localhost',$dbUser,$dbPass,$database);

//test connection to database
if(mysqli_connect_errno()){
	printf("Connection failed: %s <br/>",mysqli_connect_errno());
	exit();
	}
else
	print("Connection successful");

//initial setup of database with default contacts and postings
$query = "INSERT INTO contacts VALUES('','Andrew','Laramee','514-994-9090','zephix108@gmail.com','a_laram','siseneg',true)";
if(mysqli_query($db,$query))
	echo "<br>Data entered successfully";
else
	echo "Error: ".$query."<br>".mysqli_error($db);

$query = "INSERT INTO contacts VALUES('','Mike','Geras','514-657-5849','bloofor.soup@hotmail.com','m_geras','hoopdreams',false)";
if(mysqli_query($db,$query))
	echo "<br>Data entered successfully";
else
	echo "Error: ".$query."<br>".mysqli_error($db);

$query = "INSERT INTO contacts VALUES('','Pascale','Veroh','514-876-9812','outofideas@gmail.com','p_veroh','ploopas',true)";
if(mysqli_query($db,$query))
	echo "<br>Data entered successfully";
else
	echo "Error: ".$query."<br>".mysqli_error($db);

$query = "INSERT INTO contacts VALUES('','Juice','Jorodanev','514-990-0076','j.jorodanev@hotmail.com','j_jorod','lkjhgf',false)";
if(mysqli_query($db,$query))
	echo "<br>Data entered successfully";
else
	echo "Error: ".$query."<br>".mysqli_error($db);
?>	