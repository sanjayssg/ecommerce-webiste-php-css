<head>
<link rel="stylesheet" href="css/tabel.css">
</head>
<body>
 <?php 
include("includes/db.php");
if(isset($_GET['customers_details'])){
$get_email=$_GET['customers_details'];
$get_customer="select * from customers where customer_email='$get_email'";
$run_customer=mysqli_query($con,$get_customer);
while($row_customer=mysqli_fetch_array($run_customer)){
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
	$register_date=$row_customer['register_date'];
}
}
?>
<form action="" method="get">
<table class="insert">
<tr>
<td colspan="7"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;border-radius:7px 7px 0 0">Customers Details</font></td>

</tr>
<tr>
<td align="right">Customer First Name </td>
<td><?php echo $name;?></td>
</tr>
<td align="right">Customer Last Name </td>
<td><?php echo $lname;?></td>
</tr>
<td align="right">Customer Email </td>
<td><?php echo $email;?></td>
</tr>
<td align="right">Customer Image </td>
<td><img src="../customers/customers_images/<?php echo $image?> " width="100"height="100"></td>
</tr>
<td align="right">Customer Country </td>
<td>India</td>
</tr>
<td align="right">Customer City </td>
<td><?php echo $city;?></td>
</tr>
<td align="right">Customer contact </td>
<td><?php echo $contact;?></td>
</tr>
<td align="right">Customer Add</td>
<td><?php echo $address;?></textarea></td>
</tr>
<td align="right">Customer Pin</td>
<td><?php echo $pin;?></td>
</tr>
<tr>
<td align="right">Register Date</td>
<td><?php echo $register_date;?></td>
</tr>
</table>
</form>
</body>