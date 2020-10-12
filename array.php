<?php

$val1=["red","black","green","pink","white"];//manual array
$val2=["one"=> "this is post one",
    "two"=>"this is post two",
    "three"=>"this is post three",
    "four"=>"this is post four"];//Associative array
$val3=[
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Mg Mg","age"=>"30"],
    ["name"=>"Mya Mya","age"=>"28"],
    ["name"=>"Hla Hla","age"=>"18"],
];//Multidimensional array
var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);
echo "<hr/>";
echo $val1[0];//manual array

echo "<hr/>";
echo $val2["four"];//associative array

echo "<hr/>";
echo $val3[2] ["name"];//multidimensional array
echo "<hr/>";
foreach($val1 as $data){
    echo $data."<br/>";//manual
}
echo "<hr/>";
 echo "Ass array" ."<br>";
foreach($val2 as $key=>$value){
    echo $key."<br/>";
    echo $value."<br/>";//associative
}

echo "<hr/>";
foreach($val3 as $multi){
    foreach($multi as $single){
    echo $single."<br/>";//multidimensional array
}
}
?>