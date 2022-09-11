
<html>
<head>
<link rel="stylesheet" href="css/my_account.css" media="all">
<style rel="stylesheet" type="text/css">
.desc{
	margin-top:10px;
	
}
.desc h1{
	font-weight:bold;
		margin-left:10px;
}
.desc ul{
	list-style-type:square;
	
}
.desc li{
	margin-top:7px;
	text-align:left;

}
</style>
</head>
<body class="delete">
<font size="4" style="font-weight:bold;font-family:tahoma;text-align:left;">Deactivate Your Account</font><br><br>
<form action="" method="post">
<table >
<tr>
<td>Email Address</td>
<td>
 <?php if(isset($_SESSION['customer_email']))
	 {
	 echo"<font style='color:green;float:left;margin-top:1px;margin-left:40px;font-size:20px;'><br>".$_SESSION['customer_email']."</font>";
	}?>
	</td>
	</tr>
	<tr>
<td><br>Password</td>
<td><br><input type="password" name="current_pass"style="width:240px;height:30px;margin-left:43px;"/></td>
<?php
include("includes/db.php");
if(isset($_POST['yes'])){
	$user=$_SESSION['customer_email'];
	$delete_pass=$_POST['current_pass'];
$sel_pass="select * from customers where customer_pass='$delete_pass' AND customer_email='$user'";
$run_pass=mysqli_query($con,$sel_pass);
$check_pass=mysqli_num_rows($run_pass);
if($check_pass==0){
echo "<font style='margin-top:20px;padding:10px;padding-right:160px;color:white;background:red;'>Your Password is wrong!</font>";

	}
		else{
	$delete_customer="delete from customers where customer_email='$user'";
    $run_customer=mysqli_query($con,$delete_customer);
	echo"<script>alert('Account has been deleted')</script>";
	session_start();
session_destroy();
echo"<script>window.open('index.php','_self')</script>";

	
}

}
if(isset($_POST['no'])){
echo"<script>window.open('my_account.php','_self')</script>";

}
?>

</tr>
	</td>
	</tr>
	<tr>
	<td>
<br><input type="submit" name="yes" value="Continue Deactivate" style="background:#036;color:white;width:150px;height:30px;"/></td>
<td>
<br><input type="submit" name="no" value="Cancle" style="background:#036;color:white;width:100px;margin-left:40px;height:30px;"/>
</td>
</tr>
</table>
</form>
<div class="desc">
<h1>When You Deactivate Your Account</h1>
<ul>
<li>You are logged out of your ShopKing Account</li>
<li>Your public profile on Shopking is no longer visible</li>
<li>Your reviews/ratings are still visible, while your profile information is shown as 'unavailabe' as a result of deactivation</li>
<li>Your wishlist items are no longer accessible through the associated public hyperlink. Wishlist is shown as 'unavailable' as a result of deactivation</li>
<li>You will be unsubscibed from receiving promotional emails from Shopking</li>
<li>Your Whole data may be lost including your accounts and subsciption</li>
</ul>
<br><br><br>
<ul>
<h1> How To recover Deactivated Account ?</h1>
<li> There is No Way to Active your account from ShopKing.</li>
</ul>
</div>
</body>
</html>