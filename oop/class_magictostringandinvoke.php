<?php

class class_magictostringandinvoke

{   public $name = "Kyaw Kyaw";
    public function __toString()
    {
        return "you are trying to print out your obj"."<br/>";

    }
    public function __invoke(){
        return "you are trying to call obj as method"."<br/>";
    }
    public function __clone(){
        echo "you are trying to clone obj"."<br/>";
    }


}
    $obj= new class_magictostringandinvoke();
    echo $obj;
    echo $obj();

    //$cc = $obj;
//echo $cc->name;

$cc = clone $obj;
//echo $cc->name;

echo "<hr/>";
?>
