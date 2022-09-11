<?php

if(!isset($_SESSION['user_email'])){
echo "<script>window.open('login.php?not_admin=You are not Admin!','_self')</script>";
}
else{
?>
<head>
<link type="text/css" rel="stylesheet" href="css/table.css">
</head>
<body class="insert_cat">
<form action="" method="post">
<br>
<br>
<table class="insert">
<tr>
<td colspan="2"><font size="6" style="color:white;background:#696969;padding:5px 20px 3px 20px;margin-left:10px;margin-top:20px;border-radius:7px 7px 0 0">Insert New Categories</font>
</td>
</tr>
<tr>
<td>
<input type="text" name="new_cat"  class="input" required/>
<input type="submit" name="add_cat" value="Insert cat" class="button"/></td>
</tr>
</table>
<?php
include("includes/db.php");
if(isset($_POST['add_cat'])){
$new_cat=$_POST['new_cat'];
$insert_cat="insert into categories (cat_title) values ('$new_cat')";
$run_cat=mysqli_query($con,$insert_cat);
if($run_cat){
	
echo"<script>window.open('index.php?insert_cat','_self')</script>";
}

	echo"not inserted categories pls try again later!!";

}
?>
</form>
</body>
<?php } ?>