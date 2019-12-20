<?php
$tekst = $_GET["unos"];
$file = fopen("datoteka.txt","a+");
fwrite($file,$tekst . "\r\n");
fclose($file);
$ispis = fopen("datoteka.txt", "r");
echo $ispis;
fclose($ispis);
?>