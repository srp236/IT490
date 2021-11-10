#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require_once('login.php.inc');

function doLogin($username,$password)
{
    // lookup username in databas
    // check password
    $login = new loginDB();
    return $login->validateLogin($username,$password);
    //return false if not valid
}

function doRegister($fname,$lname,$username,$email,$password)
{
  //input new info into db
  $login = new loginDB();
  return $login->registerUser($fname,$lname,$username,$email,$password);
}

function doGetInfo($username)
{
  $login = new loginDB();
  return $login->getInfo($username);
}

function doSearch($search)
{
    // lookup username in databas
    // check password
    $login = new loginDB();
    return $login->searchItem($search);
    //return false if not valid
}

function doRecipe($dishname,$ptime,$ctime,$ingred,$instruc)
{
  $login = new loginDB();
  return $login->addRecipe($dishname,$ptime,$ctime,$ingred,$instruc);
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
      case "register":
        return doRegister($request['fname'],$request['lname'],$request['username'],$request['email'],$request['password']);
    case "getUserInfo":
      return doGetInfo($request['username']);
    case "search":
      return doSearch($request['search']);
    case "recipe":
      return doRecipe($request['dishname'],$request['ptime'],$request['ctime'],$request['ingred'],$request['instruc']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
?>
