<?php

if(!isset($_GET['cyber'])){

highlight_file("index.php");

exit;
}
$blacklist = array('7z','ab','ar','as','cc','cp','dd','df','du','ex','gc','gs','m4','id','ip','jq','ld','ln','mt','mv','nc','nl','nm','pr','ps','qr','r2','rb','ri','rm','rq','rx','rz','sb','sg','sh','ss','su','sx','sz','tr','ul','vi','wc','xz');

$pass = true;

foreach ($blacklist as $blackItem){
    
    if(strpos($_GET['cyber'],$blackItem) !==  false)

    {    
        $pass = false;
        break;
    }

}
if(!$pass){
    echo ("Hacking attempt detected ! Go Away ! <br>");    
    highlight_file("index.php");
    exit;
}

if (strlen($_GET['cyber'])< 5){

    echo (shell_exec($_GET['cyber']));
}
else{
   echo "please enter cmd !";
}
?>
