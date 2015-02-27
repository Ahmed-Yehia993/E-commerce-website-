<?php
session_start();

$prid = $_SESSION['prodic'];
$name = $_SESSION["CUID"];
$itname = $_SESSION['prname'];
$itdes = $_SESSION['itdes'];
$pric = $_SESSION['itpre'] ; 

echo $prid . $name . $itname . $itdes . $pric;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO orderprocessing values(NULL,'$name','$prid','1','$itname','$itdes','$pric',NULL,NULL,NULL,'0','0') ";

$s = "select Quantity from product where Product_ID = '$prid' ";
	$res  = mysqli_query($conn,$s);
	$t1 = mysqli_fetch_array($res);
	$DataBas = $t1['Quantity'];
	 
	$DataBas = $DataBas - 1;
	
	$ql = "UPDATE product set Quantity = '$DataBas' where  Product_ID = '$prid' ";
		$conn->query($ql);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location:ShoppingCart.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn -> close();



?>