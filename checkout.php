<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
	
</head>

<body >
<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="home.php"><img src="images/ecom.png" alt="" /></a> <!-- momken a8yr el sora 
					     		-->
					</div>
						<div class="header_top_right">

					     		<br><br>
					     		<button onclick="window.location.href = 'index.html'" class = "mybutton"> logout</button>
								<button class = "mybutton" onclick="window.location.href = 'Modify Profile.php'"> My Profile</button>
					     		<button class = "mybutton" onclick="window.location.href = 'ShoppingCart.php'"> Shopping cart</button>


					</div>
			     <div class="clear"></div>
  		    </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="home.php">Home</a>
						</li>
						<li  >
							<a href="Clothes.php">Clothes</a>
							<ul>
								<li>
									<a href="Clothes.php">Sports clothes</a>
									<ul>
										<li>
										<a href="Clothes.php">Women clothes</a>
										</li>
										<li>
										<a href="Clothes.php">Men clothes</a>
										</li>
										<li>
										<a href="Clothes.php">Children clothes</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="Clothes.php">home clothes</a>
									<ul>
										<li>
										<a href="Clothes.php">Women clothes</a>
										</li>
										<li>
										<a href="Clothes.php">Men clothes</a>
										</li>
										<li>
										<a href="Clothes.php">Children clothes</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="technology.php">technology</a>
							<ul>
								<li>
									<a href="technology.php">Laptops</a>
									
								</li>
								<li>
									<a href="technology.php">Mobiles</a>
								</li>
								<li>
									<a href="technology.php">Tablets</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="appliance.php">Books</a>
							<ul>
								<li>
									<a href="appliance.php">Computer Science</a>
									
								</li>
								<li>
									<a href="appliance.php">Novels</a>
								</li>
								<li>
									<a href="appliance.php">Science fiction</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
  		     <div class="header_bottom">
			   <div class="slider-text">
			   		<h2>Ecommerce website <br/>IT project</h2>
			   	<p>Faculty of Computers and Information<br/> Cairo University</p>
			   	
	  	      </div>
	  	      <div class="slider-img">
	  	      	<img src="images/slider-img.png" alt="" />
	  	      </div>
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>
   </div>   <!--------------- End manu-------------->
<br>
   <table width="100%" border="1">
   <tr>
   	
    <td>Customer ID</td>
   	<td>Billing Address</td>
   	<td>Billing City</td>
   	<td>Billing State </td>
   	<td>Billing Zip</td>
   	<td>Shipping Address</td>
   	<td>Shipping City</td>
   	<td>Shipping State</td>
   	<td>Shipping Zip</td>
   </tr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_SESSION["CUID"];

	$sql = "SELECT Billing_address,Billing_City,Customer_ID,Billing_State,Billing_Zip,Shipping_Address,Shipping_City,Shipping_State,Shipping_Zip FROM customer where Customer_ID = '$name '";
	

	$result = mysqli_query($conn,$sql);
	
	while ($strrow = mysqli_fetch_array($result))
	{
		$Billingaddress = $strrow['Billing_address'];
 		$BillingCity = $strrow['Billing_City']; 
 		$customer_id = $strrow['Customer_ID']; 
 		$BillingState = $strrow['Billing_State'];

 		$BillingZip = $strrow['Billing_Zip'];
 		$ShippingAddress = $strrow['Shipping_Address']; 
 		$ShippingCity = $strrow['Shipping_City']; 
 		$ShippingState = $strrow['Shipping_State']; 
 		$ShippingZip = $strrow['Shipping_Zip']; 

 		

?>

	<tr>	
      			<form method="POST" action="purchase.php">
      				<td><input type="text"  value="<?php echo $customer_id; ?>" name = "CustomerID" readonly> </input></td>
	      			<td><input type = "text"value = "<?php echo $Billingaddress; ?>" name = "productid" readonly></td>
	      			<td><input type = "text"value = "<?php echo $BillingCity; ?>" name = "productid" readonly></td>
      		 		<td><input type = "text"value = "<?php echo $BillingZip; ?>" name = "productid" readonly></td>
      		 		<td><input type = "text"value = "<?php echo $BillingState; ?>" name = "productid" readonly></td>
      		 	<!--	<td><input type = "text"value = "<?php echo $BillingCity; ?>" name = "productid" readonly></td>-->
      		 		<td><input type = "text"value = "<?php echo $ShippingAddress; ?>" name = "productid" readonly></td>
      		 		<td><input type = "text"value = "<?php echo $ShippingCity; ?>" name = "productid" readonly></td>
      		 		<td><input type = "text"value = "<?php echo $ShippingState; ?>" name = "productid" readonly></td>
      		 		<td><input type = "text"value = "<?php echo $ShippingZip; ?>" name = "productid" readonly></td>
      				<td> <button  name = "purchase" class="mybutton"  >purchase </button> </td>
      			</form>
      		</tr> 


      <br>
    
      	
      	
      	<?php

			}
      	?>

















   </table>
      	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>
     	<button class = "mybutton" onclick="window.location.href = 'ShoppingCart.php'">update any thing or review proudct  </button>
     	<br>
     	<br>
     	<br>
      	
      <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | IT Project </p>
		   </div>	
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Terms of Use</a> : </li>
		   		<li><a href="#">Privacy Policy</a> : </li>
		   		<li><a href="contact.html">Contact Us</a> : </li>
		   		<li><a href="#">Sitemap</a></li>
		   	</ul>
		   </div>		
        </div>
    </div>

</body>
</html>
