<?php
class class_constructor{
    public function __construct(){
        echo "I am start working by automatically sir ! hee hee :P";
    }

//    public function __construct($name){
//        echo "I am start by automatically sir ${name} ! hee hee";
//    }
}
echo "This is Constructor"."<br/>";
$obj = new class_constructor();
//$obj = new class_constructor("Aung Aung");
echo "<hr/>";

?>
