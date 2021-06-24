<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>

	<?php
	//file name
	define("filepath", "data.txt");
	//Value Initializing 
	$userName = $password = "";
	//error msg value
	$userError = $passwordError = "";
	$flag = false;
	
	//POST method checking
	if($_SERVER['REQUEST_METHOD']==='POST'){

		//Validating
		if (empty($_POST['user'])) {
			$userError = "Field Cant be empty";
			$flag = true;
		}

		if (empty($_POST['password'])) {
			$passwordError = "Field Cant be empty";
			$flag = true;
		}

		//If validated

		if(!$flag){

			//Input Assign
			$userName = input_data($_POST['user']);
			$password = input_data($_POST['password']);

			//read data
			 $fileData = read();
    $users=json_decode($fileData);
	foreach($users as $user)
	{
	if($user->user === $userName && $user->password === $password)
	$flag = true;
	}
    if($flag)
    {
	header("location: dashbord.html");
    }
    else 
    {
	echo "Wrong Info";
    }
		}

	}

 function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

  //File Write Logic 
   function write($content) {
$file = fopen(filepath, "a");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}


	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" >
		<fieldset>

			<legend style="margin: auto;">Login</legend>

			<label for="user">User Name :</label>
			<input type="text" name="user" id="user">
			<span style="color: red;"><?php echo $userError; ?></span><br><br>


			<label for="pass">Password :</label>
			<input type="password" name="password" id="pass">
			<span style="color: red;"><?php echo $passwordError; ?></span><br><br>

			<input type="submit" name="login" value="Login">


		</fieldset>


	</form>




	<!--Read Method logic with php -->
	<?php
function read() 
{
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>

</body>
</html>