<?php

class class_updateencapsulation{
    private $fullname="Zin Zin";

    public function setter($name){
        $this->fullname=$name;
    }
    public function getter(){
        echo $this->fullname;
    }
}
$obj = new class_updateencapsulation();
echo "This is update to Update Encapsulation"."<br/>";
$obj->setter("Ei Ei");
$obj->getter();
echo "<hr/>";

?>
