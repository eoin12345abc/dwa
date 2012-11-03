
<! html>

<html>


<form action="username2.php" method="post">
Username: <input type="text" name="username" />
Password: <input type="text" name="password" />
Email: <input type="text" name="email" />
<input type="submit" />
</form> 	

<?php
$user=$_REQUEST["username"];
$pass=$_REQUEST["password"];
$mail=$_REQUEST["email"];

$tempInfo = array(
"Username"=> array ($user)
"Password"=> array ($pass)
"Email"=>    array ($mail)
	)

	echo $tempinfo;
		
	
?>
</html>