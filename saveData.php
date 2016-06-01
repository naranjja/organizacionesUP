<?php
$myfile = fopen("log.txt", "a") or die("Unable to open file!");

$externalIP=$_POST["externalIP"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];
$accuracy=$_POST["accuracy"];
$browser=$_POST["browser"];
$browserVersion=$_POST["browserVersion"];
$majorVersion=$_POST["majorVersion"];
$mobile=$_POST["mobile"];
$os=$_POST["os"];
$osVersion=$_POST["osVersion"];
$cookieEnabled=$_POST["cookieEnabled"];
$currentPage=$_POST["currentPage"];
$timestamp=$_POST["timestamp"];
$screenSize=$_POST["screenSize"];
$windowSize=$_POST["windowSize"];

$browser = $browser." ".$majorVersion." (".$browserVersion.")";
$os = $os." ".$osVersion;

$sep = ",";
$end = "\n";

fwrite($myfile, strval($externalIP));
fwrite($myfile, $sep);
fwrite($myfile, strval($latitude));
fwrite($myfile, $sep);
fwrite($myfile, strval($longitude));
fwrite($myfile, $sep);
fwrite($myfile, strval($accuracy));
fwrite($myfile, $sep);
fwrite($myfile, strval($browser));
fwrite($myfile, $sep);
fwrite($myfile, strval($mobile));
fwrite($myfile, $sep);
fwrite($myfile, strval($os));
fwrite($myfile, $sep);
fwrite($myfile, strval($cookieEnabled));
fwrite($myfile, $sep);
fwrite($myfile, strval($currentPage));
fwrite($myfile, $sep);
fwrite($myfile, strval($timestamp));
fwrite($myfile, $sep);
fwrite($myfile, strval($screenSize));
fwrite($myfile, $sep);
fwrite($myfile, strval($windowSize));
fwrite($myfile, $end);

fclose($myfile);

?>
