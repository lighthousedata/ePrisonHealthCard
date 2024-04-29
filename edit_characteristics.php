
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM characteristics where id = ".$_GET['cid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'physical_characteristics.php';
?>