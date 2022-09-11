<?php

$con=mysqli_connect("localhost","root","","shopking");
/*getting the ip addresse*/
 function getIp() {
 $ip = $_SERVER['REMOTE_ADDR'];
 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
return $ip;
    }


/*creating  the cart  */
function cart(){
	
if(isset($_GET['add_cart'])){
	global $con;
	setcookie("ip_cart",$_POST["add_cart"],time()+3600);

	$ip=getIp();
	$pro_id=$_GET['add_cart'];
	$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
	$run_check=mysqli_query($con,$check_pro);
	if(mysqli_num_rows($run_check)>0){
			echo"<script>
		window.open('index.php','_self')</script>";
		}
	else{
	setcookie("ip_cart",$_POST["add_cart"],time()+3600);
		$insert_pro="insert into cart(p_id,ip_add,qty) values('$pro_id','$ip',1)";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('index.php','_self')</script>";
		}
	}
	
	if(isset($_GET['exp_cart'])){
	global $con;
	
	$ip=getIp();
	$pro_id=$_GET['exp_cart'];
	$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
	$run_check=mysqli_query($con,$check_pro);
	if(mysqli_num_rows($run_check)>0){
		echo"<script>
		window.open('index.php','_self')</script>";
		}
	else{
		$insert_pro="insert into cart(p_id,ip_add,qty) values('$pro_id','$ip',1)";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('checkout.php','_self')</script>";
		}
	}
	
	if(isset($_GET['add_wishlist'])){
	global $con;
	$user=$_SESSION['customer_email'];
	$ip=getIp();
	$pro_id=$_GET['add_wishlist'];
		$check_wish="select * from wishlist where customer_email='$user' AND p_id='$pro_id'";
	$run_check_wish=mysqli_query($con,$check_wish);
	
	
	if(!isset($_SESSION['customer_email'])){
	echo"<script>
		window.open('checkout.php?login1','_self')</script>";
	}
	elseif(mysqli_num_rows($run_check_wish)>0 ){
		echo"<script>
		window.open('index.php','_self')</script>";
	}
	else{
	
		$insert_pro="insert into wishlist(p_id,customer_email) values('$pro_id','$user')";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('wishlist.php','_self')</script>";
		}
	}
	
	if(isset($_GET['add_like'])){
	global $con;
	date_default_timezone_set("Asia/Kolkata");
$like_date=date('d-M-Y  D h:i:s A');
	$user=$_SESSION['customer_email'];
	$ip=getIp();
	$pro_id=$_GET['add_like'];
		$check_wish="select * from likes where customer_email='$user'";
	$run_check_wish=mysqli_query($con,$check_wish);
	if(mysqli_num_rows($run_check_wish)>0){
		echo"<script>
		window.open('index','_self')</script>";
	}
	
	else {
		$insert_pro="insert into likes(customer_email,date,up) values('$user','$like_date',1)";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('feedback','_self')</script>";
		}
		
		
$sel="select * from likes where customer_email='$user'";	
$run=mysqli_query($con,$sel);
$row_customer=mysqli_fetch_array($run);
$up=$row_customer['up'];
$email=$row_customer['customer_email'];	
if($up==0)
{
$insert_pro="update likes set up='1' where customer_email='$user' ";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('feedback','_self')</script>";
}
	}
	
	
	if(isset($_GET['add_unlike'])){
	global $con;
	$user=$_SESSION['customer_email'];
	$ip=getIp();
	$pro_id=$_GET['add_unlike'];
		$check_wish="select * from likes where customer_email='$user'";
	$run_check_wish=mysqli_query($con,$check_wish);
	
		$insert_pro="update likes set up='0' where customer_email='$user' ";
		$run_pro=mysqli_query($con,$insert_pro);
		echo"<script>
		window.open('feedback','_self')</script>";
	}
	
}
	
	
/*getting the total added item*/
function total_item(){
	if(isset($_GET['add_cart'])){
	global $con;
	$ip=getIp();
	$get_items="select * from cart where ip_add='$ip'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
	}
	else{
		global $con;
		$ip=getIp();
	$get_items="select * from cart where ip_add='$ip'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
		
	}
	echo $count_items;
	}
	function total_wish(){
	if(isset($_GET['add_cart'])){
	$user=$_SESSION['customer_email'];
	global $con;
	$ip=getIp();
	$get_items="select * from wishlist where customer_email='$user'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
	}
	else{
		global $con;
		$user=$_SESSION['customer_email'];
		$ip=getIp();
	$get_items="select * from wishlist where customer_email='$user'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
		
	}
	echo "<font>$count_items</font>";
	}
	
	function total_item2(){
	if(isset($_GET['add_cart'])){
	global $con;
	$ip=getIp();
	$get_items="select * from cart where ip_add='$ip'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
	}
	else{
		global $con;
		$ip=getIp();
	$get_items="select * from cart where ip_add='$ip'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
		
	}
	echo "<font size='4' color='black' id='total_cart'>".$count_items."</font>";
	}
	
//getting the total price
function total_price()
{
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
			$values=array_sum($product_price);
			
			$total +=$values;
			}
		
		
		}
		echo "RS.".$total;
}
	
	
	
	
/* categories */

function getCats($get_cats){
global $con;

$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];
echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
}
}

/*assembled*/
function getAss($get_cats){
global $con;

$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];
echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
}
}

function getCats_mobile($get_cats){
global $con;

$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];
echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
}
}

/*getting or displaying the product oc the screen */

function getPro()
{
	
	if(!isset($_GET['cat']))
	{	
	
	global $con;
	$get_pro="select * from products order by RAND() ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
	
		echo "
		<a href='details.php?pro_id=$pro_id'><div id='single_product'><div id='under_product'>
		<img src='shopking@sscomputechadminlogin/electronics_images/$pro_image' width='237' height='230'> 
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>
	    <font size='2' style='float:left; margin:12px;margin-left:5px'>Rs.&nbsp;&nbsp;</font> 
		<font size='5.4' color='#c30' style=' float:left; margin:10px; margin-left:-15px;'>".number_format($pro_price)." </font>
		<div id='buynow'>
		<ul>
	    <li>Shop Now</li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";
		
}
}
}

/*selecting the  products and  displaying the product oc the screen */

function getCatPro()
{
	
	if(isset($_GET['cat']))
	{	
	$cat_id=$_GET['cat'];
	global $con;
	$get_cat_pro="select * from products where product_cat='$cat_id' ";
	$run_cat_pro=mysqli_query($con,$get_cat_pro);
	$count_cat=mysqli_num_rows($run_cat_pro);
	if($count_cat==0){
		echo"<img src='img/page_not_found.png'>";
	}
	else{
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
		$pro_id=$row_cat_pro['product_id'];
		$pro_cat=$row_cat_pro['product_cat'];
		$pro_title=$row_cat_pro['product_title'];
		$pro_price=$row_cat_pro['product_price'];
		$pro_image=$row_cat_pro['product_image'];
	
	
	
		echo "
		<a href='details.php?pro_id=$pro_id'><div id='single_product'><div id='under_product'>
		<img src='shopking@sscomputechadminlogin/electronics_images/$pro_image' width='237' height='230' '> 
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>
	    <font size='2' style='float:left; margin:12px;margin-left:5px'>Rs.&nbsp;&nbsp;</font> 
		<font size='5.4' color='#c30' style=' float:left; margin:10px; margin-left:-15px'>".number_format($pro_price)." </font>
	
		<div id='buynow'>
		<ul>
	    <li>Shop Now</li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";
	
		
}
	}
}
}


function my_account(){
global $con;
$user=$_SESSION['customer_email'];
$get_img="select * from customers where customer_email='$user'";
$run_img=mysqli_query($con,$get_img);
$row_img =mysqli_fetch_array($run_img);
$c_image=$row_img['customer_image'];
$c_name=$row_img['customer_name'];
echo"<img src='customers/customers_images/$c_image' id='my_img'>";

}
function getPro2($get_pro)
{
	
	if(!isset($_GET['cat']))
	{	
	
	global $con;
	
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
	
		echo "
		<a href='details.php?pro_id=$pro_id'><div id='single_product'><div id='under_product'>
		<img src='shopking@sscomputechadminlogin/electronics_images/$pro_image' width='230' height='230'> 
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>
	    <font size='2' style='float:left; margin:12px;margin-left:5px'>Rs.&nbsp;&nbsp;</font> 
		<font size='5.4' color='#c30' style=' float:left; margin:10px; margin-left:-15px'>number_format($pro_price); </font>
		
		<div id='buynow'>
		<ul>
	    <li>Shop Now</li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";
		
}
}
}
function bell(){
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
			$values=array_sum($product_price);
			$shipping_price=$pp_price['product_shipping'];
			$total +=$values+$shipping_price;
			}
		
		
		}
		if($total>=100000){
	
			echo"
  <div class='dropper2'>
		<ul >
			
			<li class='drop2'>
					<font color=red size=5.5><i class='fa fa-bell-o'></i></font>
				
				<div class='dropdownContain2'>
					<div class='dropOut2'>
						<div class='triangle2'></div>
						<ul>
							<li>Your Shopping Cart Having the Amount more then one Lakh i.e Total :- $total</li>
						</ul>
					</div>
				</div>
			
			</li>
			
		</ul>
</div>

";
		}
		else{
			echo"<font color=White size=5.5>&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-bell-o'></i></font>";
		}
}



function getPro_offers()
{
	
	if(!isset($_GET['cat']))
	{	
	
	global $con;
	$get_pro="select * from products order by RAND() ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
	
		echo "
		<a href='details.php?pro_id=$pro_id'><div id='single_product2'><div id='under_product2'>
		<img src='shopking@sscomputechadminlogin/electronics_images/$pro_image' width='220' height='230' ><br><br> 
		<hr>
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>   
		<div id='view_product'>
		<ul>
	    <li>View Products</li>
		<li><a href='index.php?add_wishlist=$pro_id'><i class='fa fa-heart'></i> </a></li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";
		
}
}
}

function wish_feedback(){

if(isset($_SESSION['customer_email']))
	 {
	 $user=$_SESSION['customer_email'];
	global $con;
	$ip=getIp();
	$get_items="select * from wishlist where customer_email='$user'";
	$run_items=mysqli_query($con,$get_items);
	$count_items=mysqli_num_rows($run_items);
	
	
	echo"<a id='wishlist' href='wishlist.php' >Wishlist ($count_items)</a>";
	 echo"<a href='feedback.php' id='feedback' >Feedback</a>";
	 
	 
	 }
	
	else{
	
	
	echo"<a href='checkout.php?login1' id='feedback'>Feedback</a>";
    echo"<a id='wishlist' href='checkout.php?login1'>Wishlist (0)</a>";
		 
}}

function like(){
$get_like="select * from likes ";
	$run_like=mysqli_query($con,$get_like);
	$count_like=mysqli_num_rows($run_like);
	
	echo"<font id='Like'>Like ($count_like)</font>";
}

function get_related_Pro($pro_related)
{
	

	global $con;
	$get_pro="select * from products where product_related like '%$pro_related%'  order by rand() limit 4";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
	
		echo "
		
		<a href='details.php?pro_id=$pro_id'><div id='single_product'><div id='under_product'>
		<img src='shopking@sscomputechadminlogin/electronics_images/$pro_image' width='237' height='230'> 
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>
	    <font size='2' style='float:left; margin:12px;margin-left:5px'>Rs.&nbsp;&nbsp;</font> 
		<font size='5.4' color='#c30' style=' float:left; margin:10px; margin-left:-15px'>".number_format($pro_price)." </font>
		<div id='buynow'>
		<ul>
	    <li>Shop Now</li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";
		

}
}
