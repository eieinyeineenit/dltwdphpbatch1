<?php

$myarr1 =["red","blue","white","black","yellow"];//manual arr

function myfun($value,$key){
    echo "key is = ${key} and value is = ${value}"."<br/>";
}

echo "This is array walk by manual array"."<br/>";
array_walk($myarr1,"myfun");
echo "<hr/>";

$myarr2= ["name"=> "aung aung","age"=>"30","city"=> "mandalay","phone"=>"12345678"];//Associate arr
echo "This is array walk by associate array"."<br/>";
array_walk($myarr2,"myfun");
echo "<hr/>";

$myarr3 = [
    ["name"=> "aung aung","age"=>"30","city" => "mandalay","phone"=>"12345678"],
    ["name"=> "kyaw kyaw","age"=>"30","city"=> "mandalay","phone"=>"12345678"],
    ["name"=> "zaw zaw","age"=>"30","city"=> "mandalay","phone"=>"12345678"]
];//multidimensional array

function myfun2($val,$key){
    foreach($val as $key=>$value){
        echo "Key is =${key} and Value is ${value}"."<br/>";
    }
}

echo "This is array walk by multidimensional array"."<br/>";
array_walk($myarr3,"myfun2");

?>
