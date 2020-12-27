<?php

abstract class class_abstractmethod{
    //concreate method
    public function myfun(){
        echo "I am my fun"."<br/>";
    }
    //adstract method
    public abstract function firstabs();
}

abstract class subabs extends class_abstractmethod{
    public abstract function secondabs();
}

class mybabychild1 extends class_abstractmethod{
    //overwrite -> abstract method
    public function firstabs(){
        echo "I am firstabs from babychild"."<br/>";
    }
}

class mybabychild2 extends subabs{
    public function firstabs(){
        echo "I am firstabs from mybabychild2";
    }
    public function secondabs(){
        echo "I am secondabs from mybabychild2";
    }
}
//$mychobj= new mybabychild1();
//$mychobj ->firstabs();

$mych2obj = new mybabychild2();
$mych2obj->firstabs();
echo "<br/>";
$mych2obj->secondabs();




?>
