<?php
class returndatatype{
    public function stroutput($req) : string{
    echo "original req"."<br/>";
    var_dump($req);

    echo "<br/>";
    echo "Return Output";
    return $req;
    }

    public function intoutput($req) : int{
        echo "original req"."<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return Output";
        return $req;
    }

    public function booloutput($req) : bool{
        echo "original req"."<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return Output";
        return $req;
    }


}

$obj=new returndatatype();
echo "This is return Data type"."<br/>";
//$test = $obj->stroutput("aung aung");
//$test = $obj->stroutput("aung aung");
//$test = $obj->stroutput("aung aung");
//var_dump($test);

//$test = $obj->intoutput("aung aung");
//$test = $obj->intoutput("aung aung");
//$test = $obj->intoutput("aung aung");
//var_dump($test);

//$test = $obj->booloutput("aung aung");
//$test = $obj->booloutput("aung aung");
//$test = $obj->booloutput("aung aung");
//var_dump($test);




?>
