<?php

$login="trylog";
$username="tryuse";
$password="trypass";

$url="http://www.recipe.com/IT490/testRabbitMQClient.php";
 
$data = array("type" => $login, "username" => $username, "password" => $password);
$ch = curl_init($url);
# Setup request to send json via POST.
$payload = json_encode($data);
 
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo json_encode($data);

echo json_encode($result);
?>