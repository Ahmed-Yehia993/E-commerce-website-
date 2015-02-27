<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";

$fnam = $_POST['fname'];
$lnam = $_POST['lname'];
$phone = $_POST['pnumber'];
$pass = $_POST['password'];

$name = $_SESSION["CUID"];

$conn = new mysqli($servername, $username, $password, $dbname);
if(strlen($fnam) > 0 && strlen(lnam) > 0 && strlen($pass)>0){

$sql = "UPDATE Customer 
					SET firstname = '$fnam' 
					, lastname = '$lnam'  
					, Phone = '$phone'
					, Password = '$pass'
					WHERE Customer_ID = '$name' ";					
			$result = mysqli_query($conn,$sql);
echo "Change Success";


  header("Location:Modify Profile.php");

}
else {
	echo "you can't leave filed empty !!!!!!";
	header("Location:Modify Profile.php");
}

?>