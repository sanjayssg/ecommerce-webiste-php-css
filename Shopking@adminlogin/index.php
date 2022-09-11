
<?php
session_start();
if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<!DOCTYPE>
<html>
<head>
<title>Admin Area
</title>
<style type="text/css" rel="stylesheet">
  body.insert_pro a.insert_pro{
	  background:cyan;
	  font-weight:bold;
  }
   body.view_pro a.view_pro{
	  background:cyan;
	  font-weight:bold;
  }
   body.insert_cat a.insert_cat{
	  background:cyan;
	  font-weight:bold;
  }
   body.view_cat a.view_cat{
	  background:cyan;
	  font-weight:bold;
  }
    body.view_customers a.view_customers{
	  background:cyan;
	  font-weight:bold;
  }
   body.view_cart a.view_cart{
	  background:cyan;
	  font-weight:bold;
  }
   body.view_orders a.view_orders{
	  background:cyan;
	  font-weight:bold;
  }
</style>
<link type="text/css" rel="stylesheet" href="css/table.css">
</head>
<body>


<link rel="stylesheet" href="css/stylesheet.css" media="all">
<link rel="stylesheet" href="css/cart.css" media="all">
<link rel="stylesheet" href="css/drop.css" media="all"><!--drop-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/navbar.css">    <!--navbar ,dropdown etc style sheet-->
<link rel="stylesheet" href="css/animated.css">             <!--animated style sheet-->
<link rel="stylesheet" href="css/search.css">               <!--search button style sheet-->            <!--product details page style -->
<link rel="stylesheet" href="css/jquery_popup.css" >

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery_popup.js"></script>
</head>
<body> 
<div class="main_header">

<!--header stars -->
<div class="top_header">
<img src="../img/shopking.png" width="330" height="90" alt="The Online Megha Store | Shopking.com" style="margin-left:500px;margin-top:10px"/>
 <div id="right_content">
	
<h1>Admin Tool</h1>
<ul>
<li><a href="index.php?orders" class="view_orders">Orders</a></li>
<li><a href="index.php?insert_product" class="insert_pro">Insert Product</a></li>
<li><a href="index.php?view_products" class="view_pro">View Products</a></li>
<li><a href="index.php?insert_cat" class="insert_cat">Insert Categories</a></li>
<li><a href="index.php?view_cat" class="view_cat">View Categories</a></li>
<li><a href="index.php?view_customers" class="view_customers">View Customers</a></li>
<li><a href="index.php?view_cart" class="view_cart">View Cart</a></li>
<li><a href="index.php?signout" >Sign Out</a></li>

</ul>
 
 </div>
    <!--right content end-->
 </div><!--header close-->
 <!--content start-->
 <div class="content_wrapper">
 <!--right content start--> 
 	<?php
 if(isset($_GET['insert_product'])){
	 include("insert_product.php");
 }
 if(isset($_GET['view_products'])){
	 include("view_products.php");
 }if(isset($_GET['search_pro'])){
	 include("search_pro.php");
 }
 if(isset($_GET['insert_cat'])){
	 include("insert_cat.php");
 }
  if(isset($_GET['view_cat'])){
	 include("view_cat.php");
 }
 if(isset($_GET['edit_pro'])){
	 include("edit_pro.php");
 }
  if(isset($_GET['delete_pro'])){
	 include("delete_pro.php");
 }
   if(isset($_GET['delete_cat'])){
	 include("delete_cat.php");
 }
    if(isset($_GET['edit_cat'])){
	 include("edit_cat.php");
 }
    if(isset($_GET['view_customers'])){
	 include("view_customers.php");
 }
 if(isset($_GET['view_cart'])){
	 include("view_cart.php");
 }
     if(isset($_GET['signout'])){
		 include("logout.php");
 }
  if(isset($_GET['orders'])){
		 include("view_orders.php");
 }
 if(isset($_GET['customers_details'])){
		 include("customers_details.php");
 }
 
 if(isset($_GET['edit_img'])){
		 include("edit_img.php");
 }

 ?>
 
 </div><!--content end-->



   </div><!--main ends-->   
  
   
    



</body>
</html>
<?php } ?>