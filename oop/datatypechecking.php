<?php
class datatypechecking{
    public function checktype($req){
        switch($req){
            case is_string($req);
                echo "Input value is String type"."<br/>";
                 break;
            case is_int($req);
                echo "Input value is Integer type"."<br/>";
                break;
            case is_bool($req);
                echo "Input value is Boolean type"."<br/>";
                break;
            case is_float($req);
                echo "Input value is Float type"."<br/>";
                break;
            case is_array($req);
                echo "Input value is Array type"."<br/>";
                break;
        }

    }
}
$obj=new datatypechecking();
echo "This is data type checking"."<br/>";
$obj->checktype("ma ma");
$obj->checktype(400);
$obj->checktype(true);
$obj->checktype(400.34);
$obj->checktype(["aung aung","ei ei"]);

?>
