<?php

$to = "eiei@localhost";
$subject="Happy Birthday";
$message="Lorem Ipsum is simply dummy text of the printing and";
$header="From:sale@dlt.com\r\n";
$header .= "Content-Type:text/html";


//Single Send/Multi Send

function sendmail($to,$subject,$message,$header){
    $mail = mail($to,$subject,$message,$header);
if($mail){
    echo "Send Successful";

}else{
    echo "Send Failed";
}

}
sendmail($to,$subject,$message,$header)

// $myarrs = [
//     ["id"=>1,"email"=>"aungaung@localhost","password"=>"lfjaljfal"],
//     ["id"=>2,"email"=>"maungmaung@localhost","password"=>"lfjaljfal"],
//     ["id"=>3,"email"=>"susu@localhost","password"=>"lfjaljfal"],
//     ["id"=>4,"email"=>"myamya@localhost","password"=>"lfjaljfal"],
// ];
// echo count($myarrs);
// Multi Send
// foreach($myarrs as $data){
//     $to = $data["email"];
//     sendmail($to,$subject,$message,$header);
// }


?>

<!-- mail(to,subject,message,header,parameter);//must be to subj mess header parameter/option parameter
to = who ?
subject = title
message = descriptions (text/plain or <textarea name="" id="" cols="30" rows="10"></textarea>/html)
header = from (text/plain or text/html)
parameter = reply / forward -->