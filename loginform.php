<?php

    //session_start();

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","logindb");

    function enpasscode($password){
      $pass = md5($password);
      $pass = sha1($pass);
      $pass = crypt($pass, $pass);
      return $pass;
      } 

   function dbconnection(){
	   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	   
       if(mysqli_connect_errno() > 0){
           die("Connection Failed!");
       }else{
           return $db;
       }
   }
   $database = dbconnection();
    
    if(isset($_POST["submit"])){
      // echo "<script>alert('submit success1')</script>";
         $email = $_POST["email"];
         $password = enpasscode($_POST["password"]);
         $database = dbconnection();
         $query = "SELECT * FROM loginforms WHERE email = '$email' AND password = '$password'";        
        //  echo "<script>alert('$query')</scirpt>";
        //  echo "<script>alert('submit success2')</script>";
         $result = mysqli_query($database,$query);
         
         if($result){           
           echo "<script>alert('login success')</script>";
          header("Location:privateform.php");
         }
         else{
          echo "<script>alert('login fail')</script>";
          header("Locationloginform.php");        
        }           
    }

    // if(isset($_POST['submit'])){
     

      // function userlogin($email,$password){

      //   $password = enpasscode($password);
        
        

      //   if(mysqli_num_rows($result) > 0){
      //     foreach($result as $data){
      //       $id = $data['id'];
      //     }
      //     $_SESSION['id'] = $id;
      //     header("Location:private.php");
      //   }else{
      //     echo "<div><h4 class='errormsg'>Username and password do not match!</h4></div>";
      //   }
      // }
    //}
    
?>








<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<style type="text/css">
body{
    background-size: 1200px;
    background-image:url("https://cdn4.vectorstock.com/i/1000x1000/55/13/abstract-golden-holiday-background-bokeh-effect-vector-5995513.jpg");
    background-repeat:no-repeat;
    /* width:1300px;
    height:100%; */
}
.all{
    background-color:rgba(127,127,127,0.3);
			border:1px;
			width:300px;
			height:350px;
			margin-left: 500px;
			margin-top: 120px;
			border-radius: 30px;
			box-shadow:-5px -5px 18px black;
			
}

form{
    margin:100px auto;
	width:300px;
	box-shadow:-5px -5px 18px black;
	border-radius:10px;
}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#2193b0;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.sign {
    padding-top: 16px;
    float:right;
}

a{
    color:white;
}

.errormsg{
        text-align:right;
        background-color:red;
        color:white;
        padding:2px;
    }

</style>
</head>
<body>

  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

    <div class="container">

      <label for="email"><b>Email</b></label>
      <input type="email" name="email" id="" class="" placeholder="Enter Your Email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" name="password" id="" class="" placeholder="Enter Your Password" required>
        
      <button name="submit" id="submit" class="">Login</button>

      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->

    </div>

    <div class="container">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="sign">Do you want <a href="signupform.php">Sign Up?</a></span>
    </div>
  </form>

</body>
</html>
