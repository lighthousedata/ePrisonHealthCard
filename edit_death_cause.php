
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM death_and_causes where id = ".$_GET['did'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'death_and_causes.php';
?>