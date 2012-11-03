<html>

<?php

$user=$_REQUEST["username"];
$pass=$_REQUEST["password"];
$mail=$_REQUEST["email"];


$tempInfo = array(
"Username"=> array ($user),
"Password"=> array ($pass),
"Email"=>    array ($mail)
	);

	print_r($tempInfo);
	
?>


</html>