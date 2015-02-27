<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Admin functionality</title>
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
						<a href="adminFunctionalty.html"><img src="images/ecom.png" alt="" /></a> <!-- momken a8yr el sora 
					     		-->
					</div>
						
			     <div class="clear"></div>
  		    </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="adminFunctionalty.html">Home</a>
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
 
	   <form name = "myform" Action = "UdateCustomerInfo.php" method = "POST" >
			<input name="id" method = "post">
			<button  name = "su"> update </button>
		</form>  
		
		<table style="width:100%"  border = "5">
		<tr> 
			<td> Customer ID </td>
			<td> First Name </td>
			<td> Last Name </td>
			<td> Billing address </td>
			<td> Billing City </td>
			<td> Billing State </td>
			<td> Billing Zip </td>
			<td> Shipping Address </td>
			<td> Shipping City </td>
			<td> Shipping State </td>
			<td> Shipping Zip </td>
			<td> Phone </td>
			<td> Password </td>
			<td> E-mail </td>
		</tr>
		<?php 
			$con = mysqli_connect("localhost","root","","system");
			$sql = "select * from customer ";					
			$result = mysqli_query($con,$sql);
			while($strrow = mysqli_fetch_array($result)){ 
					?>
					<tr>
					<td><?php echo $strrow['Customer_ID'];?></td>
					<td><?php echo $strrow['firstname'];?></td>
					<td><?php echo $strrow['lastname'];?></td>		
					<td><?php echo $strrow['Billing_address'];?></td>
					<td><?php echo $strrow['Billing_City'];?></td>
					<td><?php echo $strrow['Billing_State'];?></td>		
					<td><?php echo $strrow['Billing_Zip'];?></td>
					<td><?php echo $strrow['Shipping_Address'];?> </td>
					<td><?php echo $strrow['Shipping_City'];?> </td>
					<td><?php echo $strrow['Shipping_State'];?> </td>
					<td><?php echo $strrow['Shipping_Zip'];?> </td>
					<td><?php echo $strrow['Phone'];?> </td>
					<td><?php echo $strrow['password'];?> </td>
					<td><?php echo $strrow['email'];?> </td>
					</tr>
				<?php					
			}
			?>
			</table>	
			
		
<!--<form><input type="button" value="Put Your Text Here" onClick="window.location.href='http://www.hyperlinkcode.com/button-links.php'"></form>-->

       <!------------Start Footer ------------>
     <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | IT project </p>
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

