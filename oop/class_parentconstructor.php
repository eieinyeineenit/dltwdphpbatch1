<?php

class class_parentconstructor{
    public $name="ei ei";
    public $email="eiei@gmail.com";
    public $password="123456";

    public function __construct(){
        echo "I am start working from parent";
    }
}
class class_child1 extends class_parentconstructor{

}

class class_child2 extends class_parentconstructor{

    //Method Overwriting  - Parent Method OV
    public function __construct(){
        parent::__construct();
        echo "<br/>";
        echo "I am start working from child2";
    }
}
echo "This is Parent Constructor ";
echo "<br/>";
$obj=new class_child2();

?>
