<?php
 $goback="<a href= 'smallproject.php'>GO Back</a>";
if(isset($_POST["submit"])){

 if($_SERVER['REQUEST_METHOD']=="POST"){

    $mark= $_POST["mark"];
 }


}
if($mark <0){
    echo"null";
}
if($mark<=39){
    echo"Failed". "<br><br>";
    echo $goback;
}elseif($mark>=40)
{echo "Passed" ."<br><br>";
    echo $goback;
}elseif($mark>=80){
    echo"Distinction" ."<br><br>";
    echo $goback;
}else{
    echo"System Error" . "<br><br>";
    echo $goback;
}
?>