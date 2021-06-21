<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<?php
	$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $phoneNumber = $mail= $web = $userName = $password = "";

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$fname = TestIput($_POST['fname']);
		$lname =TestIput($_POST['lname']);
		$gender =TestIput($_POST['gender']);
		$dob = TestIput($_POST['dob']);
		$religion =TestIput($_POST['religion']);
		$praddress =TestIput($_POST['praddress']);
		$peaddress =TestIput($_POST['peaddress']);
		$phoneNumber =TestIput($_POST['phoneNumber']);
		$mail =TestIput($_POST['mail']);
		$web =TestIput($_POST['web']);
		$userName =TestIput($_POST['userName']);
		$password =TestIput($_POST['password']);
		
	}

	
function TestIput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>



	<h1>Registation Form</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<fieldset>
	<legend>Basic Information</legend>
	<label for="fname">First Name</label>
	<input type="text" name="fname" id="fname"><br><br>

	<label for="lname">Last Name</label>
	<input type="text" name="lname" id="lname"><br><br>

	Gender <input type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>
	<input type="radio" name="gender" id="female" value="female">  <label for="female">Female</label><br><br>

	<label for="dob">Date of Birth </label>
	<input type="Date" name="dob" id="dob" ><br><br>

	<label for="religion">Religion </label>
	<select id="religion" name="religion">

		<option value="muslim">Muslim</option>
		<option value="hindu">Hindu</option>
		<option value="cristian">Cristian</option>
		<option value="buddha">Buddha</option>
		
	</select>
</fieldset> <br>

<fieldset>
	<legend>Contact Information</legend>
	<label for="praddress">Present Address </label>
	<textarea id="praddress" rows="2" cols="30" name="praddress"></textarea><br><br>

	<label for="peaddress">Permanent Address </label>
	<textarea id="peaddress" rows="2" cols="30" name="peaddress"></textarea><br><br>

	<label for="phoneNumber">Phone </label>
	<input type="tel" name="phoneNumber" id="phoneNumber"><br><br>

	<label for="mail">Email </label>
	<input type="Email" name="mail" id="mail"><br><br>

	<label for="web">Personal Website Link </label>
	<input type="url" name="web" id="web">


</fieldset><br>
<fieldset>
	<legend>Account Information</legend>


	<label for="userName">User Name </label>
	<input type="text" name="userName" id="userName"><br><br>

	<label for="password">Password </label>
	<input type="password" name="password" id="password"><br><br>

</fieldset><br>

<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>