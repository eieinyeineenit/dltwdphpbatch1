<?php
 //Variable Scope

 $val=20;//Global Variable
 function variablescope(){
     $num=10;//local Variable
     echo $num;
 }
 echo $val;
 echo "<br/>";
 variablescope();
 echo "<br>";
 //echo $num;local variable does not working in outside;
 echo "<hr/>";

$x=50;
$y=100;
function vscope(){
    global $x;
    global $y;
    $z=$x+$y;
    echo $z;
}
echo $x;
echo "<br/>";
echo vscope();
echo "<hr/>";

//static variable 
function staticvariable(){
   STATIC $val=0;
    $val++;
    echo $val;
}
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();


?>