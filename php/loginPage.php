<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">   
    <title>Login | レシピ </title> 

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
if(isset($_POST["login"])){
  $email = null;
  $password = null;
  if(isset($_POST["email"])){
    $email = $_POST["email"];
  }
  if(isset($_POST["password"])){
    $password = $_POST["password"];
  }
  $isValid = true;
  if(!isset($email) || !isset($password)){
   $isValid = false; 
  }
  
  if(!strpos($email, "@")){
   $isValid = false;
    echo "<br>Invalid email<br>";
  }
  if($isValid){

    $dbPasswordHash = '';
    

    
    if(password_verify($password, $dbPasswordHash)){
     echo "<br>You have succesfully logged in!<br>"; 
    }
    else{
     echo "<br>Incorrect Password.<br>"; 
    }
  }
  else{
   echo "Validation issue found"; 
  }
}
  else
		{
		
			$sql = "SELECT 
						id,
						username
					FROM
						Userstable
					WHERE
						username = '" . mysql_real_escape_string($_POST['username']) . "'
					AND
						password = '" . sha1($_POST['password']) . "'";
						
			$result = mysql_query($sql);
			if(!$result)
			{
		
				echo 'Something went wrong while signing in. Please try again.';
			
			}
			else
			{
			
				if(mysql_num_rows($result) == 0)
				{
					echo 'Invalid Password. Please try again.';
				}
				else
				{
					
					$_SESSION['signed_in'] = true;
					
				
					while($row = mysql_fetch_assoc($result))
					{
						$_SESSION['id'] 	= $row['id'];
						$_SESSION['username'] 	= $row['username'];
					}
					
					echo 'Welcome, ' . $_SESSION['username'];
				}
			}
		}
	


?>