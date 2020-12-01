<?php

$arr=["red","green","yellow","black"];
// var_dump($arr);
// echo "<hr/>";
// print_r($arr);
// echo "<hr/>";
// echo "<pre>" .print_r($arr,true) ."</pre>";
beautyprint($arr);

$arr2=["maung maung","aung aung","zaw zaw","kyaw kyaw"];
beautyprint($arr2);

//Custom Reuseable Fuction
function beautyprint($array){
    echo "<pre>" . print_r($array,true) ."</pre>";
}
$arr3=[
    ["maung maung","aung aung","zaw zaw","kyaw kyaw"],
    ["maung maung","aung aung","zaw zaw","kyaw kyaw"],
    ["maung maung","aung aung","zaw zaw","kyaw kyaw"]
    
];
beautyprint($arr3);

// $arr4=[
//     ["id"=>"1","name"=>"maung maung","age"=>27,"city"=>"mandalay"],
//     ["id"=>"2","name"=>"aung aung","age"=>27,"city"=>"mandalay"],
//     ["id"=>"3","name"=>"kaung kaung","age"=>27,"city"=>"mandalay"],
//     ["id"=>"4","name"=>"ma ma","age"=>27,"city"=>"mandalay"],
// ];
// $arrjson=json_encode($arr4);
// beautyprint($arrjson);

// $file ="myjson.json";
// if(file_exists($file)){
//     $handler=fopen($file,"r");
//     $filesize=filesize($file);
//     $fileread=fread($handler,$filesize);
//     $jsontoarray=json_decode($fileread)// Json Object to array
//    // beautyprint($jsontoarray);


//    foreach($jsonarray as $array){
//        foreach( $array as $key=>$value){
//            echo "key is ${key}"."value is ${value}"."<br/>";
//        }
//    }
// }

//Constants value
define("name","Ei Ei");
echo name;
echo "<br/>";
define("age",22);
echo age;
echo "<br/>";
define("colors",["black","red","pink"]);
echo colors[2];

echo "<hr/>"

?>