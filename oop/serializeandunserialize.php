<?php
$myarr=["red","yellow","pink","white","black"];

echo "This is Serialize and Unserialize for array"."<br/>";

beautyprint($myarr);

//Serialize

$slz = serialize($myarr);
//var_dump($slz);
echo $slz;

$unslz = unserialize($slz);

beautyprint($unslz);

function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."<pre/>";
}

?>
<!--function beautyprint($arr){-->
<!--echo "<pre>".print_r($arr,true)."</pre>";-->
