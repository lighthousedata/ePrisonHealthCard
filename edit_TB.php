
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM tb_test where id = ".$_GET['tbid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'tuberculosis_service.php';
?>