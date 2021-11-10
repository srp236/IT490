<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

$request = array();
$request['type'] = $_POST['type'];

$response = $client->send_request($request);
//$response = $client->publish($request);

#echo "client received response:".PHP_EOL;
echo json_encode($response);
#echo "\n\n";
#echo $argv[0]." END".PHP_EOL;
?>
