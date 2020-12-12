<?php
class class_destructor{
    private $x=0;

    public function __destruct(){
        echo "I finished my job sir. thanks . By the way now x value is=" .$this->x;
    }
    public function loopfun(){
        $i = 0;
        while($i < 10){
            echo $i . "I love Mandalay"."<br/>";
            $i++;
        }
        $this->x=$i;
    }

}
echo "This is Destructor"."<br/>";
$obj=new class_destructor();
$obj->loopfun();
echo "<hr/>";
?>
