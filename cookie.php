<?php

// 1 Jan 1970
//$time = time();
//echo $time;

//Cookie
//setcookie(name,value,expire time,path,domain,security);



//function setmycookie(){
  //  return setcookie("job1","we have to hire programmer",time()+3600,"/","",0);
//}
//setmycookie();
//echo "successful cookie";

function deletecookie(){
    if(isset($_COOKIE["job1"])){
        return setcookie ("job1","",time()-3600,"/","",0);
    
    }
    else{
        echo "There is no cookie sir";
    }
}
//deletecookie();

function getmycookie(){
    if(isset($_COOKIE[]))
}

?>