<?php
include("includes/db.php");

$ip=getIp();
if(isset($_GET['remove_cart'])){
	$user=$_SESSION['customer_email'];
$remove_id=$_GET['remove_cart'];

	$delete_product="delete from cart where  p_id='$remove_id' AND ip_add='$ip'";
	$run_delete=mysqli_query($con,$delete_product);
	if($run_delete){
		echo"<script>window.open('cart.php','_self')</script>";
		
		}	
		
	}
	
	

?>