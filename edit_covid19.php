
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM covid19 where id = ".$_GET['coid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'Covid_19_service.php';
?>