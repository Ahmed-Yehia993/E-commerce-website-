<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['login'] )){

$name = $_POST['username'];
$pass = $_POST['password'];

$sql= "SELECT email,password,Customer_ID FROM customer WHERE email = '$name'and password = '$pass'";


$result = mysqli_query($conn,$sql);
	
	if ($strrow = mysqli_fetch_array($result))
	{
		$_SESSION["em"] = $strrow['email'];
		$_SESSION["CUID"] = $strrow['Customer_ID'] ;
		header("Location:home.php");
	}
	else
	{
	
		header("Location:index2.html");
	}
	
}

else if(isset($_POST['loginadmin']))
{
	header("Location:loginadmin.php");
}

$conn->close();

?>



