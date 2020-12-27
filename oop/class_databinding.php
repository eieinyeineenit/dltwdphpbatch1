<?php
class class_databinding{

    public static $name= "aung aung";

    public static function classname(){
        return __CLASS__;
    }

    public function getclassname(){
        echo $this->classname();

//        echo self::classname();

//        echo static::classname();
    }

    public function getname(){
        echo self::$name."<br/>";
    }
}

class childclass1 extends class_databinding{
    public static $name="Kyaw Kyaw";
  public static function classname(){
        return __CLASS__;
    }

//     public function getclassname(){
//
//        echo self::classname();
//        }

}
$obj =  new class_databinding();
//echo $obj->classname();
//echo "<br/>";
//
//$obj->getclassname();
//echo "<br/>";



//$obj->getname();
echo "<br/>";

$abc= new childclass1();
$abc->getclassname();
//echo $abc::$name;
//$abc->getname();

$abc->classname();
echo "<hr/>";



?>
