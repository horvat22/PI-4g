<?php

$mail = $_POST["mejl"];
$p = $_POST["http"];
$s = $_POST["https"];
$reg_mail = "/([A-Za-z]){1,5}[0-9]{1,5}@yahoo.com/";
$reg_http = "/http:..www.([0-9]){1,9}.com/";
$reg_https = "/http(s)?:\/\/www.([a-zA-Z[0-9]){1,9}\.[a-z]{2,3}/";
if (isset($mail) && preg_match($reg_mail, $mail)){
  echo "Validan"."<br>";
}
else{
  echo "Nije validan"."<br>";
}
if (isset($p) && preg_match($reg_http, $p)){
  echo "U redu"."<br>";
}
else{
  echo "nije u redu"."<br>";
}
if (isset($s) && preg_match($reg_https, $s)){
  echo "U redu"."<br>";
}
else{
  echo "nije u redu"."<br>";
}
?>
