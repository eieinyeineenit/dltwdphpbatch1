<!DOCTYPE html>
<html>
<head>
	<title>Log</title>
</head>
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
h2{
            color:black;
			padding-top:20px;
			text-align:center;
			text-shadow:3px 3px 3px black;
		}

table{
            padding-left:20px;
            }

.email,.password{
    font-size:20px;
    font-weight:bold;
}

</style>
<body>
	<div class="all">
	
	<h2 ><i>Login Form</i></h2>

	<table >
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    
    
    <tr>
        <td>Email</td>
    </tr>
	<tr>
		
		<td class="email"></i><input type="email" name="email" id="email" class="input" placeholder="Email" required></td>
	</tr>
	<tr>
    <td>
    Passowrd
    </td>
	</tr>
		<td class="password"><input type="password" name="pass" id="pass" class="input" placeholder="Password" required></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="login" id="submit" class="login" value="LOGIN"></td>
	</tr>
    <tr>
    <td><button type="button" class="cancelbtn">Cancel</button><td>
      <td><span class="sign">Do you want <a href="#">Sign Up?</a></span></td>
    </tr>
    </form>
</table>
</div>
</body>
<footer>
</footer>
</html>