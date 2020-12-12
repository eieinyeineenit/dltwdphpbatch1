<?php
class class_inheritance{
    public $username = "koko";
    public $email = "koko@gmail.com";
    public $password = "123456";

    public function greeting(){
        echo "I am from Mandalay";
    }
}
class class_contact extends class_inheritance{

}
echo "This is Inheritance" . "<br/>";
$obj =new class_contact;
echo $obj->username;
//$obj->greeting();
?>
