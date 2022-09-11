<?php
include("includes/db.php"); //include config file
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}

//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range. 
$results = $mysqli->prepare("SELECT product_id,product_image, product_title, product_price,product_strike FROM products ORDER BY product_id Asc LIMIT $position, 7");
$results->execute(); //Execute prepared Query
$results->bind_result($pro_id,$pro_image,$pro_title,$pro_price,$pro_strike); //bind variables to prepared statement

//output results from database

while($results->fetch()){ //fetch values
	 echo "
		<a href='details?pro_id=$pro_id'><div id='single_product'><div id='under_product'>
		<img src='admin/electronics_images/$pro_image' width='230' height='230'> 
	    <font color='#3333CC' size='4' style='font-weight:bold'> <center>$pro_title</center></font>
	    <font size='2' style='float:left; margin:12px;margin-left:5px'>Rs.&nbsp;&nbsp;</font> 
		<font size='5.4' color='#c30' style=' float:left; margin:10px; margin-left:-15px'>$pro_price </font>
		<font size='1.5' style='float:right; margin-top:35px;margin-right:20px'>Rs.&nbsp;&nbsp;</font> 
		<font size='2' color='#c30' style=' float:right;margin-top:35px;margin-right:-20px'><strike>$pro_strike</strike></font>
		<div id='buynow'>
		<ul>
	    <li>Buy Now</li>
	    </ul>
	    </div>
	    </div>
	    </div>
		</a>
		";	
}



?>

