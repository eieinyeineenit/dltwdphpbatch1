<?php
trait class_trait{
    public $username = "zin zin";
    public $email = "zinzin@gmail.com";
    public $password = "123456";

    public function parent(){
        echo "I am form parent";
    }
}
trait class_baby1{

    public function baby1(){
        echo "I am from baby 1";
    }
}
class class_baby2{
    use class_trait;
    use class_baby1;
    public function baby2(){
        echo "I am from baby 2";
    }
}
$obj = new class_baby2();
$obj->baby2();
echo "<br/>";
$obj->baby1();
echo "<br/>";
$obj->parent();
echo "<br/>";
echo $obj->username;

?>
