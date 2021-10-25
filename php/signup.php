<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">   
    <title>Register | レシピ </title> 

    <!--Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/seedling-solid.svg"/>
</head>
 
<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-md navbar-light sticky-top sticky-top shadow p-3 mb-5 bg-white rounde">

</nav>
<!--end of nav-->

<!--Footer-->
<footer class="text-center text-white sticky-bottom container-fluid footer" style="background-color: #7d9988;">
    <!-- Grid container -->
    <div class="container p-4">
    <!--common links and other infromation accessible from all pages-->
    <p> © Copyright 2021: Best IT490 Group</p>
  </div>
</footer>

</html>

<?php

  
  require "db.php";

  try 
  {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } 
  catch(PDOException $e) 
  {
    echo "Connection failed: " . $e->getMessage();
  }
  if(isset($_POST['fname'])){
    $name = $_POST['fname']; 
  }else{
      $name = "<br>fname not set in POST Method<br>";
  }
  if(!isset($_POST['lname']))
  {
    $sad = "lname not set";
  }

  //$username = $_POST['username'];
  //$email = $_POST['email'];
  //$password = $_POST['password'];


  echo $name;
  echo $sad;
  //echo $fname;

  //$query = "INSERT INTO users(fname, lname, username, email, password, created) VALUES('$fname', '$lname', '$username', '$email', '$password', NOW())";

  /*echo '<script>
  document.getElementById("signup").innerHTML = "Signup Complete";
  </script>';
  header("refresh:9; url=../html/main.html");
  exit();*/

?>