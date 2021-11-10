<?php

class loginDB
{
private $logindb;

public function __construct()
{
	$this->logindb = new mysqli("127.0.0.1","shy","pass","IT490");

	if ($this->logindb->connect_errno != 0)
	{
		echo "Error connecting to database: ".$this->logindb->connect_error.PHP_EOL;
		exit(1);
	}
	echo "correctly connected to database".PHP_EOL;
}

public function validateLogin($username,$password)
{
	$un = $this->logindb->real_escape_string($username);
	$pw = $this->logindb->real_escape_string($password);
	$statement = "select * from users where username = '$un'";
	$response = $this->logindb->query($statement);

	while ($row = $response->fetch_assoc())
	{
		echo "checking password for $username".PHP_EOL;
		if ($row["password"] == $pw)
		{
			echo "passwords match for $username".PHP_EOL;
			return 1;// password match
		}
		echo "passwords did not match for $username".PHP_EOL;
	}
	return 0;//no users matched username
}

public function registerUser($fname,$lname,$username,$email,$password)
{
	$fna = $this->logindb->real_escape_string($fname);
	$lna = $this->logindb->real_escape_string($lname);
	$un = $this->logindb->real_escape_string($username);
	$ema = $this->logindb->real_escape_string($email);
	$pass = $this->logindb->real_escape_string($password);
	$statement = "insert into users(fname,lname,username,email,password) values('$fna','$lna','$un','$ema','$pass')";
	$response = $this->logindb->query($statement);

	echo "data inputed".PHP_EOL;
	return 1;//successful
}

public function getInfo()
{
	$statement = "select * from users";
	$response = $this->logindb->query($statement);
	return $response;
}

public function searchItem($search)
{
	$ser = $this->logindb->real_escape_string($search);
}

public function addRecipe($dishname,$ptime,$ctime,$ingred,$instruc)
{
	#$img = $this->logindb->real_escape_string($image);
	$dname = $this->logindb->real_escape_string($dishname);
	$pt = $this->logindb->real_escape_string($ptime);
	$ct = $this->logindb->real_escape_string($ctime);
	$ingr = $this->logindb->real_escape_string($ingred);
	$instr = $this->logindb->real_escape_string($instruc);
	$statement = "insert into recipe(dishname,ptime,ctime,ingred,instruc) values('$dname','$pt','$ct','$ingr','$instr')";
	$response = $this->logindb->query($statement);

	echo "data inputed".PHP_EOL;
	return 1;//successful
}

public function validateSession($sessionID)
{
    $sess = $this->logindb->real_escape_string($sessionID);
    $statement = "SELECT * FROM userSess where sessID = '$sess'";
    $response = $this->logindb->query($statement);
}
}
?>
