<?php
session_start();
if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<?php
include("includes/db.php");
if(isset($_GET['edit_cat'])){
	$cat_id=$_GET['edit_cat'];
	$get_cat="select * from categories where cat_id='$cat_id'";
	$run_cat=mysqli_query($con,$get_cat);
	$row_cat=mysqli_fetch_array($run_cat);
	$cat_id=$row_cat['cat_id'];
	$cat_title=$row_cat['cat_title'];
}
?>
<head>
<link type="text/css" rel="stylesheet" href="css/table.css">
</head>
<body class="insert_cat">  
<form action="" method="post">
<table align="center" class="insert">
<tr>
<td><font size="6" style="color:white;background:#696969;padding:5px 20px 4px 20px;margin-left:10px;border-radius:7px 7px 0 0">Edit Cartegories</font>
</td></tr>
<tr>
<td><input type="text" name="new_cat" value="<?php echo $cat_title;?>" class="input"/>
<input type="submit" name="update_cat" value="Update cat" class="button"/></td>
</tr>
</table>
<?php

if(isset($_POST['update_cat'])){
	$update_id=$cat_id;
$new_cat=$_POST['new_cat'];
$update_cat="update categories set cat_title='$new_cat' where cat_id='$update_id'";
$run_cat=mysqli_query($con,$update_cat);
if($run_cat){
	echo"<script>alert('update')</script>";
echo"<script>window.open('index.php?view_cat','_self')</script>";
}
}
?>
</form>
</body>
<?php } ?>