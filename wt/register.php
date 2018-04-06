<?php
$con=mysqli_connect("localhost","root","","wt");
?>
<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style2.css" />
<script type="text/javascript" src="jscript1.js" ></script>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
<title>jobs for everyone</title></head>
<body background="w7.jpg">
	
<div style="padding-left: 300px; padding-top: 100px;">
	
<table border="1" width="500" cellpadding="10" bgcolor="white">
		
<tbody>
<tr>
			
<td>
				
<h1 style="color: #000000;"><center>Register Here</center></h1>
				<form name="form2" onsubmit="return reg()" method="post">
				<table width="400" cellpadding="10">
					<tr>
						<td><label>Name:</label></td>
						<td><input type="text" name="name1" size="16" id="n1" /></td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td><input type="password" name="password" size="16" id="n1" /></td>
					</tr>
					<tr>
						<td><label>Re-type password:</label></td>
						<td><input type="password" name="pwd" size="16" id="n1" /></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="text" name="Email" size="16" maxlength="30" id="e1" /></td>
					</tr>
					<tr>
						<td><label>Mobile no.:</label></td>
						<td><input type="text" name="Mobile" size="16" maxlength="30" id="m1" /></td>
					</tr>
					<tr>
						<td><label>Gender:</label></td>
						<td><input id="female" type="radio" name="gender" value="f" />
<label>Female</label>
<input id="male" type="radio" name="gender" value="m" />
<label>Male</label>
						</td>
					</tr>
					<tr>
						<td><label>Date of birth:</label></td>
						<td><input type="date" name="depart" id="db" /></td>
					</tr>
					<tr>
						<td><label>City</label></td>
						<td><select style="max-height: 24px; font-size: 15px; width: 145px;" id = "l1">
               <option value = "select"><h6>select</h6></option>
               <option value = "1">Alappuzha</option>
               <option value = "2">Ernakulam</option>
               <option value = "3">Kottayam</option>
               <option value = "4">Kollam</option>
               <option value = "4">Trivandrum</option>
             </select></td>
					</tr>
					<tr>
					<td><label>Qualification</label></td>
             <td><select style="max-height: 24px; font-size: 15px; width: 145px;" id = "l2">
               <option value = "select">select</option>
               <option value = "1">Btech</option>
               <option value = "2">BCA</option>
               <option value = "3">Bsc Computer science</option>
               <option value = "4">MCA</option>
             </select></td>
             </tr>
					<tr>
						<td><label>Exp Years:</label></td>
						<td><input type="text" name="exp" size="16" id="ex" /></td>
					</tr>
				</table>
				<pre><center><input type="reset" value="Reset" />  <input name="submit" type="submit" value="submit" /></center></pre>
				</form>
			</td>
		</tr>
	</tbody></table>
	</div>
</body></html>
<?php
if(isset($_POST["submit"]))
{
	$n=$_POST['name1'];
	$pa=$_POST['password'];
	$em=$_POST['Email'];
	//echo "insert into fps values('$fp','$na','$add','$post','$pl','$di',$p','$ar','$pi')";
	$q=mysqli_query($con,"insert into register values('$n','$pa','$em')");
	$q=mysqli_query($con,"insert into login values('$n','$pa')");
	if($q>0)
	{
		?>
					<script>
					window.location="registered1.xhtml";
					</script>
					<?php
	}
	else
	{
		?>
					<script>
					alert("not inserted");
					</script>
					<?php
	}
}
?>