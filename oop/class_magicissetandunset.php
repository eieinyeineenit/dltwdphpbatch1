<?php

class class_magicissetandunset{
    public $name ="Mya Mya";

    public function __isset($property){
        echo "You are trying to check set or not property ${property}.it is not exist sir ". "<br/>";
    }
    public function __unset($property){
        echo "You are trying to check set or not prpperty ${property}.it is not exist sir ". "<br/>";
    }

}
echo "This is Magic method isset and unset"."<br/>";
$obj=new class_magicissetandunset();
//echo $obj->name;
isset($obj->name);

//isset($obj->address);
//
//unset($obj->address);
//unset($obj->name);
//var_dump(isset($obj->name));

echo "<hr/>";

?>
