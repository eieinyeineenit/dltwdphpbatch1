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
class class_social extends class_inheritance {

    //Own Method
    public function verifyfb(){
        echo "Are you ready to eat";
    }
    //Method Overwriting - Parent Method OV
    public function greeting(){
        echo "Sorry I am from Yangon";

     //Properties Overwriting Parent Method Ov
        $this->username="Maung Maung";
        echo $this->username;
    }

}
echo "This is Inheritance" . "<br/>";
$obj =new class_contact;
echo $obj->username;
//$obj->greeting();

$abc = new class_social();
echo $abc->password;
$abc->greeting();
echo "<hr/>";
?>
