<?php

//params called here must refer to params in XHR send request
// i.e when calling username must say uname

if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";
switch ($request["username"])
{
	case "shy":
		$response = "user recieved";
		// $response = "login, yeah we can do that";
	break;
}
echo json_encode($request);
exit(0);

?>