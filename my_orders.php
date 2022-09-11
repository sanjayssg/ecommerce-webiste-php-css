<?php include("includes/db.php");
?>
		<body class="my_orders" id="orders">
		<form>
		<table class="insert">
		
		<tr>
		<td colspan="8"><font size="6" style="color:blue;background:lightgray;border-radius:7px 7px 0 0;  padding:5px 2px 3px 1px;"><a href="my_account.php?my_orders" class="my_orders">Current orders</a></font><font size="6" style="color:blue;background:lightgray;border-radius:7px 7px 0 0;  padding:5px 15px 3px 10px;"><a href="my_account.php?all_orders" class="all_orders">My orders</a></font></td>
		</tr>
		
		<tr>
		<td>S/N</td>
		<td>Product Name</td>
		<td>Product Price</td>
		<td>Order Date</td>
		<td>QTY</td>
		<td>STATUS</td>
		<td>CANCEL ORDER</td>
			<?php
//getting the total price

	global $con;
		
$user=$_SESSION['customer_email'];
			$count=0;
	$get_c="select * from orders where user_email='$user' and status='pending'";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
		$c_ip=$row_c['user_ip'];
		$c_title=$row_c['p_title'];
		$c_id=$row_c['p_id'];
		$c_qty=$row_c['p_qty'];
		$c_email=$row_c['user_email'];
		$c_price=$row_c['price'];
			$c_date=$row_c['date'];
			$c_status=$row_c['status'];
		$count+=1;
	
	
		
		  ?>
		</tr>
		
	<tr>
	<td><?php echo $count; ?></td>
	<td><?php echo $c_title; ?></td>
	<td><?php echo $c_price; ?></td>
    <td><?php echo $c_date; ?></td>
	<td><?php echo $c_qty; ?></td>
	<td><?php echo $c_status; ?></td>
	
	<td><a href="index.php?cancel_order=<?php echo $c_id;?>">Cancel</td>
	<?php }?>
		</tr>	

		</table>
		</form>
		
</body>