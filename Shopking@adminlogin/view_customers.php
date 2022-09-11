<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<?php
include("includes/db.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<link type="text/css" rel="stylesheet" href="css/table.css">
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

</head>
<body class="view_customers">
<form action="" method="post">
<table class="insert">
<tr>
<td colspan="7"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;border-radius:7px 7px 0 0">View Customers</font></td>

</tr>

<tr>
<th>SN</th>
<th>Name</th>
<th>Email</th>

<th>Image</th>
<th>Register Date</th>
<th>Delete</th>
</tr>
<?php 
//getting the total price

			
			$count=0;
	$get_c="select * from customers  ";
	$run_c=mysqli_query($con,$get_c);
	while($row_c=mysqli_fetch_array($run_c)){
		$c_id=$row_c['customer_id'];
		$c_name=$row_c['customer_name'];
		$c_email=$row_c['customer_email'];
		$c_image=$row_c['customer_image'];
		$c_date=$row_c['register_date'];
		$count+=1;
		?>
<tr>

<td><?php echo $count; ?></td>
<td><?php echo "<font color='black' style='float:left' >".$c_name;?></td>
<td><?php echo $c_email;?></td>
<td><img src="../customers/customers_images/<?php echo$c_image;?>"width="60" height="70" style="float:left"/>
&nbsp;&nbsp;&nbsp;</td>
<td><?php echo $c_date;?></td>
<td><a href="delete_c.php?delete_c=<?php echo $c_id;?>">Delete</a></td>
</tr>
<?php
			
	}

?>


</table>
</form>
</body>
</html>
<?php } ?>