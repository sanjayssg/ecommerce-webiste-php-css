<?php
include("product.php");
?>
<html>
<head>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
function getProducts(value){
$.post("product.php",{partialProduct:value},function(data)
$("#results").html(data);
});
}
</script>
</head>
<body>
<input type="text" onkeyup="getProducts(this.value)"/>
<br>
<div id="results" ></div>
</body>
</html>