<?php
//Function
//function functionname(){}

function myfun(){
    echo "my name is function.";
}
myfun();
echo "<hr/>";

function hellocal(){
    $num1=100;
    $num2=10;
    $cal=($num1/$num2) +(5+5);
    echo $cal;
}
hellocal();
echo "<hr/>";

//parameter passing to function

function singleparameter($name){
    echo "My name is {$name}";
}
singleparameter("Ei Ei");
echo "<br/>";

function multiparameter($name,$age){
    echo "My name is {$name}. My age is {$age}";
}
multiparameter("Mya Mya",30);
echo "<br/>";

function multical($val1,$val2,$val3){
    $cal=($val1+$val2)*$val3;
    echo $cal;
}
multical(10,20,2);
echo "<br>";

//default parameter
function defaultparameter($name="Mya Mya"){
    echo "My name is {$name}";
}
defaultparameter();
echo "<br>";

function defaultpp($num1=20,$num2=10,$num3=2){
    $cal=($num1+$num2)/$num3;
    echo $cal;
}
defaultpp(40,20);
echo "<hr/>";

//return value
//simple function
function simplereturn(){
    return "My name is return function";
}
echo simplereturn(10);
echo "<br>";

//parameter functiion
function singlereturn($num1){
    $cal=$num1+200;
    return $cal;
}
//function abc(){
    //$val=10;
    //simplereturn(10)+$val;
    //this is js type fnction for explain
//}
echo singlereturn(40);
echo "<br>";
function multireturn($num1,$num2,$num3){
    $cal=($num2+$num3)*$num1;
    return $cal;
}
echo multireturn(10,10,3);
echo "<hr/>";
//dynamic function call
$val="morning";
echo $val;
echo "<hr/>";
function greeting(){
    return "Hello I am Myanmar.";
}
function morning(){
    return "hay I am morning.";
}
echo greeting();
echo "<br/>";
echo $val;
echo "<br/>";
echo $val();
echo "<hr/>";
$num1="doit";
function doit(){
return "We love Kwe Phyo";
}
if(function_exists($num1)){
    echo "Yes, your variable had used in function";
}
else {
    echo "No,your variable is not in function";
}

?>