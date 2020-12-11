<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","logindb");

function dbconnection(){
	$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	
	if(mysqli_connect_errno() > 0){
		die("Connection Failed!");
	}else{
		return $db;
	}
}
$database = dbconnection();

function encodePassword ($password){
	$pass = md5($password);
	$pass = sha1($pass);
	$pass = crypt($pass, $pass);
	return $pass;
}


if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
	$password= encodePassword($_POST["pass"]);

	$query="INSERT INTO loginforms (username,email,password) VALUES ('$username','$email','$password')";


	if (mysqli_query($database, $query)) {
		header("Location: loginform.php");
	 } else {
		// echo $query;
		echo "Error";
		// header("Location: signup.php");
	 }
	//  echo "<script>alert('First')</script>";
	 mysqli_close($database);
	}

	
	
		


    

 








?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Signup Page
	</title>
	<link href="assets/libs/fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
		body{
			background-size: 1300px;
			background-image:url("https://i.redd.it/y1ostvqnr4711.jpg");
			background-repeat: no-repeat;

		}
		.all{
			background-color:rgba(80,66,220,0.1);
			border:1px;
			width:300px;
			height:350px;
			margin-left: 500px;
			margin-top: 120px;
			border-radius: 30px;
			box-shadow:5px 5px 5px black;
		}
		h2{ 
			color:black;
			padding-top:20px;
			text-align:center;
			text-shadow:3px 3px 3px black;
		}
		.username{
			width:150px;
			height:20px;
			padding-left:40px;
			border-top:0px;
			border-bottom: 0px;
			border-left:0px;
			border-right: 0px;
			border-left:0px;

			
		}
		.username:focus{
			outline:none;
		}
		.email{
			padding-left:40px;
		
		}
		.password{
			padding-left:40px;
			 
		 }
		/* input[type=text]{
			border:none;
			border-style:none;
			/* padding-left:20px; */
		/* }
		input[type=email]{
			border:none;
			border-style:none;
		}
		input[type=password]{
			border:none;
			border-style:none; */
		/*} */
		input{
			border:none;
			border-style:none;
			padding:5px;
		}
		i{
			box-sizing:border-box;
			/* padding-left:20px; */
		}

		.login{
			width:200px;
			height:25px;
			font-size:15px;
			border:none;
			/*padding-top:200px;*/
			padding-left: 20px;
			color:white;
			background-color:rgba(38,150,173,1.00);
			border-radius: 10px;
			box-shadow:5px 5px 5px black;
			margin:30px;
		}
		.login:focus{
			outline:none;
		}
		.signup{
			width:200px;
			height:25px;			
			font-size:15px;
			border:none;
			/* padding-top:200px; */
			padding-left: 20px;
			color:white;
			background-color:rgba(38,150,173,1.00);
			border-radius: 10px;
			box-shadow:5px 5px 5px black;
			/* padding:20px; */
			/* margin:30px; */
			margin-left:30px;
			margin-top: 10px;
			margin-botton:20px;
		}
		.signup:focus{
			outline:none;
		}
		

	</style>
</head>
<body>
	<div class="all">
	
	<h2 ><i>Registration Form</i></h2>

	<table>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<tr>
		
		<td class="username"><i class="fas fa-user" style= padding-right:10px; ></i><input type="text" name="username" id="username" class="input" placeholder="Username" required></td>
	</tr>
	<tr>
		
		<td class="email"><i class="fas fa-envelope" style= padding-right:10px;></i><input type="email" name="email" id="email" class="input" placeholder="Email" required></td>
	</tr>
	<tr>
		</label></td>
		<td class="password"><i class="fas fa-lock" style= padding-right:10px;></i><input type="password" name="pass" id="pass" class="input" placeholder="Password" required></td>
	</tr>
	<!-- <tr>
		<td colspan="2"><input type="submit" name="login" id="submit" class="login" value="LOGIN"></td>
	</tr> -->
	<tr>
		<td colspan="2"><input type="submit" name="submit" id="submit" class="signup" value="Sign Up"></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	
	
	<tr>
		
	</tr>
	
	

</form>
</table>
</div>
</body>
<footer>
</footer>
</html>