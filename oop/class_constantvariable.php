<?php
class class_constantvariable{
    //define("DB_HOST","localhost");
    public $name="Ei Ei ";
    public const DB_HOST = "localhost";
    public const name = "eiei";
}

$obj = new class_constantvariable();
echo $obj->name;
//echo $obj::DB_HOST;
echo "<br/>";
echo $obj::name;
?>
