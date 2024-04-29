
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM art_service where id = ".$_GET['aid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'ART_service.php';
?>