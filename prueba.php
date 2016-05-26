<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
//$txt = "Mickey Mouse\n";
//fwrite($myfile, $txt);
//$txt = "Minnie Mouse\n";
//fwrite($myfile, $txt);
//fwrite($myfile,123);
$ip=$_POST["ip"].",";
$latitude=$_POST["latitude"].",";
$longitude=$_POST["longitude"].",";
$accuracy=$_POST["accuracy"].",";

$sistemaOperativo=$_POST["sistemaOperativo"].",";
$navegador=$_POST["navegador"].",";
$mobil=$_POST["mobil"].",";
$galleta=$_POST["galleta"].",";
$fecha=$_POST["fecha"]."termina csm";


//$latitude=$_POST["latitude"]."";
//$longitude=$_POST["longitude"]."";
//$accuracy=$_POST["accuracy"]."";
fwrite($myfile, strval($ip));
fwrite($myfile, strval($latitude));
fwrite($myfile, strval($longitude));
fwrite($myfile, strval($accuracy));

fwrite($myfile, strval($sistemaOperativo));
fwrite($myfile, strval($navegador));
fwrite($myfile, strval($mobil));
fwrite($myfile, strval($galleta));
fwrite($myfile, strval($fecha));


fclose($myfile);

?>
