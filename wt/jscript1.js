function reg()
{
	var name = document.getElementById("n1").value
	var email = document.getElementById("e1").value
	var mobile = document.getElementById("m1").value
	var exp = document.getElementById("ex").value
	var dob = document.getElementById("db").value
	var city = document.getElementById("l1").value
	var qual = document.getElementById("l2").value
	if (name == "") {
		alert("Please enter name!!");
		document.getElementById("n1").focus();
		return false;
	}
	
	
	else if (email == "") {
		alert("Please enter email!!");
		document.getElementById("e1").focus();
		return false;
	}

	else if (mobile == "") {
		alert("Please enter mobile no.!!");
		document.getElementById("m1").focus();
		return false;
	}

	else if (dob == "") {
		alert("Please enter date of birth!!");
		document.getElementById("db").focus();
		return false;
	}

	else if (city == "select") {
		alert("Please enter city!!");
		document.getElementById("e1").focus();
		return false;
	}

	else if (qual == "select") {
		alert("Please enter qualification!!");
		document.getElementById("e1").focus();
		return false;
	}

	else if (exp == "") {
		alert("Please enter experience!!");
		document.getElementById("ex").focus();
		return false;
	}
	else
	{
		return true;
	}
}
function log()
{
	var user = document.getElementById("user").value
	var pwd = document.getElementById("pwd").value

	if (user == "") {
		alert("Please enter username!!");
		document.getElementById("user").focus();
		return false;
	}
	else if (pwd == "") {
		alert("Please enter password!!");
		document.getElementById("pwd").focus();
		return false;
	}
	
	else
	{
		return true;
	}
}

