<?php

if(!isset($_SESSION['user_email'])){
echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("includes/db.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/table.css">
<script>tinymce.init({selector:'textarea'});</script>

</head>

<body class="insert_pro">
<form  method="post" enctype="multipart/form-data">
<table align="center" class="insert">
<tr>
<td colspan="7"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;border-radius:7px 7px 0 0">Insert Product</font></td>

</tr>
<tr >
<td align="right">Product Title:</td>
<td><input type="text" name="product_title" size="30" class="input"/></td>
</tr> 

<tr>
<td align="right">Product Categories:</td>
<td>
<select name="product_cat" class="select">
<option>select a categories</option>
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
</td>
</tr> 
 
<tr>
<td align="right"><b>Product Images:</b></td>
<td><input type="file" name="product_image" class="file"/></td>
</tr> 

<tr>
<td align="right"><b>Product Price:</b></td>
<td><input type="text" name="product_price" class="input"/></td>
</tr> 
<tr>
<td align="right">Product Description:</td>
<td><textarea name="product_desc" cols="60"  rows="30"></textarea></td>
</tr> 
<tr>
<td align="right">Product Keyword</td>
<td><input type="text" name="product_keywords" class="input"/></td>
</tr> 
<tr>
 <td align="right">Product Period</td>
 <td> <input type="text" name="product_period" class="input"/></td>  
 </tr>

 <td align="right">Product Related</td>
 <td> <input type="text" name="product_related" class="input"/></td>  
 </tr>
 <tr><td  colspan="2" align="center"><input type="submit" name="insert_post" class="button" /></td>
 </tr>
 </table>
 <?php
if(isset($_POST['insert_post']))
{
	//getting the text data from the fields
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
 
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];
$product_related=$_POST['product_related'];
	$product_pre=$_POST['product_period'];
//getting the image from the field
$product_image=$_FILES['product_image']['name'];
$product_image_tmp=$_FILES['product_image']['tmp_name'];
move_uploaded_file($product_image_tmp,"electronics_images/$product_image");

$insert_product="insert into products(product_cat,product_title,product_price,product_desc,product_image,product_keywords,product_period,product_related) values('$product_cat','$product_title','$product_price','$product_desc','$product_image','$product_keywords','$product_pre','$product_related')";

$insert_pro=mysqli_query($con,$insert_product);
if($insert_pro){
	echo"<script>alert('Product Inserted Succesfully')</script>";
	echo"<script>window.open('index.php?insert_product','_self')</script>";
}
}
?>
</form>
</body>
</html>


<?php } ?>