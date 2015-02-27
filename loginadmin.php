<!DOCTYPE html>
<html>
<head>
	<title>
		Admin log in form 
	</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
<script src="js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
</head>

<body>
<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/ecom.png" alt="" /></a> <!-- momken a8yr el sora 
					     		-->
					</div>




<div class="clear"></div>
  		    </div>     
  		    
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

<br><br>

<form action="loginadmin.php" method="POST">
	<center>
	username : <input type = "text" name = "adminusername"><br><br>
	password : <input type = "password" name = "adminpassword"><br><br>

	<button class = "mybutton" name = "login">ADMIN LOG IN  </button><br>
</center>
</form>

<?php
if(isset($_POST['login'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['adminusername'];
$pass = $_POST['adminpassword'];
// WHERE username = '$name'and password = '$pass'

$sql= "SELECT password,username FROM admin";

$result = mysqli_query($conn,$sql);
	
	while ($strrow = mysqli_fetch_array($result))
	{
		if($strrow['username'] == $name && $strrow['password'] == $pass)
		{

			header("Location:adminFunctionalty.html");
			echo "helooooo";
			//echo $_SESSION["em"];
		}
		else
		{
	
			echo "wrong user name or password";
		}
	}
	
}

?>
   
<div class="clear"></div>
  
   <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | IT project</a> </p>
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
</html>s