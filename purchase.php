<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_SESSION["CUID"];


 		

	
 
	$sql = "UPDATE orderprocessing SET processed_flag = '1' WHERE Customer_ID = '$name' ";
	$conn->query($sql);

	$sql1 = "SELECT Transaction_ID FROM orderprocessing WHERE Customer_ID = '$name' ";

	$result = mysqli_query($conn,$sql1);
	while ($strrow = mysqli_fetch_array($result))
	{

		  $trid = $strrow['Transaction_ID'] ;
	}


	echo "Thank you for buying from our website ;))))))))) your transaction id : $trid ";


?>
<button onclick="window.location.href = 'home.php'">  home  </button>
<?php





$conn->close();
?>

</body>
</html>