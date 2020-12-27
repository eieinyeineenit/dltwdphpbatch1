<?php
function myvad(...$var)
{
    // $var=["mg mg,"ma ma","ei ei"];
//    echo $var[2] . "<br/>";

    echo $var[0][1]."<br/>"; //result=ma ma
}
//    myvad("mg mg", "ma ma", "ei ei");

myvad(["mg mg","ma ma","ei ei"],"they are my friends","hay");


?>
