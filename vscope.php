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
echo "<hr/>";

$num=20;
function myvalue($num){
    $num=40;
    echo $num;
}
echo "this is first value from global{$num}";
echo "<br/>";
myvalue($num);
echo "<br/>";
echo "this is second value from global{$num}";
echo "<br/>";

$num=20;
$num2=50;
function myvale1(&$num){
    $num=40;
    echo $num;
}
echo "this is first value from global num {$num}";
echo "<br/>";

myvale1($num2);
echo "<br/>";
echo "this is second value from global num {$num}";
echo "<br/>";
echo "this is second value from global num {$num}";
echo "<br/>";

 echo "<hr/>";

 $abc=20;
 function myvale2(&$val){
     $val=40;
    echo $val;
 }
 echo "this is first value from global {$abc}";
 echo "<br/>";
 myvale2($abc);
 echo "<br/>";
 echo "this is second value from global {$abc}";
?>