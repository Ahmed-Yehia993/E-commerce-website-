<?php

$quantity = $_POST['quan'];
$customer_id = $_POST['CustomerID'];
$product_id = $_POST['productid'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['update']))
{
	$sq = "select Quantity from orderprocessing where   Customer_ID = '$customer_id' and Product_ID = $product_id";
	$result = mysqli_query($conn,$sq);
	$t = mysqli_fetch_array($result);
	$temp = $t['Quantity'];
	
	$delta = $quantity - $temp;
	
	$s = "select Quantity from product where   Product_ID = $product_id";
	$res  = mysqli_query($conn,$s);
	$t1 = mysqli_fetch_array($res);
	$DataBas = $t1['Quantity'];
	
	if ($delta > 0 && $delta > $DataBas){
		echo "Out Of Stock :p";
	}
	else{
		$sql = "UPDATE orderprocessing SET Quantity = '$quantity ' WHERE Customer_ID = '$customer_id' and Product_ID = $product_id ";
		$conn->query($sql);
		$qww = $DataBas - $delta;
		$ql = "UPDATE product set Quantity = '$qww' where  Product_ID = $product_id ";
		$conn->query($ql);
		if ($qww == 0){
			$r = "UPDATE product set Visible = 0 where  Product_ID = $product_id";
			$conn->query($r);
		}
	}
	}
	elseif (isset($_POST['drop'])) {
		$sq = "select Quantity from orderprocessing where   Customer_ID = '$customer_id' and Product_ID = $product_id";
	$result = mysqli_query($conn,$sq);
	$t = mysqli_fetch_array($result);
	$temp = $t['Quantity'];
	
	$s = "select Quantity from product where   Product_ID = $product_id";
	$res  = mysqli_query($conn,$s);
	$t1 = mysqli_fetch_array($res);
	$DataBas = $t1['Quantity'];
	
	$qwss = $DataBas + $temp;
		$ql = "UPDATE product set Quantity = '$qwss' where  Product_ID = $product_id ";
		$conn->query($ql);

		$sql = "DELETE FROM orderprocessing WHERE customer_id= '$customer_id' and Product_ID = '$product_id'  ";
		$conn->query($sql);
		
	}
	$conn->close();
	header('Location: ShoppingCart.php');

?>