<?php
session_start();
session_destroy();
if(isset($_COOKIE["s_email"])){
setcookie("s_email","",time()-604800);
setcookie("s_pass","",time()-604800);
}
echo"<script>window.open('index.php','_self')</script>";

?>