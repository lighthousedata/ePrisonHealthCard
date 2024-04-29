
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM weight_registers where id = ".$_GET['wid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'weight_BMI_MUAC.php';
?>