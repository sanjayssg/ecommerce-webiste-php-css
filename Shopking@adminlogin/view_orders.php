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
<body class="view_orders">
<form action="" method="post">
<table class="insert">
<tr>
<td colspan="10"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;border-radius:7px 7px 0 0">View orders</font></td>

</tr>

<tr>
<th>SN</th>
<th>User ip</th>
<th>Pro id</th>
<th>Pro price</th>
<th>Order Date</th>
<th>Qty</th>
<th>Email</th>
<th>Customers Details</th>
<th>Delivery Report</th>
<th>Status</th>
</tr>
<?php 
//getting the total price

			
			$count=0;
	$get_c="select * from orders  ";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
		$c_ip=$row_c['user_ip'];
		$c_id=$row_c['p_id'];
		$c_qty=$row_c['p_qty'];
		$c_email=$row_c['user_email'];
		$c_price=$row_c['price'];
		$c_date=$row_c['date'];
		$c_status=$row_c['status'];
		$count+=1;
		?>
<tr>

<td><?php echo $count; ?></td>
<td><?php echo "<font color='black' style='float:left' >".$c_ip;?></td>
<td><?php echo $c_id;?></td>
<td><?php echo $c_price;?></td>
<td><?php echo $c_date;?></td>
<td><?php echo $c_qty;?></td>
<td><?php echo $c_email;?></td>
<td><a href="index.php?customers_details=<?php echo $c_email; ?>">Details</a></td>
<td><?php echo $c_status;?></td>
<td><a href="index.php?change_status">Done</a></td>
</tr>
<?php
			
	}

?>


</table>
</form>
</body>
</html>
<?php } ?>