<?php
class datatypecasting{

    public function typecastingbyint(int $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbystring(string $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbybool(bool $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbyarray(array $req){
        echo "<pre>".print_r($req,true)."</pre>";
        var_dump($req);
    }
}

$obj = new datatypecasting();

//$obj->typecastingbyint(40.9);
//$obj->typecastingbyint("aung aung");
//$obj->typecastingbyint(NULL);
//$obj->typecastingbyint(FALSE);


//$obj->typecastingbystring(40.9);
//echo "<br/>";
//$obj->typecastingbystring("aung aung");
//echo "<br/>";
//$obj->typecastingbystring(NULL);
//echo "<br/>";
//$obj->typecastingbystring(FALSE);


//$obj->typecastingbybool(40.9);
//echo "<br/>";
//$obj->typecastingbybool("a");
//echo "<br/>";
////$obj->typecastingbybool(NULL);
//echo "<br/>";
//$obj->typecastingbybool(TRUE);

//$obj->typecastingbyarray(40.9);
echo "<br/>";
//$obj->typecastingbyarray("a");
echo "<br/>";
$obj->typecastingbyarray(["aung","Kyaw"]);

echo "<hr/>";
?>