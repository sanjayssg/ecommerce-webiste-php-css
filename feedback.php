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
$get_total_rows = 0;
$results = $mysqli->query("SELECT COUNT(*) FROM products");
if($results){
$get_total_rows = $results->fetch_row(); 
}
//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page);	
if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('checkout.php?not_admin=You are not a Customer!','_self')</script>";
}
else{
?>
<html>
<head>
<meta charset="UTF-8"><title>Feedback to ShopKing</title>
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
<script type="text/javascript" src="js/autohide.js"></script><!--autohide navbar script-->
<script type="text/javascript">
$(document).ready(function() {

	var track_click = 0; //track user click on "load more" button, righ now it is 0 click
	
	var total_pages = <?php echo $total_pages; ?>;


	$(".load_more").click(function (e) { //user clicks on button
	
		$(this).hide(); //hide load more button on click
		$('.animation_image').show(); //show loading image

		if(track_click <= total_pages) //make sure user clicks are still less than total pages
		{
			//post page number and load returned data into result element
			$.post('fetch_feedback',{'page': track_click}, function(data) {
			
				$(".load_more").show(); //bring back load more button
				
				$("#comment_show").append(data); //append data received from server
				
				//scroll page to button element
				$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 1600);
				
				//hide loading image
				$('.animation_image').hide(); //hide loading image once data is received
	
				track_click++; //user click increment on load button
			
			}).fail(function(xhr, ajaxOptions, thrownError) { 
				alert(thrownError); //alert any HTTP error
				$(".load_more").show(); //bring back load more button
				$('.animation_image').hide(); //hide loading image once data is received
			});
			
			
			if(track_click >= total_pages-1)
			{
				//reached end of the page yet? disable load button
				$(".load_more").attr("disabled", "disabled");
			}
		 }
		  
		});
});
</script>
</head>
<body>
<?php
wish_feedback();
		?>
		
<div class="right_content">                                 
 
                                       <div id="left_content">									   <!--left content start--> 
									  
									  
                                       </div>                                                       <!--left content end--> 

<div id="header">
<?php
$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];
$name=$row_customer['customer_name'];
$lname=$row_customer['customer_lname'];
$email=$row_customer['customer_email'];
$image=$row_customer['customer_image'];

?>
 <font style="font-size:16px;margin-left:250px"><?php echo $name.$lname;?> is preparing to write something related to ShopKing.</font>

<?php 

$user=$_SESSION['customer_email'];
$sel="select * from likes where customer_email='$user'";	
$run=mysqli_query($con,$sel);
$row_customer=mysqli_fetch_array($run);
$up=$row_customer['up'];
$email=$row_customer['customer_email'];	
if($up==0){							  
echo"<a href='index.php?add_like=<?php echo $user;?>'style='color:green'><i class='fa fa-thumbs-up'></i></a>";
}else{ echo"<a href='index.php?add_unlike=<?php echo $user;?>' style='color:red'><i class='fa fa-thumbs-down'></i></a>";}
?>
<form method="get">

</form>
</div>

<div id="user_profile">

<img src="customers/customers_images/<?php echo $image;?>  " width='250' height='250' style=" border:1px solid blue">
<?php echo $name;?><br>
<?php echo $email;?>
</div>
<div class="comment">
<form action="" method="post" enctype="multipart/form-data">
<br>

<font style="margin-left:80px">Write something...</font><br>
 <table style="margin-left:60px;">
 <tr>
 <td><input type="text" name="feedback" required style="padding:10px;width:500px"></td>
 <td>
          	  <input type="submit" name='comment'  value="Post" style="padding:6px 10px;width:90px;padding:10px"/></td>
			  </tr>
			  </table>


</form>
</div>
<div id="comment_show">

<?php
include("includes/db.php");
if(isset($_POST['comment'])){
$comment=$_POST['feedback'];
$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];
$name=$row_customer['customer_name'];
$email=$row_customer['customer_email'];
$image=$row_customer['customer_image'];
	date_default_timezone_set("Asia/Kolkata");
$feedback_date=date('d-M-Y  D h:i:s A');		
	$user=$_SESSION['customer_email'];		

	$sel="select * from feedback where customer_email='$user' and comment='$comment'";
	$run_sel=mysqli_query($con,$sel);	
		if($run_sel){
			
			$get="insert into feedback(customer_name,customer_email,customer_image,date,comment)values('$name','$email','$image','$feedback_date','$comment')";
	$run_feedback=mysqli_query($con,$get);
echo"<script>window.open('feedback','_self')</script>";
		}

}

?>


<?php

include("includes/db.php");

	
	
		$get_c="select * from feedback order by id desc limit 10";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
	$c_comment=$row_c['comment'];
		$c_name=$row_c['customer_name'];
		$c_email=$row_c['customer_email'];
		$c_image=$row_c['customer_image'];
	$c_date=$row_c['date'];
	
	
	
	


?>




		<ul>
<li>
<table style='margin-left:10px;margin-top:10px;width:600px;'>
<tr>
<td rowspan='3' colspan=''><img src='customers/customers_images/<?php echo$c_image; ?>' width='70' height='70' style='float:left;border:1px solid black;margin-top:0px;margin-left:10px;'/>
<font style='margin-left:30px;font-size:20px;'><?php echo $c_name;?> <?php echo $c_comment;?>  </font>
<pre><font style='margin-left:30px;font-size:15px;'><?php echo $c_date;?></font></pre></td>
</tr>



</table>


</li>
</ul>

<?php }?>
</div><div align="center">
<button class="load_more" id="load_more_button">Show More</button>
<div class="animation_image" style="display:none;"><img src="ajax-loader.gif"> Loading...</div>
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