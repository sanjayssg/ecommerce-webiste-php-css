<?php

if(isset($_POST["submit1"])){
if(isset($_POST["ch1"])){
setcookie("unm",$_POST["t1"],time()+3600);
setcookie("pood",$_POST["t2"],time()+3600);
}
}
?>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
<input type="text" name="t1">
<input type="text" name="t2">

<input type="submit" name="submit1">
<input type="checkbox" name="ch1">
</body>
</html>