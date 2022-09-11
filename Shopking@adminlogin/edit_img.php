<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<?php
include("includes/db.php");
if(isset($_GET['edit_img'])){
	
	$get_id=$_GET['edit_img'];
	$get_pro="select * from products where product_id='$get_id'";
	$run_pro=mysqli_query($con,$get_pro);
	$row_pro=mysqli_fetch_array($run_pro);
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_desc=$row_pro['product_desc'];
		
		$pro_image=$row_pro['product_image'];
		$pro_keywords=$row_pro['product_keywords'];
		$pro_per=$row_pro['product_period'];
		
		$get_cat="select * from categories where cat_id='$pro_cat'";
		$run_cat=mysqli_query($con,$get_cat);
		$row_cat=mysqli_fetch_array($run_cat);
		$category_title=$row_cat['cat_title'];
	
}
?>
<html >
<head>

<title>Edit Image</title>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<link type="text/css" rel="stylesheet" href="css/table.css">

</head>

<body bgcolor="#CCCCCC">
<form action="" method="post" enctype="multipart/form-data">
<br>
<br>
<img src="electronics_images/<?php echo $pro_image;?>"width="100" height="80" style="float:left"/>
<br>
<input type="file" name="file_img"><br>
 <input type="submit" name="update_product_img" value="Save">
</form>
</body>
</html>

<?php
if(isset($_POST['update_product_img']))
{
	//getting the text data from the fields
	$update_id=$pro_id;
	
$p_image=$_FILES['file_img']['name'];
$p_image_tmp=$_FILES['file_img']['tmp_name'];
	
//getting the image from the field

move_uploaded_file($p_image_tmp,"electronics_images/$p_image");
$update_product="update products set product_image='$p_image' where product_id='$update_id' ";

$run_product=mysqli_query($con,$update_product);
if($run_product){
	echo"<script>alert('Product has been updated Succesfully')</script>";
	echo"<script>window.open('index.php?view_products','_self')</script>";
}
}
?>
<?php }
 ?>