

<?php
include("includes/db.php");
if(isset($_GET['cancel_order'])){
$user=$_SESSION['customer_email'];
$cancel_id=$_GET['cancel_order'];
date_default_timezone_set("Asia/Kolkata");
$cancel_date=date('d-M-Y  D h:i:s A');
$delete_pro="update orders set status='Cancel by User',cancel_date='$cancel_date' where p_id='$cancel_id' and user_email='$user'";
$run_delete=mysqli_query($con,$delete_pro);
if($run_delete){

echo"<script>window.open('my_account.php?my_orders,'_self')</script>";

}
}
?>