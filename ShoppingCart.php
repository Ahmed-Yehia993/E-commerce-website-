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
<!--
<style type="text/css">
	body
	{
		padding-top: 50px;
		padding-left: 50px;
		padding-right: 250px;
	}

</style>-->
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
   <!------------End Header ------------>
   </div>
   <table width="100%" border="5">
   <tr>
   	
   	<td>Customer ID</td>
   	<td>Product ID</td>
   	<td>Quantity</td>
   	<td>Time </td>
   </tr>


<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_SESSION["CUID"]; 

	$dele = "select Quantity , Product_ID , Transaction_ID  from orderprocessing where date_time < ( now() - INTERVAL 2 MINUTE ) and processed_flag = 0";
	$roro= mysqli_query($conn,$dele);
	while($toto = mysqli_fetch_array($roro)){
	$temp = $toto['Quantity'];
	$product_id = $toto['Product_ID'];
	$trans = $toto['Transaction_ID'];
	
	$s = "select Quantity from product where   Product_ID = $product_id";
	$res  = mysqli_query($conn,$s);
	$t1 = mysqli_fetch_array($res);
	$DataBas = $t1['Quantity'];
	
	$qwss = $DataBas + $temp;
	$ql = "UPDATE product set Quantity = '$qwss' where  Product_ID = $product_id ";
	$conn->query($ql);
	
	$r = "UPDATE product set Visible = 1 where  Product_ID = $product_id";
	$conn->query($r);

	$sql1 = "DELETE FROM orderprocessing WHERE Transaction_ID = '$trans'" ;
	mysqli_query($conn,$sql1);
}

	$sql = "SELECT Product_ID,Quantity,Customer_ID,date_time FROM orderprocessing where Customer_ID = '$name'  ";
	

	$result = mysqli_query($conn,$sql);
	
	while ($strrow = mysqli_fetch_array($result))
	{
		$product_id = $strrow['Product_ID'];
 		$quantity = $strrow['Quantity']; 
 		$customer_id = $strrow['Customer_ID']; 
 		$time = $strrow['date_time']; 


?>



      			
      		<tr>	
      			<form method="POST" action="updateorder.php">
      				<td><input type="text"  value="<?php echo $customer_id; ?>" name = "CustomerID" readonly> </input></td>
	      			<td><input type = "text"value = "<?php echo $product_id; ?>" name = "productid" readonly></td>
      				<td ><input type = "number" value = "<?php echo $quantity; ?>" name = "quan" min = "1" max = "10"> </input></td>
      		 		<td> <?php echo $time; ?></td>
      				<td> <button  name = "update" class="mybutton"  >update</button> </td>
      				<td> <button name = "drop" class="mybutton" >drop</button> </td>
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
     	<button class = "mybutton" onclick="window.location.href = 'checkout.php'">Check Out</button>
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
