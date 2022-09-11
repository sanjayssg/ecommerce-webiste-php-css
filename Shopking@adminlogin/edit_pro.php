<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<?php
include("includes/db.php");
if(isset($_GET['edit_pro'])){
	
	$get_id=$_GET['edit_pro'];
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
		$product_related=$row_pro['product_related'];
		$get_cat="select * from categories where cat_id='$pro_cat'";
		$run_cat=mysqli_query($con,$get_cat);
		$row_cat=mysqli_fetch_array($run_cat);
		$category_title=$row_cat['cat_title'];
	
}
?>
<html >
<head>

<title>Edit Product</title>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
<link type="text/css" rel="stylesheet" href="css/table.css">

</head>

<body bgcolor="#CCCCCC">
<form action="" method="post" enctype="multipart/form-data">
<table align="center" class="insert">
<tr>
<td colspan="7"><font size="6" style="color:white;background:#696969;padding:5px 20px 4px 20px;margin-left:10px;border-radius:7px 7px 0 0">Edit Product</font><a href="index.php?view_products">View Products</td>
</tr>
<tr >
<td align="right">Product Title:</td>
<td><input type="text" name="product_title" size="30" class="input" value="<?php echo $pro_title;?>"/></td>
</tr> 

<tr>
<td align="right">Product Categories:</td>
<td>
<select name="product_cat" class="select">
<option><?php echo $category_title; ?></option>
<?php


$get_cats="select * from categories ";
				  $run_cats=mysqli_query($con,$get_cats);
				  while($row_cats=mysqli_fetch_array($run_cats))
				  {
					  $cat_id=$row_cats['cat_id'];
					    $cat_title=$row_cats['cat_title'];
						echo"<option value='$cat_id'>$cat_title</option>";
						}
						
?>
</select>
(Please Select Categories)
</td>
</tr> 
 
<tr>
<td align="right"><b>Product Images:</b></td>
<td>
<img src="electronics_images/<?php echo $pro_image;?>"width="60" height="70" /></td>
</tr> 

<tr>
<td align="right"><b>Product Price:</b></td>
<td><input type="text" name="product_price" class="input" value="<?php echo $pro_price;?>"/></td>
</tr> 
<tr>
<td align="right">Product Description:</td>
<td><textarea name="product_desc" cols="60" rows="30"><?php echo $pro_desc;?></textarea></td>
</tr> 
<tr>
<td align="right">Product Keyword</td>
<td><input type="text" name="product_keywords"class="input"value="<?php echo $pro_keywords;?>"/></td>
</tr> 
<tr>
 <td align="right">Product Period</td>
 <td> <input type="text" name="product_period" class="input"value="<?php echo $pro_per;?>"/></td>  
 </tr>
 
<tr>
 <td align="right">Product Related</td>
 <td> <input type="text" name="product_related" class="input"value="<?php echo $product_related;?>"/></td>  
 </tr>
 <tr><td  colspan="2" align="center"><input type="submit" class="button"name="update_product"  /></td>
 </tr>
 
</form>
</body>
</html>

<?php
if(isset($_POST['update_product']))
{
	//getting the text data from the fields
	$update_id=$pro_id;
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
 
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];
	$product_per=$_POST['product_period'];
	$product_related=$_POST['product_related'];
//getting the image from the field


$update_product="update products set product_cat='$product_cat',product_title='$product_title',product_price='$product_price',product_desc='$product_desc'
,product_keywords='$product_keywords',product_period='$product_per',product_related='$product_related' where product_id='$update_id' ";

$run_product=mysqli_query($con,$update_product);
if($run_product){
	echo"<script>alert('Product has been updated Succesfully')</script>";
	echo"<script>window.open('index.php?edit_pro=$update_id','_self')</script>";
}
}
?>
<?php }
 ?>