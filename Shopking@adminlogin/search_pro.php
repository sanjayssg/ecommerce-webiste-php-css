<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<?php
include("includes/db.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<link type="text/css" rel="stylesheet" href="css/table.css">
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body class="view_pro">
<form action="" method="post">
<br>
<input type="text" name="admin_query" value="<?php echo admin_query; ?>" class="input">
<input type="submit" name="search" value="search product" class="button">
<table class='insert'>
<tr>
<td colspan='7'><font size='6' style='color:white;background:#696969;padding:5px 20px 4px 20px;margin-left:10px;border-radius:7px 7px 0 0'>View Product</font></td>

</tr>
<tr>
<th>Title</th>
<th>Image</th>
<th>Price</th>
<th>Change Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php if(isset($_POST['search'])){
$admin_query=$_POST['admin_query'];
 $get_pro="select *  from products where product_keywords like '%$admin_query%'  ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
	
echo"

	
<tr>

<td> <font color='black' style='float:left' >$pro_title</td>
<td><img src='electronics_images/$pro_image''width='100' height='80' style='float:left'/>
&nbsp;&nbsp;&nbsp;</td>
<td>$pro_price</td>
<td><a href='index.php?edit_img=$pro_id'>Change Image</a></td>
<td><a href='index.php?edit_pro=$pro_id'>Edit</a></td>
<td><a href='index.php?delete_pro=$pro_id'>Delete</a></td>
</tr>



";
		}}?>
</table>
</form>

</body>
</html>
<?php } ?>