//Laramee_Rentals.js
function goHome() {
	window.open("HomePage.html", "_self", false);	
}
function goHomeFr() {
	window.open("HomePageFr.html", "_self", false);
}
function goFacebook() {
	window.open("https://www.facebook.com/andrew.laramee.5");
}


//Tenants page
function goTenants() {
	window.open("TenantHome.html", "_self", false);
}
function goTenantProfile() {
	window.open("TenantProfile.php", "_self", false);
}

//Tenant Profile
function validateTenant() {
	if(document.profForm.tOccu.value == ""){
		alert("Occupation is a required field");
		document.profForm.tOccu.value+=" <";
		return false;
	}
}

//Owners page
function goOwners() {
	window.open("OwnerHome.html", "_self", false);
}
function goOwnerProfile() {
	window.open("OwnerProfile.php", "_self", false);
}
function goOwnerPosting() {
	window.open("OwnerPosting.php", "_self", false);
}


//Owner Posting page
function validatePost() {
	var error = 0;
	
	if(document.profForm.postTitle.value == ""){
		alert("Title is a required field");
		document.profForm.postTitle.value+=" <";
		error++;
	}
	if(document.profForm.postPrice.value == ""){
		alert("Price is a required field");
		document.profForm.postPrice.value+=" <";
		error++;
	}
	if(document.profForm.postAddress.value == ""){
		alert("Address is a required field");
		document.profForm.postAddress.value+=" <";
		error++;
	}
	if(document.profForm.postCity.value == ""){
		alert("City is a required field");
		document.profForm.postCity.value+=" <";
		error++;
	}
	if(document.profForm.postPostal.value == ""){
		alert("Postal code is a required field");
		document.profForm.postPostal.value+=" <";
		error++;
	}
	
	if(error>0)
		return false;
	else
		return true;
}


//Contact us page
function goContact() {
	window.open("ContactUs.html", "_self", false);
}


//Registration page
function goRegister() {
	window.open("Register.html", "_self", false);
}
function validateReg() {
	var error = 0;
	
	var fName=document.regForm.firstname.value;
	var x=fName.search(/^[a-zA-Z\-]+$/);
	if(x=="-1"){
		alert("First name must contain only letters and hyphens");
		document.regForm.firstname.value+=" <";
		error++;
	}
	var lName=document.regForm.lastname.value;
	var x1=lName.search(/^[a-zA-Z\-]+$/);
	if(x1=="-1"){
		alert("Last name must contain only letters and hyphens");
		document.regForm.lastname.value+=" <";
		error++;
	}
	var phoneNo=document.regForm.phonenumber.value;
	var x2=phoneNo.search(/^\(\d{3}\)\d{3}-\d{4}$/);
	if(x2=="-1"){
		alert("Phone number must be in the form (###)###-####");
		document.regForm.phonenumber.value+=" <";
		error++;
	}
	var emailA=document.regForm.emailaddress.value;
	var x3=emailA.search(/@\w+\.+\w+$/);
	if(x3=="-1"){
		alert("Email address must be in form 'emailaddress@something.com'");
		document.regForm.emailaddress.value+=" <";
		error++;
	}
	var userN=document.regForm.username.value;
	var x4=userN.search(/^[a-zA-Z0-9]{6,}$/);
	if(x4=="-1"){
		alert("Username must be at least 6 characters and contain only letters and numbers");
		document.regForm.username.value+=" <";
		error++;
	}
	var passW=document.regForm.userpassword.value;
	var x5=passW.search(/(?=.*\d)(?=.*[A-Za-z])[A-Za-z\d$!@#?%&*]{6,}/i);
	if(x5=="-1"){
		alert("Password must be at least 6 characters with at least one letter and one number");
		document.regForm.userpassword.value="";
		error++;
	}
	var passW=document.regForm.userpassword.value;
	var confPass=document.regForm.confirmpassword.value;
	if(passW!=confPass){
		alert("Confirmation must match the password entered. Password is case sensitive");
		document.regForm.confirmpassword.value="";
		error++;
	}
	
	if(error>0)
		return false;
	else
		return true;
}	


//Clear registration text fields on first click if default text is present
function clearFName() {
	if(document.regForm.firstname.value=="First name")
		document.regForm.firstname.value="";
}
function clearLName() {
	if(document.regForm.lastname.value=="Last name")
		document.regForm.lastname.value="";
}
function clearPhone() {
	if(document.regForm.phonenumber.value=="(###)###-####")
		document.regForm.phonenumber.value="";
}
function clearEmail() {
	if(document.regForm.emailaddress.value=="Email address")
		document.regForm.emailaddress.value="";
}
function clearUser() {
	if(document.regForm.username.value=="Username")
		document.regForm.username.value="";
}
function clearPassword() {
	if(document.regForm.userpassword.value=="Password")
		document.regForm.userpassword.value="";
}
function clearConfirm() {
	if(document.regForm.confirmpassword.value=="Password")
		document.regForm.confirmpassword.value="";
}


//Clear login page text fields on first click if default
function clearLogUser() {
	if(document.logForm.loginUser.value=="Username")
		document.logForm.loginUser.value="";
}
function clearLogPass() {
	if(document.logForm.loginPassword.value=="Password")
		document.logForm.loginPassword.value="";
}


//Matchmaking between tenants and owners
function goMatch(){
	window.open("Matching.php", "_self", false);
}