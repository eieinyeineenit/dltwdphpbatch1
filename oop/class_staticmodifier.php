<?php
class class_staticmodifier{

    //Static property
    public static $i = 0;
    public static $name="Ko Ko";

    //Non-static property
    public $address = "Mandalay";

    //static method (Static method can not use Non static property)
    public static function myfun(){
        echo " i am static method my fun"."<br/>";
        echo "my name is ". self::$name;
        echo "<br/>";
    }

    //Non-static Method (Non static method = static property and non static property)
    //Non-static Method (Non static method = static method and non static method)
    public function mynonstfun(){
        echo "i am non-static method"."<br/>";
        echo "my getting value is = " .self::$i."<br/>";

        echo "my address is = " .$this->address;
        self::myfun();
    }
    public function getinc(){
//        $this->i++;
//        echo $this->i ."<br/>";

        self::$i++;
        echo self::$i ."<br/>";
    }

}

echo "This is static modifier"."<br/>";
$obj = new class_staticmodifier();
echo $obj->address;//Calling no static property
echo $obj::$i; //Calling static property

echo "<br/>";
//$obj->myfun();//Calling non-static method
//$obj::myfun();//Calling static method

//echo class_staticmodifier::$i;//Calling static property
//echo "<br/>";
//class_staticmodifier::myfun();//Calling static method
//$obj->mynonstfun();

//$obj->getinc();
//$obj->getinc();
//$obj->getinc();
//$obj->getinc();

$bjo = new class_staticmodifier();

//$bjo->getinc();
//$bjo->getinc();
//$bjo->getinc();
//$bjo->getinc();




echo "<hr/>";
?>
