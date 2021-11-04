#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "no message set";
}

$request = array();
$request['type'] = "Login";
$request['username'] = $_POST["username"];
$request['password'] = $_POST["password"];
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

// header("Content-type: text/plain");
// $username = $_POST["username"];
// $password = $_POST["password"];
// echo ":: data received via GET ::\n\n";
// echo $username + "sned";
// echo $password + "sned";


?>