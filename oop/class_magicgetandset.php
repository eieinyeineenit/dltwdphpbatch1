<?php
class class_magicgetandset{
   public $fullname = "Ko Ko";

    public function __get($property){
        echo "You are trying to get property ${property}.it's no exits";
    }
    public function __set($property,$value){
        echo "You are trying to get property ${property}. by passing ${value}";
    }
}

$obj=new class_magicgetandset();
//var_dump(isset($obj->address));
//$obj->fullname;
echo $obj->address;
//$obj->address;


//$obj->address="yangon";
echo "<hr/>";



?>
