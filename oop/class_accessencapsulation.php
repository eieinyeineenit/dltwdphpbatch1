<?php
class class_accessencapsulation{
    private $fullname="Kyaw Kyaw";

    public function getter(){
//        $this->fullname ="kaung kaung";
        echo $this->fullname;
    }

}

$obj = new class_accessencapsulation();
echo "This is access to Encapsulation"."<br/>";
$obj->getter();
echo "<hr/>";
?>
