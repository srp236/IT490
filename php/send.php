<?php

$url = "http://www.recipe.com/IT490/testRabbitMQClient.php";
//$request = $_POST;
$username = $_POST['username'];	
$password = $_POST['password'];	

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$header = array(
	"Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = $_POST;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);


//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);


//params called here must refer to params in XHR send request
// i.e when calling username must say uname
// if (!isset($_POST))
// {
// 	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
// 	echo json_encode($msg);
// 	exit(0);
// }
// if (isset($_POST))
// {
// 	
// $response = "unsupported request type, politely FUCK OFF";
// switch ($request["username"])
// {
// 	case "shy":
// 		$response = "user recieved";
// 		// $response = "login, yeah we can do that";
// 	break;
// }
echo json_encode($resp);
exit(0);

?>