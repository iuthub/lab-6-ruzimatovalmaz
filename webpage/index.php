<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
			<?php 
	$name="";
	$email="";
	$username="";
	$password="";
	$confirmPassword="";
	$date="";
	$gender="";
	$maritalSatus="";
	$address="";
	$city="";
	$postalCode="";
	$homePhone="";
	$mobilePhone="";
	$creditNumber="";
	$creditDate="";
	$monthSalary="";
	$webUrl="";
	$gpa="";
	$flag = "|";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$flag = "|";
	$name=$_POST["name"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$confirmPassword=$_POST["confirmPassword"];
	$date=$_POST["date"];
	$gender=$_POST["gender"];
	$maritalSatus=$_POST["maritalSatus"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$postalCode=$_POST["postalCode"];
	$homePhone=$_POST["homePhone"];
	$mobilePhone=$_POST["mobilePhone"];
	$creditNumber=$_POST["creditNumber"];
	$creditDate=$_POST["creditDate"];
	$monthSalary=$_POST["monthSalary"];
	$webUrl=$_POST["webUrl"];
	$gpa=$_POST["gpa"];

	(preg_match("/..+[a-z]/i",$name)?:$flag =$flag."1|");
	(preg_match("/.*@.*\..*/i",$email)?:$flag =$flag."2|");
	(preg_match("/.....+[a-z]/i",$username)?:$flag =$flag."3|");
	(preg_match("/........+[a-z]/i",$password)?:$flag =$flag."4|");
	if($password != $confirmPassword)
	{
		$flag = $flag."5|";
	}
	(preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/",$date)?:$flag = $flag."6|");
	(preg_match("/^(male|female)$/",$gender)?:$flag = $flag."7|");
	(preg_match("/^(single,divorced,married,widowed)$/i",$maritalSatus)?:$flag = $flag."8|");
	(preg_match("/.*/",$address)?:$flag = $flag."9|");
	(preg_match("/.*/",$city)?:$flag = $flag."10|");
	(preg_match("/^[0-9]{6}$/",$postalCode)?:$flag = $flag."11|");
	(preg_match("/^[0-9]{9}$/",$homePhone)?:$flag = $flag."12|");
	(preg_match("/^[0-9]{9}$/",$mobilePhone)?:$flag = $flag."13|");
	(preg_match("/^[0-9]{16}$/",$creditNumber)?:$flag = $flag."14|");
	(preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/",$creditDate)?:$flag = $flag."15|");
	(preg_match("/^[0-9]{1}\.[0-9]{1}$/",$gpa)?:$flag = $flag."16|");
	}
?>
	</head>
	
	<body>
	
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
			
		<h2>Please, fill below fields correctly</h2>
		


		<dl>
			<form action="index.php" method="post">
			<dt>Name: <ins style="color:RED"> <?php echo (preg_match("/1\|/",$flag)?"Please enter the name Correctly":""); ?></ins></dt>
			<dd> <input type="text" name="name"></dd>
			<dt>Email: <ins style="color:RED"> <?php echo (preg_match("/2\|/",$flag)?"Error in entering the email":"");?></ins> </dt>
			<dd><input type="text" name="email"></dd>
			<dt>Username:<ins style="color:RED"> <?php echo (preg_match("/3\|/",$flag)?"Error!":"");?></ins></dt>
			<dd><input type="text" name="username"></dd>
			<dt>Password: <ins style="color:RED"> <?php echo (preg_match("/4\|/",$flag)?"Error":"");?> </ins> </dt>
			<dd><input type="password" name="password"></dd>
			<dt>Confirm password:<ins style="color:RED">  <?php echo (preg_match("/5\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="password" name="confirmPassword"></dd>
			<dt>Date of Birth:(dd.MM.yy)format<ins style="color:RED">  <?php echo (preg_match("/6\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="Date" name="date"></dd>
			<dt>Gender:(male or female) <ins style="color:RED"> <?php echo (preg_match("/7\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="gender"></dd>
			<dt>Marital Statu:(Single,Married,Divorced,Widowed)<ins style="color:RED">  <?php echo (preg_match("/8\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="maritalSatus"></dd>
			<dt>Address:<ins style="color:RED">  <?php echo (preg_match("/9\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="address"></dd>
			<dt>City:<ins style="color:RED">  <?php echo (preg_match("/10\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="city"></dd>
			<dt>Postal Code: <ins style="color:RED"> <?php echo (preg_match("/11\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="postalCode"></dd>
			<dt>Home Phone:<ins style="color:RED">  <?php echo (preg_match("/12\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="homePhone" ></dd>
			<dt>Mobile Phone:<ins style="color:RED">  <?php echo (preg_match("/13\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="mobilePhone"></dd>
			<dt>Credit Card Number:<ins style="color:RED">  <?php echo (preg_match("/14\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="creditNumber"></dd>
			<dt>Credit Card Expiry Date:<ins style="color:RED">  <?php echo (preg_match("/15\|/",$flag)?"Error!":"");?></ins></dt>
			<dd><input type="text" name="creditDate"></dd>
			<dt>Monthly Salary:</dt>
			<dd><input type="text" name="monthSalary"></dd>
			<dt>Web Site URL:</dt>
			<dd><input type="text" name="webUrl"></dd>
			<dt>Overall GPA:<ins style="color:RED">  <?php echo (preg_match("/16\|/",$flag)?"Error":"");?></ins></dt>
			<dd><input type="text" name="gpa"></dd>
		</dl>
		<div>
			<input type="submit"  value="Submit" style="margin: 8px">
		</div>
		</form>
		
	</body>
</html>