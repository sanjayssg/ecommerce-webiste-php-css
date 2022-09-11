<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<head>
<link type="text/css" rel="stylesheet" href="css/table.css">
</head>
<body class="view_cat">

<form action="" method="post">
<table class="insert">
<tr>
<td colspan="7"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;border-radius:7px 7px 0 0">View  Categories</font></td>

</tr>
<tr>
<th>Cat Id</th>
<th>Cat Title</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php 
//getting the total price
include("includes/db.php");
			global $con;
			$count=0;
	$get_cat="select * from categories  ";
	$run_cat=mysqli_query($con,$get_cat);
	while($row_cat=mysqli_fetch_array($run_cat)){
		$cat_id=$row_cat['cat_id'];
		$cat_title=$row_cat['cat_title'];
		
		$count+=1;
		?>
<tr>

<td><?php echo $count; ?></td>
<td><?php echo "<font color='black' style='float:left' >".$cat_title;?></td>
<td><a href="index.php?edit_cat=<?php  echo $cat_id;?>">Edit</a></td>
<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
</tr>
<?php
			
	
	}
?>


</table>
</form>
<?php } ?>