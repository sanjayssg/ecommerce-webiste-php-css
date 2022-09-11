<?php
reguire_once"connect.php";
connect();

$id=$_POST['lastId'];
$query=mysql_query("select * from getmore where id > $id  limit 5");
if(mysqli_num_rows($query)){
while( $data=mysql_fetch_assoc($query)){
$getmore=$data['data'];
$lastid=$data['id'];
echo"<li>$getmore</li>";
}
echo "<li class='loadmore' data-id='$lastid'>Loadm More </li>";
}
else{
echo"<h2>no more</h2>";
}
?>