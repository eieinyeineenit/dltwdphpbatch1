<?php

//1 Jan 1970 UTC

date_default_timezone_set("Asia/Yangon");

$getdate=getdate();

beautyprint($getdate);


echo "this is second= "  .$getdate["seconds"]."<br/>";
echo "this is minutes= "  .$getdate["minutes"]."<br/>";
echo "this is hours= "  .$getdate["hours"]."<br/>";
echo "this is mday= "  .$getdate["mday"]."<br/>";
echo "this is wday= "  .$getdate["wday"]."<br/>";
echo "this is mon= "  .$getdate["mon"]."<br/>";
echo "this is year= "  .$getdate["year"]."<br/>";
echo "this is yday= "  .$getdate["yday"]."<br/>";
echo "this is weekday= "  .$getdate["weekday"]."<br/>";
echo "this is month= "  .$getdate["month"]."<br/>";
echo "this is 0= "  .$getdate["0"]."<br/>";

echo "<hr/>";




$time =time();
echo "this is time stamp =" .$time;

echo "<hr/>";

//date/time format
//date("format","timestamp")

// $date=date("a",$time);
echo "this is format a=" .date("a",$time);//am,pm
echo "<br/>";
$date=date("A",$time);
echo "this is format A=" .$date;//AM,PM
echo "<br/>";
$date=date("d",$time);
echo "this is format d=" .$date;//day leading zero
echo "<br/>";
$date=date("D",$time);
echo "this is format D = " .$date;//Sun/Mon
echo "<br/>";
$date=date("F",$time);
echo "this is format F = " .$date;//December/January/month with full string
echo "<br/>";
$date=date("g",$time);
echo "this is format g =" .$date;//hour by num (by 12 no leading zero)
echo "<br/>";
$date=date("G",$time);
echo "this is format G = " .$date;//hour by num (by 24hr no leading zero)
echo "<br/>";
$date=date("h",$time);
echo "this is format h = " .$date;//hour by num (by 12hr leading zero)
echo "<br/>";
$date=date("H",$time);
echo "this is format H = " .$date;//hour by num (by 24hr leading zero)
echo "<br/>";
$date=date("i",$time);
echo "this is format i =" .$date;//minutes
echo "<br/>";
$date=date("j",$time);
echo "this is format j = " .$date;//day no leading zero
echo "<br/>";
$date=date("l",$time);
echo "this is format l=" .$date;//week day with full string
echo "<br/>";
$date=date("L",$time);
echo "this is format L = " .$date;//leap year ( 1 = true , 0 = false )
echo "<br/>";
$date=date("m",$time);
echo "this is format m = " .$date;//month by number (leading zero)
echo "<br/>";
$date=date("M",$time);
echo "this is format M = " .$date;//month with head string (Dec,Jan)
echo "<br/>";
$date=date("n",$time);
echo "this is format n = " .$date;//month by num (no leading zero)
echo "<br/>";
$date=date("r",$time);
echo "this is format r = " .$date;
echo "<br/>";
$date=date("s",$time);
echo "this is format s = " .$date;//second
echo "<br/>";
$date=date("U",$time);
echo "this is format U = " .$date;//timestamp
echo "<br/>";
$date=date("y",$time);
echo "this is format y = " .$date;//Years(two digits)
echo "<br/>";
$date=date("Y",$time);
echo "this is format Y = " .$date;//Year (four digits)
echo "<br/>";
$date=date("z",$time);
echo "this is format z = " .$date;//day of year

echo "<br/>";

$df=date("H:i:s",$time);
echo $df ."<br/>";
$df=date("H-i-s",$time);
echo $df ."<br/>";
$df=date("d/m/y",$time);
echo $df ."<br/>";
$df=date("D-M-Y",$time);
echo $df ."<br/>";
$df=date("Y/m/D",$time);
echo $df ."<br/>";
$df=date("d/m/Y h:i:s",$time);
echo $df ."<br/>";




function beautyprint($arr){
    echo "<pre>" .print_r($arr,true)."</pre>";
}
// beautyprint();
?>