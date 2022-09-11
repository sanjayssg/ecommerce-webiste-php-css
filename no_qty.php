<?php
include("includes/db.php");
if(isset($_GET['pro_id'])){

$ip=getIp();
$pro_id=$_GET['pro_id'];
$new_qty=8;
$update_qty="update cart set qty='$new_qty' where ip_add='$ip' and p_id='$pro_id' ";
$run_qty=mysqli_query($con,$update_qty);
if($run_qty){

echo"<script>window.open('wishlist.php,'_self')</script>";

}}
?>