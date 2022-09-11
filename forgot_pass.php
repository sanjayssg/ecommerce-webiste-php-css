<?php
include("includes/db.php");
session_start();
include("functions/function.php");

?>
<html>
<head><title>ShopKing</title>
<meta charset="UTF-8">
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
<link rel="shortcut icon" type="image/x-icon" href="img/king.png"/>
<!-- Bullet Navigator Style -->
   
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery_popup.js"></script>
</head>
<body>
<?php wish_feedback();?>
		
		
<div class="right_content">                                  
 
                                       <div id="left_content">									   <!--left content start--> 
									  
<form method="post" action="" enctype="multipart/form-data">
<table  class="table_style">
<tr >

<td><br><font size="5" style="font-weight:bold;font-family:tahoma;margin-left:50px;">Forgot password?</font>
</td>
</tr>
<tr>
<td><BR><?php
include("includes/db.php");
if(!isset($_POST['reset_pass'])){
	$user="";
	$current_pass="";
	$new_pass="";
	$new_again="";
	}
if(isset($_POST['reset_pass'])){
	$user=$_POST['email'];
	$current_pass=$_POST['current_pass'];
	$new_pass=$_POST['new_pass'];
	$new_again=$_POST['new_pass_again'];
$sel_pass="select * from customers where customer_pass like '%$current_pass%' AND customer_email='$user'";
$run_pass=mysqli_query($con,$sel_pass);
$check_pass=mysqli_num_rows($run_pass);

if($check_pass==0){
echo "<font style='margin-top:90px;padding:10px;padding-right:200px;color:white;background:red;'>Your Current Password is wrong!!!</font>";

	}
		else if($new_pass!=$new_again){
		echo "<font style='margin-top:60px;padding:10px;padding-right:260px;color:white;background:red;'>New Password is not match!!!</font>";	

		}
		elseif(strlen($new_pass)<8 && strlen($new_again)<8){
echo"<font style='margin-top:60px;padding:10px;padding-right:170px;color:white;background:red;'>Pls Enter Password more than 8 character</font>";
}
		else if($check_pass!=0 && $new_pass=$new_again  )
		{
		
			$update_pass="update customers set customer_pass='$new_pass' where customer_email='$user'";
		$run_update=mysqli_query($con,$update_pass);
		echo"<font style='margin-top:60px;padding:10px;padding-right:200px;color:white;background:green;'>Your Password has been changed</font>";

		}
}

?>
</td>

</tr>

<tr>

<td><br><input type="text" class="login_page" name="email" value="<?php echo $user;?>"placeholder="Enter the email/mobile" required/></td>
<td><br><input type="password" class="login_page" name="new_pass" value="<?php echo $new_pass;?>" placeholder="Enter new password" required/></td>

</tr>

<tr>
<td><br><input type="password" name="current_pass" value="<?php echo $current_pass;?>" class="login_page"maxlength="15" placeholder="Enter aleast one character" required /></td>
<td><br><input type="password" class="login_page" name="new_pass_again" value="<?php echo $new_again;?>" maxlength="15"placeholder="Comfirm password" required/></td>

</tr>
<tr>
<td ><font style="margin-left:60px;">(Atleast one character should be match, for hint )</font></td>
</tr>

<tr>
<td align="right" ><input type="submit" name="reset_pass" value="Reset Password" style="width:150px;height:50px;margin-right:-70px;"/></td>

</tr>
<tr>
<td><br><font style="margin-left:100px;">Got Pasword?</font></td>
<td><br><a href="checkout.php?login1" ><font style="margin-left:-250px;">Login</font><br></a></td>
</tr>


</table>

<table class="table_style">
<tr>
<td><br><font style="margin-left:400px">Recover your account</font><br><br><a href="#" style="margin-left:300px;"><img src="img/facebook.png"></a><br><br></td>

</tr>
</table >
</form>
                                       </div>                                                       <!--left content end--> 

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