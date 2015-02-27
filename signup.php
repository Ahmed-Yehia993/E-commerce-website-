
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);



$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$email = $_POST['email'];
$PS = $_POST['PW'];
$ph = $_POST['phone'];
$Saddress = $_POST['SHaddress'];
$Scity = $_POST['SHcity'];
$Sstate = $_POST['SHstate'];
$Szip = $_POST['SHzip'];
$baddress = $_POST['Baddress'];
$bcity = $_POST['Bcity'];
$bstate = $_POST['Bstate'];
$bzip = $_POST['Bzip'];


if(strlen($fname) > 0 && strlen($lname) >0 && strlen($email) > 0 && strlen($PS) > 0 && strlen($ph) > 0 
	&& strlen($Saddress) > 0 && strlen($Scity) > 0 && strlen($Sstate) > 0 && strlen($Szip) > 0 && strlen($baddress) > 0 
	&& strlen($bcity) > 0 && strlen($bstate) > 0 && strlen($bzip) > 0      ){

	$sql = "INSERT INTO customer (Customer_ID,firstname, lastname, Billing_address,Billing_City,Billing_State,Billing_Zip,Shipping_Address
					,Shipping_City,Shipping_State,Shipping_Zip,Phone,email,password)
	VALUES (NULL, '$fname', '$lname','$baddress','$bcity','$bstate','$bzip','$Saddress','$Scity','$Sstate','$Szip','$ph','$email','$PS')";
	

		if ($conn->query($sql) === TRUE) {
	    echo "thank you for sign up in our website";
	    header("Location:index.html");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else
{
	echo "there is somthing wrong check your input ";
}
$conn->close();


?>
