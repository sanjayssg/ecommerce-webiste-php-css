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
<head>
<meta charset="UTF-8"><title>Assembled Your Pc</title>
<link rel="stylesheet" href="css/assembled.css" media="all"><!--Assembled css-->
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
									 <?php  if(!isset($_SESSION['customer_email']))
									          {
											  echo"<center id='details_ass'>Now You Can Assembled Your Pc By Your Self</center>";
											  }
											  else{
											  echo "<center id='details_ass'>Hii ,".$_SESSION['customer_email']."<br>Now You Can Assembled Your Pc By Your Self</center>";
											  }
									 ?>

<form action="" method="post" enctype="multipart/form-data"> 

<?php



if(!isset($_POST['assembled'])){
$ram="Select RAM";
$r_price=0;
$processor="Select Processor";
$p_price=0;
$harddisk="Select Hard Disk";
$hdd_price=0;
$cabinet="Select Cabinet";
$cabinet_price=0;
$screen="Select Screen";
$screen_price=0;
$graphic="Select Graphics Card";
$graphic_price=0;
$keyboard="Select Keyboard and Mouse";
$keyboard_price=0;
$speaker="Select MM Speaker";
$speaker_price=0;
$total=0;
$total=$r_price+$p_price+$hdd_price+$cabinet_price+$screen_price+$graphic_price+$keyboard_price+$speaker_price;

}

?>
<?php
if(isset($_POST['processor_cat']))
{
$id = $_POST['processor_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE processor = '$id'");
while($row = mysqli_fetch_array($result))
{   
 $p_price = $row['processor_price'];   
 $processor = $row['processor'];
 }
 }
if(isset($_POST['ram_cat']))
{$id = $_POST['ram_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE ram = '$id'");
while($row = mysqli_fetch_array($result))
{   
 $r_price = $row['ram_price'];   
 $ram = $row['ram'];
 }
 }
 if(isset($_POST['hdd_cat']))
{$id = $_POST['hdd_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE harddisk = '$id'");
while($row = mysqli_fetch_array($result))
{   
 $hdd_price = $row['harddisk_price'];   
 $harddisk = $row['harddisk'];
 }
 }
  if(isset($_POST['cabinet_cat']))
{$id = $_POST['cabinet_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE cabinet= '$id'");
while($row = mysqli_fetch_array($result))
{   
 $cabinet_price = $row['cabinet_price'];   
 $cabinet = $row['cabinet'];
 }
 }
   if(isset($_POST['screen_cat']))
{
$id = $_POST['screen_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE screen= '$id'");
while($row = mysqli_fetch_array($result))
{   
 $screen_price = $row['screen_price'];   
 $screen = $row['screen'];
 }
 }
   if(isset($_POST['graphic_cat']))
{
$id = $_POST['graphic_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE graphic= '$id'");
while($row = mysqli_fetch_array($result))
{   
 $graphic_price = $row['graphic_price'];   
 $graphic = $row['graphic'];
 }
 }
 if(isset($_POST['keyboard_cat']))
{
$id = $_POST['keyboard_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE keyboard= '$id'");
while($row = mysqli_fetch_array($result))
{   
 $keyboard_price = $row['keyboard_price'];   
 $keyboard = $row['keyboard'];
 }
 }
 if(isset($_POST['speaker_cat']))
{
$id = $_POST['speaker_cat'];
$result = mysqli_query($con,"SELECT * FROM assembled WHERE speaker= '$id'");
while($row = mysqli_fetch_array($result))
{   
 $speaker_price = $row['speaker_price'];   
 $speaker = $row['speaker'];
 }
 }
 $total=0;
$total=$r_price+$p_price+$hdd_price+$cabinet_price+$screen_price+$graphic_price+$keyboard_price+$speaker_price;
?>
<table class="assembled">
<tr>
<td><select  name="processor_cat" onchange="this.form.submit()">
<option><?php echo $processor;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					  $ass_id=$row_ass['id'];
					    $ass_processor=$row_ass['processor'];
						 $ass_processor_price=$row_ass['processor_price'];
						echo"<option >$ass_processor</option>";
						
						
						}
						

						?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($p_price); ?>" disabled><br></td>
</tr>
<tr>
<td>

<select name="ram_cat" onchange="this.form.submit()">       <!--RAM select-->
<option><?php echo $ram;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					  $ass_id=$row_ass['id'];
					    $ass_ram=$row_ass['ram'];
						 $price_r=$row_ass['ram_price'];
						echo"<option >$ass_ram</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($r_price); ?>" disabled><br></td>
</tr>
<tr>
<td>
<select name="hdd_cat" onchange="this.form.submit()">
<option><?php echo $harddisk;?></option>                          <!--Hdd select-->
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					  $ass_id=$row_ass['id'];
					    $ass_hdd=$row_ass['harddisk'];
						 $ass_hdd_price=$row_ass['harddisk_price'];
						echo"<option >$ass_hdd</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($hdd_price); ?>" disabled><br></td>
</tr>
<tr>
<td>
<select name="cabinet_cat" onchange="this.form.submit()">                             <!--Cabinet select-->
<option><?php echo $cabinet;?></option>       
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					  $ass_id=$row_ass['id'];
					    $ass_cabinet=$row_ass['cabinet'];
						 $ass_cabinet_price=$row_ass['cabinet_price'];
						echo"<option >$ass_cabinet</option>";
						
						}
						
?>
</select>
</td>

<td><input type="text" value="<?php echo number_format($cabinet_price); ?>" disabled><br></td>
</tr>
<tr>
<td>
<select name="screen_cat" onchange="this.form.submit()">                  <!-- Screen select-->
<option><?php echo $screen;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					 
					    $ass_screen=$row_ass['screen'];
						 $ass_screen_price=$row_ass['screen_price'];
						echo"<option >$ass_screen</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($screen_price); ?>" disabled><br></td>
</tr>
<tr>
<td>
<select name="graphic_cat"onchange="this.form.submit()" >                 <!-- graphic  select-->
<option><?php echo $graphic;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					 
					    $ass_graphic=$row_ass['graphic'];
						 $ass_graphic_price=$row_ass['graphic_price'];
						echo"<option>$ass_graphic</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($graphic_price);?>"disabled><br></td>
</tr>
<tr>
<td>
<select name="keyboard_cat"onchange="this.form.submit()" >                 <!-- keyboard & mouse  select-->
<option><?php echo $keyboard;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					 
					    $ass_keyboard=$row_ass['keyboard'];
						 $ass_keyboard_price=$row_ass['keyboard_price'];
						echo"<option>$ass_keyboard</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($keyboard_price);?>"disabled><br></td>
</tr>
<tr>
<td>
<select name="speaker_cat" onchange="this.form.submit()" >                 <!-- Speaker  select-->
<option><?php echo $speaker;?></option>
<?php


$get_ass="select * from assembled ";
				  $run_ass=mysqli_query($con,$get_ass);
				  while($row_ass=mysqli_fetch_array($run_ass))
				  {
					 
					    $ass_speaker=$row_ass['speaker'];
						 $ass_speaker_price=$row_ass['speaker_price'];
						echo"<option>$ass_speaker</option>";
						
						}
						
?>
</select>
</td>
<td><input type="text" value="<?php echo number_format($speaker_price);?>"disabled><br></td>
</tr>
<tr>

<td colspan="2"><font style="color:green;font-size:20px;float:right"> Estimated Plan   <?php echo number_format($total);?>/-</font><br><br>
<font style="color:green;font-size:28px;font-weight:bold;float:right">Total Assembled Price including with Installation charges <?php echo number_format($total+500);?>/-</font><br>
(including all taxes).
</td>
</tr>
</table>
<div id="note">
     Pls Note:<br><br>
	    <ul>  
		<li>  1) Installation Charges Includes, Assembling Parts and Software Installation(eg. Windows and Basic Software).</li>
		<li>  2) Motherboard 945,G31 support only DDR2 RAM.</li>
		<li>  3) Motherboard G41,H61,H81 or Higher support only DDR3 RAM.</li>
		<li>  4) Graphics Card DDR3 support on DDR3 as well as DDR2 Motherboard(945,G31,G41,H61,H81) on Higher.</li>
		<li>  5) The Product(Assembled PC set) given above comes with <font color="green">1 Year Warranty From S.S Computech.</font></li>
		  </ul>
		  
   
</div>
</form>
</div> <!--left content end--> 
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
									  <li><a href="cart">Cart<i class="fa fa-shopping-cart" style="color:skyblue; margin-left:63px;font-size:20px"><?php total_item();?></i></a></li>
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