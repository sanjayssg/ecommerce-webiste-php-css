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
?>
<html>
<head><title>Order A Product</title>
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
<link href="css/feedback.css" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" href="css/search.css">               <!--search button style sheet-->            <!--product details page style -->
<link rel="stylesheet" href="css/jquery_onclick.css" >

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery_popup.js"></script>
<script type="text/javascript" src="js/autohide.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>                   
<script type="text/javascript" src="js/autohide.js"></script><!--autohide navbar script-->
</head>
<body>
<?php
wish_feedback();
		?>
<div class="right_content">                                 
 
                                       <div id="left_content">									   <!--left content start--> 
									  <div id="cart_page">
 <br><br>
<form action="" method="post" enctype="multipart/form-data"> 
<table style="margin-top:-10px;" >
<tr>
<td colspan="5" ><font size="6" style="color:white;background:#696969;padding:5px 20px 9.9px 20px;margin-left:10px;border-radius:7px 7px 0 0">Order (<?php total_item();?>)</font></td>
</tr>
<tr>
<th>ITEM</th>
<th>PRICE</th>
<th>DELIVERY DETAILS</th>
<th>SUBTOTAL</th>
</tr>
<?php 
//getting the total price
$total=0;
	
	global $con;
	$ip=getIp();
	$sel_price="select * from cart where ip_add='$ip'";
	$run_price=mysqli_query($con,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'";
		$run_pro_price=mysqli_query($con,$pro_price);
		
		while($pp_price=mysqli_fetch_array($run_pro_price)){
			$product_price=array($pp_price['product_price']);
			$product_title=$pp_price['product_title'];
			$product_image=$pp_price['product_image'];
			$single_price=$pp_price['product_price'];
			$p_id=$pp_price['product_id'];
		   $product_per=$pp_price['product_period'];
			$values=array_sum($product_price);
			$total +=$values;
			$sub_total=$values;
			date_default_timezone_set("Asia/Kolkata");
$current_date=date('d-M-Y  D h:i:s A');
		
		   			
			if(isset($_POST['order'])){

			
	$user=$_SESSION['customer_email'];	
  	$get_c="select * from customers where customer_email='$user'";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
		
		$c_name=$row_c['customer_name'];
		$c_email=$row_c['customer_email'];
		$c_add=$row_c['customer_address'];
		$c_city=$row_c['customer_city'];
		$c_contact=$row_c['customer_contact'];
		$c_lname=$row_c['customer_lname'];
$c_pin=$row_c['customer_pin'];
	if( empty($c_lname) or empty($c_add) or empty($c_city) or empty($c_contact) or empty($c_pin)){
	echo"<script>window.open('my_account.php?personal_info','_self')</script>";
	
		}

else{
$user=$_SESSION['customer_email'];	
$get="insert into orders(user_ip,p_id,p_title,p_qty,user_email,price,date,status)values('$ip','$p_id','$product_title',1,'$user','$sub_total','$current_date','Pending')";
	
		$insert_pro=mysqli_query($con,$get);
		if($insert_pro ){
			$delete_cart="delete from cart where  ip_add='$ip' ";
				$run_delete=mysqli_query($con,$delete_cart);
				echo"<script>alert('order press successfully')</script>";
echo"<script>window.open('my_account.php?my_orders','_self')</script>";
}}}
}

?>


<tr align="center">

<td >
<img src="shopking@sscomputechadminlogin/electronics_images/<?php echo$product_image;?>"width="60" height="70" style="float:left"/>
&nbsp;&nbsp;&nbsp;
<?php echo "<font color='black' style='float:left' >".$product_title;?></font><br>
<br>
<?php echo $product_per;?>
</td>







<td><?php echo"Rs.".number_format($single_price); ?></td>
<td><?php 
 
 echo"<font color='darkgreen' size='4'  style='font-weight:bold' >Free<br> <font color='darkgreen' size='2' >Delivered in 2-3 business days.</font>";
 ?></td>
<td><?php echo "Rs.".number_format($sub_total);?></td>



	<?php }} ?>
</tr>
<tr align="right" background="red">
<th colspan="7"><font color="darkgreen" size="5"  style="font-weight:bold">Estimated Total:
<font color="black" size="5" style="font-weight:bold"><?php echo "Rs.".number_format($total);?>/-&nbsp;&nbsp;&nbsp;</th>

</tr>

<tr align="center" >

<td colspan="4" >
<input type="submit" name="order" value="Order Now" id="cart_express" ></td>
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
                                      echo"<a href='logout,php'style='color:gray'>Logout</a>";
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