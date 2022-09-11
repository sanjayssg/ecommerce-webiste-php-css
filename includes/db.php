<?php
$db_username = 'root';
$db_password = '';
$db_name = 'shopking';
$db_host = 'localhost';
$item_per_page = 6;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}



?>