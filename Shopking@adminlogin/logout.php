<?php
session_start();
session_destroy("user_email");
echo"<script>window.open('login.php?logged_out=come bake','_self')</script>";
?>