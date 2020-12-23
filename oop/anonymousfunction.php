<?php
//Regular Function - manual function
function regfun1(){
    echo "this is regular manual function";
}
regfun1();
echo "<br/>";

//Anonymous Function (Nameless Function) -manual
$anonfun1 = function(){
    echo "This is anno function"."<br/>";
};
$anonfun1();

//Anonymous Function (Nameless Function)-single parameter
$annofun2 = function ($name){
    echo "this is anno function . getting value is ${name}"."<br/>";
};
$annofun2("aung aung");

//Anonymous Function (Nameless Function) - multi parameter
$annofun3 = function($name, $age){
    echo "this is anno function . getting value is ${name}. he or she age is ${age}"."<br/>";
};
$annofun3("aung aung",30);

echo "<hr/>";

//lambda style

function mycal($num1,$num2,$onefun){
    $total = $num1 + $num2;
    $onefun($total);
}
$fun = function ($total){
    echo "total result is = ${total}"."<br/>";//$total ka tutu ma tutu ya tal a sa ka $result lo write htar tar
};

mycal(100,200,$fun);

//Closure Function

$num1 = 300; //Global Variable
$num2 = 400; //Global Variable

function getglo(){
    global $num1;
    global $num2;
    echo "This is regular function . my getting value is" .$num2 ."<br/>";
}

getglo();

$clofun =function() use($num1){
    echo "This is closure function . my getting value is ". $num1 ."<br/>";
};
$clofun();

//Dynamic Function
//-manual function
$dynfun1 = create_function('','echo "this is Dynamic function"."<br/>";');
$dynfun1();

//-single function
$dynfun2=create_function('$name','echo "This is Dynamic Function my getting value is ${name}"."<br/>";');
$dynfun2("ei ei");


//-multi function
$dynfun3 = create_function('$name,$age','echo "This is Dynamic Function.  my getting value is ${name} and he or she age is ${age}" ."<br/>";');
$dynfun3("zin zin","22");

?>
