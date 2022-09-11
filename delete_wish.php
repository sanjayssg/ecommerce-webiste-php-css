

<?php
include("includes/db.php");
if(isset($_GET['delete_wish'])){
$user=$_SESSION['customer_email'];
$delete_id=$_GET['delete_wish'];
$delete_pro="delete from wishlist where p_id='$delete_id' and customer_email='$user'";
$run_delete=mysqli_query($con,$delete_pro);
if($run_delete){

echo"<script>window.open('wishlist.php,'_self')</script>";

}
}
?>