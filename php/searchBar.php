<?php


//include "connect.php";

function OpenCon()
{
$servername = "mysql";
$username = "md523";
$password = "password";
$dbname = "IT490";

//this creates the connection
$conn = mysqli_connect($mysql, $username, $password, $dbname) or die("Connect failed: %s/m". -> error);

return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

$api_url = 'https://www.themealdb.com/api/json/v1/1/search.php?s=Arrabiata'
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;

//this is used if we want to have only 10 records shown
//$user_data = array_slice($user_data, 0, 9);


// debugging
//print_r($user_data);

$sql = "CREATE TABLE RecipeAPI
(
    RecipeID int NOT NULL AUTO_INCREMENT,
    RecipeName varchar(50),
    Ingredients varchar(50),
    PRIMARY KEY (RecipeID)


)";

foreach ($user_data as $user) {
	echo "Recipe name: ".$user->RecipeName;
	echo "<br />";
	echo "name: ".$user->Ingredients;
	echo "<br /> <br />";
}

mysql_select_db("RecipeAPI.sql" or die (mysql_error()));

$result = mysql_query("SELECT * FROM RecipeAPI where RecipeName ='$RecipeID' ");

?>

<!DOCTYPE html>
<html>
<head>
<title> Search Results</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>RecipeID</td>
<td>RecipeName</td>
<td>Ingredients</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($RecipeAPI)) {
?>
<tr>
    <td><?php echo $row["RecipeID"]; ?></td>
    <td><?php echo $row["RecipeName"]; ?></td>
    <td><?php echo $row["Ingredients"]; ?></td>
</tr>
<?php
    $i++;
}
?>
    </table>
        </body>
</html>




?>
