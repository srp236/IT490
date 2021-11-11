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
/*******************************************/
function doRegister($fname,$lname,$username,$email,$password)
{
  //input new info into db
  $login = new loginDB();
  return $login->registerUser($fname,$lname,$username,$email,$password);
}
/*******************************************/
function doGetInfo($username)
{
  $login = new loginDB();
  return $login->getInfo($username);
}
/*******************************************/
function doSearch($search)
{
  $login = new loginDB();
  return $login->searchItem($search);
}
/*******************************************/
function doRecipe($dishname,$ptime,$ctime,$ingred,$instruc)
{
  $login = new loginDB();
  return $login->addRecipe($dishname,$ptime,$ctime,$ingred,$instruc);
}
/*******************************************/
function doValidate($sessionID,$username)
{
  // lookup session ID in databse
  // check if it mastches with sessid in storage
  $login = new loginDB();
  return $login->validateSession($sessionID,$username);
  //return false if not valid
}
/*******************************************/

function doSessGet($username)
{
  $login = new loginDB();
  return $login->getSessID($username);
}
/*******************************************/
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
      return doValidate($request['sessionId'],$request['username']);
    case "getSess":
      return doSessGet($request['username']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
?>
