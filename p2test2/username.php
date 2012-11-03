
<! html>

<html>
<?php


//protected $username;

function userBox(){
	return'<form method="post" action="username.php">
		Enter Username<br>
		<input type="text" name= "username">
		<input type="submit" /> <br>
		</form>
		'
		
		
//return $_REQUEST["username"];
}

/*
class user{

protected $username;
public function getUser(){
	return $this->username;
}

public function setUser($user){
	$this->username=(string)$user;
}

}

echo(new userBox

echo getUser();
*/

userBox();
?>
</html>