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
// function updatesingle($id,$email,$password){
//     $database=dbconnection();
//     // $query="UPDATE users SET email='abc@gmail.com',password='789245' WHERE id=$id";
//     $query="UPDATE users SET email='$email',password='$password' WHERE id=$id";
//     $result=mysqli_query($database,$query);


//     if($result){
//         echo "Updated ID number" .$id;
//     }
// }

// updatesingle(1,"myaung myaung@gmail.com","789456");

function changesingle($id,$password){
    $database=dbconnection();
    // $query="UPDATE users SET email='abc@gmail.com',password='789245' WHERE id=$id";
    $query="UPDATE users SET password='$password' WHERE id=$id";
    $result=mysqli_query($database,$query);


    if($result){
        echo "Updated ID number" .$id;
    }
}

changesingle(9,"199877");


function beautyprint($arr){
    echo "<pre>" .print_r($arr,true)."</pre>";
}

?>