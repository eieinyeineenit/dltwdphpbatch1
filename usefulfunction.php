<?php
 
 //Default Function

 //Number Format
 $num =1230000;
 echo number_format($num);
 echo "<br/>";
 echo number_format($num,"3");
 echo "<br/>";
 echo number_format($num,"0",".","-");
 echo "<br/>";

//chunk-split (String type - Serial number)
$b= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever";
$ph="09987654321";
echo chunk_split($b,5,"/");
echo "<br/>";
echo chunk_split($ph,3,"-");
echo "<br/>";

//lcfirst
echo lcfirst("This is lcfirst=Lorem Ipsum is simply dummy text of the printing and testing industory");
echo "<br/>";

//ucwords
echo ucwords("This is ucwords =Lorem Ipsum is simply dummy text of the printing and testing industory");
echo "<br/>";

echo strtoupper("This is strtoupper =Lorem Ipsum is simply dummy text of the printing and testing industory");
echo "<br/>";

echo strtolower("This is strtolower =Lorem Ipsum is simply dummy text of the printing and testing industory");
echo "<br/>";

$name=" / Aung Aung / ";
echo strlen($name);
echo "<br/>";

echo $name;
echo "<br/>";

//trim
echo trim($name);
echo "<br/>";
echo strlen(trim($name));
echo "<br/>";
echo trim ("/ Aung Aung / Maung Maung / Kyaw Kyaw", "/");
echo "<br/>";

//ltrim left
echo strlen(ltrim($name));
echo "<br/>";
echo ltrim("/ Aung Aung /","/");
echo "<br/>";



echo strlen(rtrim($name));
echo "<br/>";
echo rtrim("/ Aung Aung /","/");
echo "<br/>";

// Start CRYPT

//SHA1 true= raw 20 chars binary format , false =raw 40 chars hax number
$password="123456";
echo sha1($password);
echo "<br/>";
echo sha1($password,true);
echo "<br/>";
echo sha1($password,false);
echo "<br/>";

// ND5 true =raw 16 chars binary format, false =raw 32 chars hax number 
echo md5($password);
echo "<br/>";
echo md5($password,true);
echo "<br/>";
echo md5($password,false);
echo "<br/>";

//Crypt hashed codes string DES Data Encryption Standard
echo crypt($password,false);


echo md5(sha1(crypt($password,"dlt")));
echo "<br/>";

$z="I love mandalay because mandalay is my hometown.";
echo strpos($z,"is");
echo "<br/>";

echo strrpos($z,"mandalay");
echo "<br/>";


echo stripos($z,"Mandalay");
echo "<br/>";

echo strripos($z,"Mandalay");
echo "<br/>";

echo str_word_count($z);
echo "<br/>";

echo substr_replace("hello world","Mandalay",6);
echo "<br/>";

//Array as object
$myarr =["name"=> "Maung Maung", "age"=>20,"address"=>"mandalay","phone"=>"09987654321"];
echo json_encode($myarr);

$myarr2 =[
    ["name"=> "Maung Maung", "age"=>20,"address"=>"mandalay","phone"=>"09987654321"],
["name"=> "Maung Maung", "age"=>20,"address"=>"mandalay","phone"=>"09987654321"],
["name"=> "Maung Maung", "age"=>20,"address"=>"mandalay","phone"=>"09987654321"]];
echo json_encode($myarr2);


