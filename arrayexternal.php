<?php

$arr=["one","two","three","four","five"];

$name=[];//declare
$name[0]="Maung Maung";
$name[1]="Aung Aung";
$name[2]="Ko Ko";
$name[3]="Zaw Zaw";
$name[4]="Mya Mya";

echo $name[3];
echo "<hr/>";

$arr=["name"=>"Maung Maung","age"=>"25"];//associate array

$color=[];
$color["one"]="red";
$color["two"]="green";
$color["three"]="yellow";
$color["four"]="pink";
$color["five"]="blank";

echo $color["two"];
echo "<hr/>";

$arr=[
    ["name"=>"Maung Maung","age"=>"20"],//Multidimensional Array
    ["name"=>"Mya Mya","age"=>"35"]
];

$x=[];
$x[0]["name"]="Aung Aung";
$x[0]["age"]="20";
$x[1]["name"]="ei ei";
$x[1]["age"]="27";

echo $x[1]["name"]."<br/>".$x[0]["name"];
?>