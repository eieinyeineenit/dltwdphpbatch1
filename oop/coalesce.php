<?php
function mycoal(...$var){
    echo $var[0] ?? "you are trying to print out write"."<br/>";
}
echo "this is coalesce function"."<br/>";
//mycoal("aung aung");
mycoal();
?>
