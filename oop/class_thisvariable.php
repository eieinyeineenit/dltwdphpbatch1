<?php
class class_thisvariable{
    //public $fullname="Tin Htut Aung";
    private $fullname="Tin Htut Aung";
    public function getname(){
        echo $this->fullname;
        echo "<br/>";
        echo $this->fullname ="Ko Ko ";
    }
}
$obj = new class_thisvariable;
echo "This is using \$this Variable" ."<br/>";
$obj->getname();
echo "<hr/>";
?>
