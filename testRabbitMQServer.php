#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require_once('login.php');

function doLogin($username,$password)
{
    //connect to database
    $login = new loginDB();
    return $login->validateLogin($username,$password);
    //if the connect is successful, lookup username in database and check password

    $login->validateLogin($username,$password);
    return true;
  
    //if password is invalid return false
    return false;

}

function doValidate($sessionId)
{
  //validate the session ID by checking the database table
  $username = $_POST['username'];
  $query = "SELECT sessionID from token WHERE username = $username";
  if(' ' == $sessionId)
  {
    return true;
  }
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

echo "testRabbitMQServer BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "testRabbitMQServer END".PHP_EOL;
exit();
?>









