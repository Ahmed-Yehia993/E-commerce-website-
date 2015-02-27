<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title> Project IT </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="js/star-rating.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="adminFunctionalty.php"><img src="images/ecom.png" alt="" /></a> <!-- momken a8yr el sora 
					     		-->
					</div>
						<div class="header_top_right">

					     		


					</div>
			     <div class="clear"></div>
  		    </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="adminFunctionalty.php">Home</a>
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
	   <h2>Update Customer</h2>
	   <?php
			if (isset($_POST['submit']))
			{
			$idd = $_POST['id'];
			$fnam = $_POST['fnam'];
			$lnam = $_POST['lnam'];
			$badd = $_POST['badd'];
			$bcity = $_POST['bcity'];
			$bstate = $_POST['bstate'];
			$bzip = $_POST['bzip'];
			$sadd = $_POST['sadd'];
			$scity = $_POST['scity']; 
			$sstate = $_POST['sstate'];
			$szip = $_POST['szip'];
			$phone = $_POST['phone'];
			$pass = $_POST['pass'];
			// Validation
			
			// Update
			$con = mysqli_connect("localhost","root","","system");
			$sql = "UPDATE Customer 
					SET firstname = '$fnam' 
					, lastname = '$lnam' 
					, Billing_address = '$badd' 
					, Billing_City = '$bcity'	
					, Billing_State = '$bstate' 
					, Billing_Zip = '$bzip'
					, Shipping_Address = '$sadd' 
					, Shipping_City = '$scity' 
					, Shipping_State = '$sstate'	
					, Shipping_Zip = '$szip' 
					, Phone = '$phone'
					, Password = '$pass'
					WHERE Customer_ID = '$idd' ";					
			$result = mysqli_query($con,$sql);
			//header('Location: StorePage.html'); 
			//header('Location: /Insert.php'); 
			} else {
			$idd = $_POST['id'];
			$con = mysqli_connect("localhost","root","","system");
			$sql = "select * from customer  WHERE Customer_ID = '$idd' ";					
			$result = mysqli_query($con,$sql);
			$strrow = mysqli_fetch_array($result);
					echo "Customer Email " .  $strrow['email'];
					$fnam = $strrow['firstname'];
					$lnam = $strrow['lastname'];
					$badd = $strrow['Billing_address'];
					$bcity = $strrow['Billing_City'];
					$bstate = $strrow['Billing_State'];
					$bzip = $strrow['Billing_Zip'];
					$sadd = $strrow['Shipping_Address'];
					$scity = $strrow['Shipping_City'];
					$sstate = $strrow['Shipping_State'];
					$szip = $strrow['Shipping_Zip'];
					$phone = $strrow['Phone'];
					$pass = $strrow['password'];
				
			}
		?>
<form name = "myform" ACTION = "UdateCustomerInfo.php" method = "POST" > 
		Customer ID: <input name = "id" value = "<?php echo (isset($idd))?$idd:'';?>" type="hidden"> <?php echo (isset($idd))?$idd:'';?> </br>
       	First Name:<input name="fnam" type="text" method = "post"  value = "<?php echo (isset($fnam))?$fnam:'';?>" >
       	</br>
       	Last Name:<input name="lnam" type="text" method = "post" value = "<?php echo (isset($lnam))?$lnam:'';?>">
       	</br>
       	Billing Address:<input name="badd" type="text" method = "post" value = "<?php echo (isset($badd))?$badd:'';?>">
       	</br>
       	Billing City:<input name="bcity" type="text" method = "post" value = "<?php echo (isset($bcity))?$bcity:'';?>">
       	</br>
       	Billing State:<input name="bstate" type="text" method = "post" value = "<?php echo (isset($bstate))?$bstate:'';?>">
       	</br>
       	Billing Zip:<input name="bzip" type="text" method = "post" value = "<?php echo (isset($bzip))?$bzip:'';?>">
       	</br>
       	Shipping Address:<input name="sadd" type="text" method = "post"  value = "<?php echo (isset($sadd))?$sadd:'';?>" >
       	</br>
       	Shipping City:<input name="scity" type="text" method = "post" value = "<?php echo (isset($scity))?$scity:'';?>">
       	</br>
       	Shipping State:<input name="sstate" type="text" method = "post" value = "<?php echo (isset($sstate))?$sstate:'';?>">
       	</br>
       	Shipping Zip:<input name="szip" type="text" method = "post" value = "<?php echo (isset($szip))?$szip:'';?>">
       	</br>
       	Phone:<input name="phone" type="text" method = "post" value = "<?php echo (isset($phone))?$phone:'';?>">
       	</br>
       	Password:<input name="pass" type="password" method = "post" value = "<?php echo (isset($pass))?$pass:'';?>">
       	</br>
		<button name = "submit" type = "submit"> Update </button>
       	 
	<input type="button" value="Back" onClick="window.location.href='CustomerAccountsPage.php'">
		</form>
       <!------------Start Footer ------------>
     <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
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
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
       <script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>

