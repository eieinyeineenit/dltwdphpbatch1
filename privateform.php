<?php
    session_start();

    if(isset($_SESSION["email"])){
        header("Location:login.php"); 
     }

?>

<!DOCTYPE html>
<html>
<head>
<title>Private Page</title>
<style>

body{
    background-image:url("https://cdn.abcotvs.com/dip/images/24996_kgo-windows-bliss-040714-1280.jpg?w=1600");
    background-repeat:no-repeat;
    width:100%;
    height:70%;
   
}

/* div{
    text-align:center;
} */

h3{
    font-size:70px;
    color:black;
 
    text-align:center;
}
button{
    margin-top:20%;
    margin-left:80%;
    background-color:orange;
    border:none;
    border-radius:5px;
}

</style>
</head>
<body>
   <div> 
   <h3><i>Welcome</i></h3>
   </div>
   <a href="loginform.php"><button>Logout</button></a>
</body>
</html>