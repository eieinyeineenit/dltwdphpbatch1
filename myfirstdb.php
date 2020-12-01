<?php

//Create DB Access
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

//Connection to DB and check error
    //mysqli_connect(host,username,password,dbname);
function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    //return $db;
    //echo mysqli_connect_errno() >0 ?"Connection Error" :"Connection Success";

//beautyprint(dbconnection());
if(mysqli_connect_errno() > 0){
    //echo "Connection Error";
    die("Connection Failed");
}
else{
    return $db;
}

}
function executequery($qry){
//1 Database (Successful)
$database=dbconnection();

//2 Query (Table)
$query ="SELECT * FROM users";

//3 Connect to Database adn Query
// mysql_query("database", "query" );
$results = mysqli_query($database,$qry);
if(musqli_num_rows($results) >0){
foreach($results as $result){
    foreach($result as $key=> $value){
        echo "key is= ${key}  ". "Value is =${value}" ."<br/>";
    }
}

}
    else{
        echo "No Date";
    
}
}

executequery($query);
//echo $result["email"]."<br/>";

//dbconnection();





function beautyprint($array){
    echo "<pre>" .print_r($array,true)."</pre>";
}

?>