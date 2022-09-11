<?php
session_start();
include("includes/db.php");
?>

<html>
<head>
<title>ShopKing</title>
<head>
<link rel="stylesheet" href="css/jquery_popup.css" >

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery_popup.js"></script>
</head>
<body>

<div id="logindiv">
<form method="post" action="login.php" enctype="multipart/form-data" class="form"  id="login">
<img src="img/close.png" class="img" id="cancel" />


<table  class="table_style">
<tr>
<td>
<font style="margin-left:350px;"color="gray" size="8">Shop</font><font color="red" size="8">King</font>.onliinwebshop.net</td>
</tr>
<tr>
<td><br><font  style="font-weight:bold;font-family:tahoma;margin-left:50px;font-size:20px;">Authorized Login</font>
<br><?php

if(!isset($_POST['login'])){
$email="";
$pass=""; 
}
if(isset($_POST['login'])){

$email=mysql_real_escape_string($_POST['email']);
$pass=mysql_real_escape_string($_POST['pass']);
$sel_user="select * from admin where user_email='$email' AND user_pass='$pass'";
$run_user=mysqli_query($con,$sel_user);
$check_user=mysqli_num_rows($run_user);
if ($check_user==0)
{
echo "<p style='margin-left:50px;padding:10px 15px;background:red;width:350px'>Your Password is wrong!";
}
else{
	$_SESSION['user_email']=$email;
	
echo"<script>window.open('index.php?logged_in=You YEs','_self')</script>";

}
}
?><?php echo @$_GET['not_admin'];?>
<?php echo @$_GET['logged_out'];?></td>
</tr>

<tr>
<td><br><input type="text" class="login_page"name="email" <?php echo $email;?>  placeholder="Enter the Email Id" /></td>
</tr>

<tr>
<td><br><input type="password" name="pass" class="login_page" <?php echo $pass;?> placeholder="Enter the password" /></td>
</tr>
<tr>
<td><input type="submit" name="login" value="Authentication" class="login"/></td>
</table>
<img src="img/login.png" style="margin-top:-250px;margin-left:450px;">
<table class="table_style">
<tr>
<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recover your account<br><br><a href="#" style="margin-left:20px;"><img src="img/facebook.png"></a><br><br></td>

</tr>
</table >


</form>



</div>

</body>
</html>



<!--?php
include("includes/db");
if(isset($_POST['login'])){
$c_pass=$_POST['pass'];
if($c_pass=='s')
{
echo"<script>alert('yes')</script>";
echo"<script>window.open('index','_self')</script>";
}

}
?>-->
