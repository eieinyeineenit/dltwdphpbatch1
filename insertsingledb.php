<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()>0){
        die("Conncetion Failed");
    }else{
        return $db;
    }
}

//$query = "INSERT INTO users VALUES(0,'yuyu@gmail.com','123456','29-11-2020')";
$query ="INSERT INTO users(email,password,created_at) VALUES ('hlahla@gmail.com','123456','29-11-2020')";
function sginsert($qry)
{
$database = dbconnection();
$result = mysqli_query($database,$qry);

$newroleid= mysqli_insert_id($database);
if($newroleid >0){
    echo"Single Data Insert Successfully. New role id is ${newroleid}";
}else{
    echo "Insert Failed";
}


// if(mysqli_insert_id($database) > 0){
//     echo "Single Data Insert Successfully";
// }else{
//     echo "Insert Failed";
// }

//beautyprint($database);
}
sginsert($query);

function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}


?>