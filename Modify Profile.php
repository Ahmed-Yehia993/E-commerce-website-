<?php
session_start();
?>

<html>
<head>
<title> MY PROFILE </title>
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


                                          <br><br>
                                          <button onclick="window.location.href = 'index.html'" class = "mybutton"> logout</button>
                                                <button class = "mybutton" onclick="window.location.href = 'Modify Profile.php'"> My Profile</button>
                                          <button class = "mybutton" onclick="window.location.href = 'ShoppingCart.php'"> Shopping cart</button>
 <button class = "mybutton" onclick="window.location.href = 'OrderTrack.php'"> Track Your Order</button>



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
   <br>
   <br>
   <!------------End Header ------------>

                        
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "System";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_SESSION["em"];

      $sql = "SELECT * FROM customer where email = '$name' ";
      

      $result = mysqli_query($conn,$sql);
      
      while ($strrow = mysqli_fetch_array($result))
      {
            $firstname = $strrow['firstname'];
            $lastname = $strrow['lastname']; 
            $phone = $strrow['Phone']; 
            $pw = $strrow['password']; 
            $email = $strrow['email'];
            
      }

            ?>

                  
                        <form method="POST" action="updated_form.php">

                             First Name : <input type="text"  value="<?php echo $firstname; ?>" name = "First Name" readonly> </input> <br>
                              Last Name : <input type = "text"value = "<?php echo $lastname; ?>" name = "Last Name" readonly> </input> <br>
                              phone :<input type = "text" value = "<?php echo $phone; ?>" name = "Phone number" readonly> </input> <br>
                              Email :<input type="text"  value="<?php echo $email; ?>" name = "Customer Email" readonly>




                               <button  name = "update" class="mybutton"  >update</button> 
                              
                        </form>
                   


      <br>
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











                        
                  
    
            
