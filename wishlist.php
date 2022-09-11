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
else{
?>
<html>
<head>
<meta charset="UTF-8"><title>Wishlist</title>
<link rel="stylesheet" href="css/stylesheet.css" media="all"><!--stylesheet style sheet-->  
<link rel="stylesheet" href="css/cart.css" media="all">      <!--cart style sheet-->
<link rel="stylesheet" href="css/drop.css" media="all">      <!--drop-->
<link rel="stylesheet" href="css/bell_drop.css" media="all">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/navbar.css">                <!--navbar ,dropdown etc style sheet-->
<link rel="stylesheet" href="css/animated.css">              <!--animated style sheet-->
<link rel="stylesheet" href="css/search.css">                <!--search button style sheet-->            <!--product details page style -->
<link rel="stylesheet" href="css/jquery_popup.css" >
<script type="text/javascript" src="js/autohide.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<link href="css/feedback.css" rel="stylesheet" type="text/css">                     
<script type="text/javascript" src="js/autohide.js"></script><!--autohide navbar script-->

<link rel="shortcut icon" type="image/x-icon" href="img/king.png"/>
</head>
<body>
<?php
wish_feedback();
		?>
	
<div class="right_content">                                 
 
                                       <div id="left_content">									   <!--left content start--> 
									  
									  
                                       </div>                                                       <!--left content end--> 
<div id="cart_page">
<form action="" method="post" enctype="multipart/form-data"> 

<table style="margin-top:-10px;" >
<?php if(isset($_GET['delete_wish'])){
	 include("delete_wish.php");
 }?>
<tr>
<td colspan="6" height="43"><font size="6" style="color:white;background:#696969;padding:5px 20px 9.9px 20px;margin-left:10px;border-radius:7px 7px 0 0">Wishlist (<?php total_wish();?>)</font></td>
</tr>
<tr>
<th>SR</th>
<th>ITEM</th>
<th>REMOVE</th>
<th>ADD TO CART</th>
</tr>
<?php 
//getting the total price

	
			$total=0;
	$count=0;
	global $con;
	$ip=getIp();
	$user=$_SESSION['customer_email'];
	$sel_price="select * from wishlist where customer_email='$user' ";
	$run_price=mysqli_query($con,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
			
			$get_pro="select * from products where product_id='$pro_id'  ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_per=$row_pro['product_period'];
		
		$count+=1;
?>

<tr align="center">
<td><?php echo $count;?></td>
<td >
<img src="shopking@sscomputechadminlogin/electronics_images/<?php echo$pro_image;?>"width="90" height="100" style="float:left;margin-left:10px;"/>

<?php echo "<font color='black' style='float:left' >".$pro_title;?></font><br>
<!--<img src="img/replace.png"style="float:left">-->
<?php echo"Rs.".number_format($pro_price) ?><br>
<?php echo"Rs.".$pro_per ?>
</td>

<td ><br><br><a href="wishlist.php?delete_wish=<?php echo $pro_id;?>" >Remove</a></td>
<td><br><br><a href="index.php?add_cart=<?php echo $pro_id;?>">ADD TO CART</a></td>

	<?php  	

	}}
	
 ?>
<?php  


?>
</tr>

<tr>
<th colspan="6"><img src="img/security.png" ></th>
</tr>
<tr>
<td colspan="6" align="center">Policies :Terms of Use | Security | Privacy | Infringement        &copy; 2015 ShopKing.com </td>
</tr>




</table>
</form>
</div>
                                          </div>                                                     <!--right content start-->    

 
                                <div id="pagetop">                                              <!--page top start here-->  
                                <div class="main_header">								        <!--main header start here-->
                                <div id="helpme">                                               <!-- help services start-->
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
                                     </div>                                                          <!--help services close-->
                                     
                                     <div class="dropper">                                            <!--user drop start here-->
                                     <ul>
                                     <li class="drop">
			                         <img src="img/user.jpg" width="60" height="60" style="border-radius:50%;border:2px solid cyan;">
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
                                          if(isset($_SESSION['customer_email']))
										  {
                                          echo"<a href='my_account.php?personal_info' style='color:gray;'>My Account<i class='fa fa-windows' style='color:skyblue; margin-left:30px;font-size:20px'></i></a>";
                                          }?>
					                  </li>
							          <li>
							          <?php
                                      if(!isset($_SESSION['customer_email']))
									  {
                                      echo"<a href='checkout.php' style='color:gray;'>Login</a>";
                                      }
                                      else{
                                      echo"<a href='logout.php'style='color:gray'>Logout</a>";
                                          }?>
								     <i class="fa fa-sign-out" style="color:skyblue; margin-left:33px;font-size:20px"></i></li>
						             </ul>
					                 </div>
				                     </div>
			                         </li>
			                         </ul>
									 </div>                                                                   <!-- user drop ends-->
   
                              <div id="form"><!--form start -->
                                     <form method="get" style="overflow:visible" action="results.php" enctype="multipart/form-data"><!----- Search Form Start ---->  
                                     <input type="Text" class="tftextinput" name="user_query"  size=55  placeholder="Search a product, Categories or a brand name "   />
          	                         <input type="submit" class="tfbutton"  name="search"  value="Search" />
                                     &nbsp;&nbsp;
                                     <a href="cart.php"><font color=White size=3 class="shopping_cart"><?php cart();?><i class="fa fa-shopping-cart">&nbsp;&nbsp;CART &nbsp;<?php  total_item2();?></i></font></a>
                                     </form>                                                                                        <!----- Search Form Ends ---->    
                                     <a href="index.php"><img src="img/shopking.png" alt="The Online Megha Store | Shopking.com" width="230" height="55" style="margin-left:160px;margin-top:-53px;"></a>
                             </div><!--form close -->
									  
									  <div id="menu">                                                 <!--menu start here-->
                                      <div id="navbar" >                                               <!--navbar starts-->
									  <ul class="nav">                                                 <!--nav starts-->
                                      <?php getCats("select * from categories ");?>
                                      <font  id="offer_tag"> <a href="assembled.php">
			                          <i class="fa fa-mobile-phone">&nbsp;Assembled </font></i></a>   
                                      </ul>    
                                      </div>                                                             <!--nav ends-->
                                      </div>                                                             <!--navbar end here-->
                                      
								      </div>                                                          <!--menu end here-->
									  </div>                                                     <!--main header end here-->
                                 </div>                                                          <!--pagetop end here-->

                                                                                                         

<!--footer header start-->
 <div id="footer">
 
 <hr size="4">
 <br>
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