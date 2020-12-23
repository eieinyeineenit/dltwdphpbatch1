<?php

class objectcasting{
    public function objectcastingbyobj(classobj1 $req){
        var_dump($req);
    }
}
class classobj1{
    public $num1=100;
    public $num2=200;
}
class classobj2{

}

$obj=new objectcasting();

$obj1=new classobj1();
$obj2=new classobj2();

$obj->objectcastingbyobj($obj1);

echo "<hr/>";
?>
