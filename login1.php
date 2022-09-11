<html>
<head>
<title>Login to ShopKing</title>
<body>
<div>
<?php
include("includes/db.php");

?>
<form method="post" action="" enctype="multipart/form-data">
<table  class="table_style">
<tr >
<td><br><font size="5" style="font-weight:bold;font-family:tahoma;margin-left:50px;">Login</font></td>
</tr>

<tr>
<td>
<br>
<?php
if(!isset($_POST['login'])){
$c_email="";
$c_pass="";
}
if(isset($_POST['login'])){
$ip=getIp();
$c_email=$_POST['email'];
$c_pass=$_POST['pass'];
$sel_c="select * from customers where customer_pass='$c_pass' AND customer_email='$c_email' ";
$run_c=mysqli_query($con,$sel_c);
$check_customer=mysqli_num_rows($run_c);
$ip=getIp();
$sel_cart="select * from cart where ip_add='$ip'";
$run_cart=mysqli_query($con,$sel_cart);
$check_cart=mysqli_num_rows($run_cart);
date_default_timezone_set("Asia/Kolkata");
$login_date=date('d-M-Y  D h:i:s A');
if($check_customer==0)
{
echo"<font id='error_text'>Password or Email wrong</font>";
}

elseif($check_customer>0 AND $check_cart==0){

setcookie("s_email",$_POST["email"],time()+604800);
setcookie("s_pass",$_POST["pass"],time()+604800);
$_SESSION['customer_email']=$c_email;
$login_session="insert into customer_login (customer_email,login_date,ip_add) values('$c_email','$login_date','$ip')";
$run_login=mysqli_query($con,$login_session);
echo"<script>window.open('my_account.php','_self')</script>";
}
else{
setcookie("s_email",$_POST["email"],time()+604800);
setcookie("s_pass",$_POST["pass"],time()+604800);
$_SESSION['customer_email']=$c_email;
$login_session="insert into customer_login (customer_email,login_date,ip_add) values('$c_email','$login_date','$ip')";
$run_login=mysqli_query($con,$login_session);
echo"<script>window.open('checkout.php','_self')</script>";

}
}
?><br>



<br><input type="text" class="login_page" name="email" value="<?php echo $c_email;?>" placeholder="Enter the email/mobile" required/></td>
</tr>

<tr>
<td><br><input type="password" name="pass" class="login_page" value="<?php echo $c_pass;?>"placeholder="Enter the password" required /></td>
</tr>
<tr>
<td><input type="submit" name="login" value="Login" class="login"/>

<a href="forgot_pass.php" color="skyblue" >forgot password?</a>
</td>
</tr>
<tr>
<td><br><font style="margin-left:40px;">New to ShopKing?


<a href="customer_register.php" >Signup</a>
</td>
</tr>



</table>
<img src="img/login.png" style="margin-top:-250px;margin-left:500px;">
<table class="table_style">
<tr>
<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recover your account<br><br><a href="#" style="margin-left:20px;"><img src="img/facebook.png"></a><br><br></td>

</tr>
</table >
</form>

<?php if(isset($_SESSION['forgot_pass'])){
	include("forgot_pass");
}?>
</div>
</body>
</html>