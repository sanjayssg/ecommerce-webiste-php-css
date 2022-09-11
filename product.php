<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ss_computech") or die(mysql_error());

$partialProducts=$_POST['partialProduct'];
$products=mysql_query("select product_title from products where prduct_title like '%$partialProducts%'");
while($product=mysql_fetch_array($products)){
echo "<div>".$product['product_title']."<div>";
}
?>