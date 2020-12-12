<?php
class class_accessmodifier{
   public $fullname="Tin Htut Aung";
//    private $fullname="Tin Htut Aung";
//    protected $fullname="Tin Htut Aung";


public function getnum(){
    $num=10;
    echo $num;//Can print
}
}

$obj=new class_accessmodifier;
echo "This is CLass Access Modifier"."<br/>";
echo $obj->fullname;
//echo $obj->getnum();
?>
