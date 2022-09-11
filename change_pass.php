<html>
<head>
<link rel="stylesheet" href="css/my_account.css" media="all">
</head>
<body class="change">
 <form action="" method="post" enctype="multipart/form-data">


<font size="4" style="font-weight:bold;font-family:tahoma;text-align:left;">Change Password</font><br><br>
<?php
include("includes/db.php");
if(!isset($_POST['change_pass'])){
$current_pass="";
$new_again="";
$new_pass="";
}
if(isset($_POST['change_pass'])){
	$user=$_SESSION['customer_email'];
	$current_pass=$_POST['current_pass'];
	$new_pass=$_POST['new_pass'];
	$new_again=$_POST['new_pass_again'];
$sel_pass="select * from customers where customer_pass='$current_pass' AND customer_email='$user'";
$run_pass=mysqli_query($con,$sel_pass);
$check_pass=mysqli_num_rows($run_pass);

if($check_pass==0){
echo "<font style='margin-top:90px;padding:10px;padding-right:280px;color:white;background:red;'>Your Current Password is wrong!!!</font>";

	}
		else if($new_pass!=$new_again){
		echo "<font style='margin-top:60px;padding:10px;padding-right:280px;color:white;background:red;'>New Password is not match!!!</font>";	

		}
		elseif(strlen($new_pass)<8 && strlen($new_again)<8){
echo"<font style='margin-top:60px;padding:10px;padding-right:280px;color:white;background:red;'>Pls Enter Password more than 8 character</font>";
}
		else if($check_pass!=0 && $new_pass=$new_again  )
		{
		
			$update_pass="update customers set customer_pass='$new_pass' where customer_email='$user'";
		$run_update=mysqli_query($con,$update_pass);
		echo"<font style='margin-top:60px;padding:10px;padding-right:280px;color:white;background:green;'>Your Password has been changed</font>";
        $current_pass="";
		$new_pass="";
		$new_again="";
		}
}

?><br><br>

<table align="center" width="750" >
<tr>
<td>Current Password </td>
<td><input type="password" name="current_pass" value="<?php echo $current_pass;?>" class="change_page" Placeholder="Enter the Current Password" required></td>
</tr>
<tr>
<td>New Password</td><td>
<input type="password" name="new_pass" class="change_page" value="<?php echo $new_pass;?>" maxlength=15 Placeholder="Enter the New Password" required></td>
</tr>
<td>Retype Password</td><td>
<input type="password" name="new_pass_again" class="change_page" value="<?php echo $new_again;?>" maxlength=15 Placeholder="Enter the Confirm Password" required></td>
</tr>
<tr>
<td><input type="submit" name="change_pass" value="Change" class="change_button"/></td>
</tr>
</table>
</form>

</body>
</html>
   
