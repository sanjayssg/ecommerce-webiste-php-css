<?php
include("includes/db.php");

$user=$_SESSION['customer_email'];
$get_customer="select * from customer_login where customer_email='$user' order by id desc limit 1";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_date=$row_customer['login_date'];
$c_ip=$row_customer['ip_add'];
?>
<head>
<title>
Last Login @ ShopKing
</title>
</head>
 <body class="last_login" >
 <font style="">Last Login Date:<?php echo $c_date; ?><br> </font>
 <font style=""> Ip Add <?php echo $c_ip; ?>
 </font>
 </body>