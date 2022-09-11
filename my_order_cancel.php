<?php include("includes/db.php");
?>
		<body class="my_order_cancel">
		<form>
		<table class="insert">
		
		<tr>
		<td colspan="8"><font size="6" style="color:blue;background:lightgray;border-radius:7px 7px 0 0;  padding:5px 2px 3px 1px;">
		Cancelled orders</font></td>
		</tr>
		
		<tr>
		<td>S/N</td>
		<td>Product Details</td>
		<td>Product Price</td>
		<td>Order Date</td>
		<td>QTY</td>
		<td>Cancel Date</td>
		<td>Status</td>
		
			<?php
//getting the total price

	global $con;
		
$user=$_SESSION['customer_email'];
			$count=0;
	$get_c="select * from orders where user_email='$user' and status='Cancel by user'";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
		$c_ip=$row_c['user_ip'];
		$c_id=$row_c['p_title'];

		$c_qty=$row_c['p_qty'];
		$c_email=$row_c['user_email'];
		$c_price=$row_c['price'];
			$c_date=$row_c['date'];
			$cancel_date=$row_c['cancel_date'];
			$c_status=$row_c['status'];
		$count+=1;
	
	
		
		  ?>
		</tr>
		
	<tr>
	<td><?php echo $count; ?></td>
	<td><?php echo $c_id; ?></td>
	<td><?php echo $c_price; ?></td>
    <td><?php echo $c_date; ?></td>
	<td><?php echo $c_qty; ?></td>
	<td><?php echo $cancel_date; ?></td>
	<td><?php echo $c_status; ?></td>

	<?php } ?>
		</tr>	

		</table>
		</form>
		
</body>