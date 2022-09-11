<?php
include("includes/db.php");
session_start();
include("functions/function.php");
global $con;
if(isset($_COOKIE["s_email"])){
$email=$_COOKIE["s_email"];
$pass=$_COOKIE["s_pass"];
$select="select * from customers where customer_email='$email' and customer_pass='$pass'";
$run=mysqli_query($con,$select);
$_SESSION['customer_email']=$email;
}


if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('checkout.php?not_admin=You are not a Customer!','_self')</script>";
}
else{?>
<html>
<head>
<title>My Account</title>
<link rel="stylesheet" href="css/stylesheet.css" media="all">
<link rel="stylesheet" href="css/cart.css" media="all">
<link rel="stylesheet" href="css/drop.css" media="all"><!--drop-->
<link rel="stylesheet" href="css/bell_drop.css" media="all">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/navbar.css">    <!--navbar ,dropdown etc style sheet-->
<link rel="stylesheet" href="css/animated.css">             <!--animated style sheet-->
<link rel="stylesheet" href="css/search.css">               <!--search button style sheet-->            <!--product details page style -->
<link rel="stylesheet" href="css/my_account.css">
<link rel="stylesheet" href="css/personal_info.css">
<link rel="stylesheet" href="css/change_pass.css">
<link rel="stylesheet" href="css/table.css">
<link rel="shortcut icon" type="image/x-icon" href="img/king.png"/>
<script type="text/javascript" src="js/autohide.js"></script>
</head>
<body>

 <font id="feedback"><a href="feedback.php">FeedBack</a></font>

<!--content start-->

 <div class="right_content">

 <?php
 if(!isset($_GET['my_orders'])){
 
 if(!isset($_GET['my_order_cancel'])){
	 if(!isset($_GET['gift'])){ 
	 if(!isset($_GET['last_login'])){
	  if(!isset($_GET['voucher'])){
		   if(!isset($_GET['wallet'])){
			    if(!isset($_GET['my_saved'])){
					 if(!isset($_GET['my_reviews'])){
						  if(!isset($_GET['recommendations'])){
							   if(!isset($_GET['my_whishlist'])){
						  if(!isset($_GET['first_sub'])){
							   if(!isset($_GET['ebooks'])){
								    if(!isset($_GET['library'])){
										 if(!isset($_GET['personal_info'])){
											  if(!isset($_GET['change_pass'])){
												  if(!isset($_GET['change_image'])){
													  if(!isset($_GET['delete'])){

 echo"<center style='margin-top:-38px'>Welcome Mr/Ms ".$_SESSION['customer_email']."<br>";
echo"Happy To See You</center>";
	
	
														  
 }
	}										  }
 }
}
}
}
}
	 }
 }
				}
		   }
		   }
	  }
	 }
	 }
	
 }
 ?>


 <div >
 

<ul class="left_content">
<h2>My Account</h2>
<h3>ORDERS</h3>
 <li><a href="my_account.php?my_orders" id="orders">My Orders</a><li>
 <li><a href="my_account.php?my_order_cancel" class="my_order_cancel ">Cancelled Orders</a><li>
 

<h3>MY STUFF</h3>
<li><a href="feedback.php">My Reviews & Ratings</a></li>
<li><a href="wishlist.php">My Wishlist</a></li>
<li><a href="my_account.php?last_login"  class="last_login ">Last Login</a></li>
<h2>SETTINGS</h2>
<li><a class="personal" href="my_account.php?personal_info">Personal Information</a></li>
<li><a class="change" href="my_account.php?change_pass">Change Password</a></li>
<li><a class="image" href="my_account.php?change_image">Change Profile Image</a></li>
<li><a class="delete" href="my_account.php?delete">Delete Account</a></li>
<li><a class="logout" href="logout.php">Logout</a></li>
</ul>

</div>
 <?php
 if(isset($_GET['personal_info'])){
	 include("personal_info.php");
 }
 if(isset($_GET['change_pass'])){
	 include("change_pass.php");
 }
 if(isset($_GET['change_image'])){
	 include("change_image.php");
 }
  if(isset($_GET['delete'])){
	 include("delete.php");
 }
  if(isset($_GET['my_orders'])){
	 include("my_orders.php");
 } if(isset($_GET['all_orders'])){
	 include("all_orders.php");
 }
 if(isset($_GET['frend_list'])){
	 include("frend_list.php");
 }
  if(isset($_GET['my_order_cancel'])){
	 include("my_order_cancel.php");
 }
 if(isset($_GET['last_login'])){
	 include("last_login.php");
 }
 ?>

</div>
 <!--content end-->
</div>

<div id="pagetop">
<div class="main_header">
<!-- help services start-->
<div id="helpme">
 <ul>
  <li ><font color=yellow size=4><i class="fa fa-shopping-cart" ><a href="#" >&nbsp;ShopKing First</a></i></font></li>
  <li id="bitwise">|</li>
  <li><a href="#">24xCustomer care</a></li>
  <li id="bitwise">|</li>                                 
    <li><font color=yellow size=4><i class="fa fa-mobile" ><a href="#">&nbsp;Download App</a></i></font></li>
    <li id="bitwise">|</li>
    <li><a href="#">Sell</a></li>
      <li id="bitwise">|</li>
    <li><font color=yellow size=4><i class="fa fa-location-arrow" ><a href="#">Track Order</a></i></font></li>
	 <li id="bitwise">|</li>
	 <li>
	 <?php
	 $get_c="select * from customers  ";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
	$c_name=$row_c['customer_name'];}
	 if(isset($_SESSION['customer_email']))
	 {
	 echo"<a href='my_account.php'><font color='white' size='3'>hi  ".$c_name."</font></a>";
	}
	else{
	echo"<a href='customer_register.php'>Signup</a>";
		}
	
 ?></li>
  </ul>
  
  </div>
  <!--help services close-->
  <!--user drop start here--> 
  <div class="dropper">
  

		<ul >
			
			<li class="drop">
			<?php
		
include("includes/db.php");
$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];

$image=$row_customer['customer_image'];


if(isset($_SESSION['customer_email']))
	 {
	 echo"<img src='customers/customers_images/$image' width='60' height='60' style='border-radius:50%;border:2px solid cyan;'>";
	}
	else{
	echo"<img src='img/user.jpg' width='60' height='60' style='border-radius:50%;border:2px solid cyan;'>";

		}?>
			 
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
											   <?php
	 if(isset($_SESSION['customer_email']))
	 {
	 echo"<b style='color:green;float:right;margin-right:30px'>Welcom:<br>".$_SESSION['customer_email']."</b>";
	}
	else{
	echo"<b>Welcome: Quest</b>";
		}
 ?>
 
							<li><a href="cart.php">Cart<i class="fa fa-shopping-cart" style="color:skyblue; margin-left:63px;font-size:20px"><?php total_item();?></i></a></li>
						
							<li><?php
                           if(isset($_SESSION['customer_email'])){
                           echo"<a href='my_account.php?personal_info' style='color:gray;'>My Account<i class='fa fa-windows' style='color:skyblue; margin-left:30px;font-size:20px'></i></a>";
                           }?></li>
							<li>
							 <?php
 if(!isset($_SESSION['customer_email'])){
 echo"<a href='checkout.php' style='color:gray;'>Login</a>";
 
 }
 else{
 echo"<a href='logout.php'style='color:gray'>Logout</a>
";
 }
 ?><i class="fa fa-sign-out" style="color:skyblue; margin-left:33px;font-size:20px"></i></li>
						</ul>
					</div>
				</div>
			
			</li>
			
		</ul>
</div>
<!-- user drop ends-->
    <div id="form"><!--form start -->
                                     <form method="get" style="overflow:visible" action="results.php" enctype="multipart/form-data"><!----- Search Form Start ---->  
                                     <input type="Text" class="tftextinput" name="user_query"  size=55  placeholder="Search a product, Categories or a brand name "   />
          	                         <input type="submit" class="tfbutton"  name="search"  value="Search" />
                                     &nbsp;&nbsp;
                                     <a href="cart.php"><font color=White size=3 class="shopping_cart"><?php cart();?><i class="fa fa-shopping-cart">&nbsp;&nbsp;CART &nbsp;<?php  total_item2();?></i></font></a>
                                     </form>                                                                                        <!----- Search Form Ends ---->    
                                     <a href="index.php"><img src="img/shopking.png" alt="The Online Megha Store | Shopking.com" width="230" height="55" style="margin-left:160px;margin-top:-53px;"></a>
                             </div><!--form close -->
<div id="menu"><!--menu start-->
<!--navbar starts-->
   <div id="navbar" >
    

   
              
              <ul class="nav">
      <?php getCats("select * from categories ");?>
             <font  id="offer_tag"> <a href="assembled.php">
			                          <i class="fa fa-mobile-phone">&nbsp;Assembled </font></i></a>   
                                      </ul>    
     
 
 <!--nav ends-->
 </div>



</div><!--menu ends here-->

</div>
</div> 
<!--footer header start-->
 <div id="footer">
 
 
<center>
<div id="cart">
<table>
<tr>
<hr size="4" width="100%">
<th>HELP</th>
<th>SHOPKING</th>
<th>SHOPKING EBOOKS</th>
<th>MISC</th>
</tr>

<tr>
<td><a href="#">Payment</a><hr width="160"></td>
<td><a href="#">Contact Us</a><hr width="160"></td>
<td><a href="#">eBooks Quick Start Guide</a><hr width="160"></td>
<td><a href="#">Online Shopping</a><hr width="160"></td>
</tr>

<tr>
<td><a href="#">Saved Cards</a><hr width="160"></td>
<td><a href="#">About Us</a><hr width="160"></td>
<td><a href="#">eBooks FAQ</a><hr width="160"></td>
<td><a href="#">Affilate</a><hr width="160"></td>
</tr>

<tr>
<td><a href="#">Shipping</a><hr width="160"></td>
<td><a href="#">Carrers</a><hr width="160"></td>
<td><a href="#">eBooks App</a><hr width="160"></td>
<td><a href="#">Gift Voucher</a><hr width="160"></td>
</tr>

<tr>
<td><a href="#">Cancellation & Returns</a><hr width="160"></td>
<td><a href="#">Blog</a><hr width="160"></td>
<td rowspan="3"><a href="#">Press</a><hr width="160"></td>
<td><a href="#">ShopKing First Suscription</a><hr width="160"></td>
</tr>
<tr>
<td><a href="#">FAQ</a><hr width="160"></td>
<td><a href="#">Press</a><hr width="160"></td>
<td><a href="#">eLearning FAQ</a><hr width="160"></td>
</tr>

<tr>
<td><a href="#">Report Infringment</a></td>
<td><a href="#">Slash N</a></td>
</tr>
</table>
<div id="track">
<table>
<tr>
<td><a href="#"><font size="10" ><i class="fa fa-location-arrow"></i></font>TRACK YOUR <br>OREDR</a></td>
<td><a href="#"><font size="10" ><i class="fa fa-refresh"></i></font>FREE & EASY <br>RETURNS</a></td>
<td><a href="#"><font size="10" ><i class="fa fa-cut"></i></font>ONLINE <br>CACELLATION</a></td>
</tr>
</table>

</div>
</div>
<div class="corp">
<pre>Policies :Terms of Use | Security | Privacy | Infringement        &copy; 2016 ShopKing.onlinewebshop.net                                                       

                                                                                 KEEP IN TOUCH    </pre>
 </div>
<div id="keep_in_touch">  
<ul>
<li><a href="//www.facebook.com" ><font size="6" color="white"><i class="fa fa-facebook" ></i></a></font></li>
<li><a href="www.tweeter.com"><font size="6" color="white"><i class="fa fa-twitter"></i></a></font></li>
<li><a href="www.linkedin.com"><font size="6" color="white"><i class="fa fa-linkedin"></i></a></font></li>
<li><a href="www.youtube.com"><font size="6" color="white"><i class="fa fa-youtube"></i></a></font></li>
</ul>
</div>
<br>
<a href="index.php" style="text-decoration:none;"><font color="gray" size="9"style="font-weight:bold">Shop</font><font color="red" size="9" style="font-weight:bold">King</font></a><br><br>
<font color="gray">A Company by Frendz-Corporation <br><br>
powered by__ S.S COMPUTECH<br><br>
 Payment Method &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/payment_method.png"> 

																				   </div>
</div>

 <!--footer header ends-->
</body>
</html>
<?php } ?>