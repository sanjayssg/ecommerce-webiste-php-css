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
<link type="text/css" rel="stylesheet" href="..//font-awesome/css/font-awesome.min.css">
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body class="view_pro">
<form action="" method="post">
<table class="insert">
<tr>
<td colspan="8"><font size="6" style="color:white;background:#696969;padding:5px 20px 4px 20px;margin-left:10px;border-radius:7px 7px 0 0">View Product</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?search_pro" style="background:Blue;color:white;padding:5px;" ><i class="fa fa-search">Search Product</i></a>
</td>


</tr>
<tr>
<th>SN</th>
<th>Title</th>
<th>Image</th>
<th>Price</th>
<th>Warranty</th>
<th>Change Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php 
//getting the total price

			
			$count=0;
	$get_pro="select * from products  ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_period=$row_pro['product_period'];
		$pro_per=$row_pro['product_period'];
		$count+=1;
		?>
<tr>

<td><?php echo $count; ?></td>
<td><?php echo "<font color='black' style='float:left' >".$pro_title;?></td>
<td><img src="electronics_images/<?php echo $pro_image;?>"width="100" height="80" style="float:left"/>
&nbsp;&nbsp;&nbsp;</td>
<td><?php echo"Rs.".$pro_price ?></td>
<td><?php echo $pro_period ?></td>
<td><a href="index.php?edit_img=<?php  echo $pro_id;?>">Change</a></td>
<td><a href="index.php?edit_pro=<?php  echo $pro_id;?>">Edit</a></td>
<td><a href="index.php?delete_pro=<?php echo $pro_id;?>">Delete</a></td>
</tr>
<?php
			
	}

?>


</table>
</form>
</body>
</html>
<?php } ?>