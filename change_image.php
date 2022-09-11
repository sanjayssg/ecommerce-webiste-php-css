<?php
include("includes/db.php");

$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];

$image=$row_customer['customer_image'];

?>
<html>
<head>
<link rel="stylesheet" href="css/my_account.css" media="all">
</head>
<body class="image">
 <form action="" method="post" enctype="multipart/form-data">


<font size="4" style="font-weight:bold;font-family:tahoma;text-align:left;">Change Profile Image</font><br><br>

<table align="center" width="750" >
<tr><br>
<td>Profile Image</td>
<td><br><img src="customers/customers_images/<?php echo $image?>" width="150" height="100" style="margin-top:-35px;margin-bottom:10px"></td>
</tr>
<tr>
<td>New Image</td>
<td><input type="file" name="c_image" class="register_page"  placeholder="chose" style="margin-right:100px" ></td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="change" class="register_button" value="Change" style="margin-right:100px" />
</td>

</tr>

</table>


</form>

</body>
</html>
<?php
if(isset($_POST['change'])){
$ip=getIp();
$customer_id=$c_id;
$c_image=$_FILES['c_image']['name'];
$c_image_tmp=$_FILES['c_image']['tmp_name'];
move_uploaded_file($c_image_tmp,"customers/customers_images/$c_image");
$update_c="update customers set customer_image='$c_image' where customer_id='$customer_id'";
$run_update=mysqli_query($con,$update_c);
if($run_update){
echo "<script>alert('update successfully')</script>";
	echo"<script>window.open('my_account.php?change_image','_self')</script>";
		
}
}
?>

   
