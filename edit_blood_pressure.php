
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM blood_presure where id = ".$_GET['bpid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'blood_pressure.php';
?>