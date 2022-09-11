<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=ss_computech', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keywoord'].'%';
$sql = "SELECT * FROM products WHERE product_title LIKE (:keywoord) ORDER BY product_id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keywoord', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keywoord'].'</b>', $rs['product_title']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['product_title']).'\')">'.$country_name.'</li>';
}
?>