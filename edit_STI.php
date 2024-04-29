
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM stis_service where id = ".$_GET['stisid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'STI_service.php';
?>