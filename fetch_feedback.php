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
$results = $mysqli->prepare("SELECT id,customer_name,customer_email,customer_image,date,comment FROM feedback ORDER BY id Asc LIMIT $position, $item_per_page");
$results->execute(); //Execute prepared Query
$results->bind_result($id,$name,$email,$image,$date,$comment); //bind variables to prepared statement

//output results from database

while($results->fetch()){ //fetch values
	 echo "
	
		<ul>
<li>
<table style='margin-left:10px;margin-top:30px;width:600px;'>
<tr>
<td rowspan='3' colspan=''><img src='customers/customers_images/$image' width='70' height='70' style='float:left;border:1px solid black;margin-top:0px;margin-left:10px;'/>
<font style='margin-left:30px;font-size:20px;'>$name  </font>$comment 
<pre><font style='margin-left:30px;font-size:15px;'>$date</font></pre></td>
</tr>

</table>
<?php } ?>

</li>
</ul>
";
}



?>

