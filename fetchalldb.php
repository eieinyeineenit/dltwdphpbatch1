<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");


function dbconnection(){
    $db= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() >0)
    {
        die("Connection Failed");
    }
    else{
        return $db;
    }
}


//Query
$query ="SELECT * FROM users ";
// $query ="SELECT  FROM users WHERE id!=5";
//$query ="SELECT  FROM users WHERE id=5";
// $query ="SELECT  FROM users WHERE id>5";
//  $query ="SELECT  FROM users WHERE id<5";

// $query = "SELECT * FROM users ORDER BY id DESC";
// $query = "SELECT * FROM users ORDER BY email DESC";
// $query = "SELECT * FROM users ORDER BY email ASC";
// $query = "SELECT * FROM users ORDER BY id ASC";
// $query ="SELECT * FROM users WHERE id < 5 ORDER BY id DESC";

function executequery($qry){
    $database =dbconnection();
    $results=mysqli_query($database,$qry);

// For each Loop
    if(mysqli_num_rows($results) > 0){
        foreach($results as $result){
            echo "key is ${result['id']}" ." ". "Email is ${result['email']}";
            echo "<br/>";
        }

    }else{
        echo "no data";
    }
 }

// While Loop
// if(mysqli_num_rows($results) >0){


//    while($row = mysqli_fetch_assoc($results)){
//        echo "Email is " . $row["email"]."<br/>";
//    }

// }else {
//     echo "No Data";
// }

//For Loop

// 

// if(mysqli_num_rows($results) > 0){
//     $k =0;
//     $numrow =
// }
// }
 executequery($query);

function beautyprint($arr){
    echo "<pre>" .print_r($arr,true)."</pre>";
}

?>