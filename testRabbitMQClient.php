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
#$request['image'] = $_POST['image'];
$request['dishname'] = $_POST['dishname'];
$request['ptime'] = $_POST['ptime'];
$request['ctime'] = $_POST['ctime'];
$request['ingred'] = $_POST['ingred'];
$request['instruc'] = $_POST['instruc'];
$request['sessID'] = $_POST['sessID'];

$response = $client->send_request($request);
//$response = $client->publish($request);

#echo "client received response:".PHP_EOL;
#print_r($response);
echo json_encode($response);
#echo "\n\n";
#echo $argv[0]." END".PHP_EOL;
?>
