#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

$request = array();
$request['type'] = $_POST['type'];
$request['username'] = $_POST['username'];
$request['password'] = $_POST['password'];
$request['email'] = $_POST['email'];
$request['fname'] = $_POST['fname'];
$request['lname'] = $_POST['lname'];
$request['message'] = "HI";
$response = $client->send_request($request);
//$response = $client->publish($request);

echo json_encode($request);
echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;
?>
