<?php
class class_method{
    //Class Method

    //Access Modifier
//    public = anyon can access
//    private = only access inside main class
//    protected = subclass/ Extended class

    public function greeting()
    {
        echo "Have a good day";
    }
// Method Overloading
    public function calculate($num=1){
        echo "Getting number is = ${num}";
    }
}
$obj = new class_method();
echo "This is Class Method";
echo "<br/>";
$obj->greeting();
echo "<br/>";
echo "This is Class Method Overloading"."<br/>";
$obj->calculate(150);
echo "<hr/>";
?>
