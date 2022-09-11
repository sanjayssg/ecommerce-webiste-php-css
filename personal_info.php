
<?php
include("includes/db.php");

$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];
$name=$row_customer['customer_name'];
$lname=$row_customer['customer_lname'];
$email=$row_customer['customer_email'];
$pass=$row_customer['customer_pass'];
$image=$row_customer['customer_image'];
$city=$row_customer['customer_city'];
$contact=$row_customer['customer_contact'];
$pin=$row_customer['customer_pin'];
$address=$row_customer['customer_address'];
?>
<html>
<head>
<link rel="stylesheet" href="css/my_account.css" media="all">
</head>
<body class="personal">
 <form action="" method="post" enctype="multipart/form-data">


<font size="4" style="font-weight:bold;font-family:tahoma;text-align:left;">Personal Information</font><br><br>
<?php
include("includes/db.php");
if(isset($_POST['save'])){
$ip=getIp();
$customer_id=$c_id;
$c_name=$_POST['c_name'];
$c_lname=$_POST['c_lname'];
$c_city=$_POST['c_city'];
$c_contact=$_POST['c_contact'];
$c_pin=$_POST['c_pin'];
$c_address=$_POST['c_address'];

$update_c="update customers set customer_name='$c_name',customer_lname='$c_lname',customer_city='Nallasopara',customer_contact='$c_contact',
customer_pin='$c_pin',customer_address='$c_address' where customer_id='$customer_id'";
$run_update=mysqli_query($con,$update_c);

if($run_update){
	
	echo"<script>window.open('my_account.php?personal_info','_self')</script>";
	
}
else{
echo "<font style='margin-top:60px;padding:10px;padding-right:280px;color:white;background:green;'>Record Saved Successfully</font>";	
}

}

?><br><br>
<table align="center" width="750" size="3" >
<tr>
<td>First Name</td><td>
<input type="text" name="c_name" class="register_page"  value="<?php echo $name;?>"></td>
</tr>
<td>Last Name</td><td>
<input type="text" name="c_lname" class="register_page"  value="<?php echo $lname;?>"></td>
<tr>
<td>Country </td><td><font color="green" class="service_page">India (Service Available only in India)</font></td>
</tr>
<tr>
<td><br>City</td><td><br>
<font color="green" class="service_page">Nallasopara (Service Available only in Nallsopara)</font></td>
</tr>
<tr>
<td>Contact no</td><td><input type="text" name="c_contact" class="register_page" value="<?php echo $contact;?>"maxlength="10" ></td>
</tr>
<tr>
<td>Pin Code</td><td><input type="text" name="c_pin" class="register_page" value="<?php echo $pin;?>" maxlength="6"></td>
</tr>
<tr>
<td >Address</td><td>
<textarea name="c_address"  cols="36" rows="5" style="font-size:20px;"><?php echo $address;?></textarea>
<br><font size="3"style="margin-left:10px;">(Maximum Limit: 200 characters)</font></td>
</tr>
<tr>
<td><input type="submit" name="save" value="Save change" class="register_button"/>   </td>
</tr>
</table>
</form>

</body>
</html>