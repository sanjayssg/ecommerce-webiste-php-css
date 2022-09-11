
<?php
include("includes/db.php");
include("..//functions/function.php");

?>
<html>
<head>
<meta charset="UTF-8"><title>Product Cart</title>
<link type="text/css" rel="stylesheet" href="..//font-awesome/css/font-awesome.min.css">
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/table.css">

<link rel="shortcut icon" type="image/x-icon" href="img/king.png"/>
</head>
<body class="view_cart">
<table style="margin-top:10px;"  class="insert"  >
<?php if(isset($_GET['remove_cart'])){
	 include("remove_cart.php");
 }?>
<?php if(isset($_GET['pro_id'])){
	 include("no_qty");
 }?>

<br><br>
<tr>
<th>SR</th>
<th>ITEM</th>
<th>PRICE</th>
<th>IP Address</th>
</tr>
<?php 
//getting the total price
$total=0;
	$count=0;
	global $con;
	$ip=getIp();
	$sel_price="select * from cart   ";
	$run_price=mysqli_query($con,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
		$cus_ip=$p_price['ip_add'];
		$pro_qty=$p_price['qty'];
		$pro_price="select * from products where product_id='$pro_id'";
		$run_pro_price=mysqli_query($con,$pro_price);
		
		while($pp_price=mysqli_fetch_array($run_pro_price)){
			$product_price=array($pp_price['product_price']);
			$product_title=$pp_price['product_title'];
			$product_image=$pp_price['product_image'];
			$single_price=$pp_price['product_price'];
            $product_per=$pp_price['product_period'];
			$values=array_sum($product_price);
             $values=$values*$pro_qty;
			$total +=$values;
			$sub_total=$values;
            $count+=1;
			

	
?>

<tr align="center">
<td><?php echo $count;?></td>
<td >
<img src="electronics_images\<?php echo$product_image;?>"width="60" height="70" style="float:left;margin-left:10px;"/>
&nbsp;&nbsp;&nbsp;
<?php echo "<font color='black' style='float:left' >".$product_title;?></font><br>
<br>
<?php echo $product_per;?>
</td>





<td><br><?php echo"Rs.".number_format($single_price); ?></td>
<td><?php echo $cus_ip;?></td>


	<?php  	

	}}
	 ?>

</tr>






</table>
</form>