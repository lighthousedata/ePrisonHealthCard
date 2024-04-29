
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM hiv_test where id = ".$_GET['hid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'HIV_testing_service.php';
?>