<?php
session_start();
?>
<!DOCTYPE HTML>
<head>
<title> User Home page </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>
<style type="text/css">
	
	label{
		color: white;
	}
</style>

<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="home.php"><img src="images/ecom.png" alt="" /></a> <!-- momken a8yr el sora 
					     		-->
					</div>
						<div class="header_top_right">

					     		<label > Welcome:</label> 
					     		<label>
					     		<?php
					     		echo  $_SESSION["em"]; 
					     		?>
					     		</label>

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
  <div class="main">
      <div class="content">
    	        <div class="content_top">
    	        	<div class="wrap">
		          	   <h3>Latest Products</h3>
		          	</div>
		          	<div class="line"> </div>
		          	<div class="wrap">
		          	 <div class="ocarousel_slider">  
	      				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
			                <div class="ocarousel_window">
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                   <a href="#" title="img1"> <img src="images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
			                   <a href="#" title="img2"> <img src="images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
			                   <a href="#" title="img3"> <img src="images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
			                   <a href="#" title="img4"> <img src="images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
			                   <a href="#" title="img5"> <img src="images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
			                   <a href="#" title="img6"> <img src="images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
			                </div>
			               <span>           
			                <a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
			                <a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
			               </span>
					   </div>
				     </div>  
				   </div>    		
    	       </div>
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Browse All Categories</h3>
							      <li><a href="Clothes.php">Clothes</a></li>
							      <li><a href="technology.php">Technology</a></li>
							      <li><a href="appliance.php">Books</a></li>
						  	 </ul>
						</div>		
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Browse All Categories</h3>
    	    	 <div class="section group">
    	    	
    	    	<?php


    	    	$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "System";
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				
					$sql = "SELECT ItemName,Quantity,Item_Description,Picture,Price,Product_ID FROM product WHERE Visible = '1' ";
	
				
					$result = mysqli_query($conn,$sql);
	
					while ($strrow = mysqli_fetch_array($result))
					{
						$Product_ID = $strrow['Product_ID'];
						$_SESSION['prodic'] = $Product_ID;

						$ITname = $strrow['ItemName'];
						$_SESSION['prname'] = $ITname;
 						$quantity = $strrow['Quantity']; 
 						$Itdes = $strrow['Item_Description'];
 						$_SESSION['itdes'] = $Itdes; 
 						$pic = $strrow['Picture']; 
 						$pric = $strrow['Price']; 
 						$_SESSION['itpre'] = $pric;  
 						$strpic = "uploads/".$pic; 
 					
 						 
    	    	?>

	          
				  <div class="grid_1_of_4 images_1_of_4">
					 <h4><a href="preview.html"><?php echo $ITname; ?> </a></h4>
					  <a href="preview.html"><img src="<?php echo $strpic; ?>" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $pric;?> LE </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><button class = "mybutton" onclick="window.location.href = 'addtocart.php'">Add to shopping cart</button></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>				 
				</div>
				</div>
				<?php } ?>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

