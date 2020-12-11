<?php

//Create File

// $file="fileserver/logs/test3.txt";
// $handler=fopen($file,"w");
// echo "file created";

//Read File

//Mehod 1 (Binary Data Return , limited characters)
//$file="fileserver/logs/test1.txt";
//$handler=fopen($file,"r");
//Length
//$data=fread($handler,200);
//$filesize=filesize($file);
//$data=fread($handler,$filesize);
//echo $data;


//Method 2 (String data return, No limit)

/*$file="fileserver/logs/test1.txt";
$data=file_get_contents($file);
echo $data;*/

/*$file="fileserver/logs/test2.txt";
if(file_exits($file)){

    $data=file_get_contents($file);
    echo $data;

}
else{
    echo "No file exits";
}*/

//Write
/*$file="fileserver/logs/text1.txt";
$handler=fopen($file,"w");
$message1="I Love Myanmar";
$message2="I Love Thailand";

fwrite($handler,$message);
fclose($handler);
echo "Successful write";*/

//Appending
$file="fileserver/logs/test2.txt";
$handler=fopen($file,"a");
$message1="I love Indonesia";
$message2="I love Srilanka";
fwrite($handler,$message1);
fclose($handler);
echo "Successful Appending";


?>