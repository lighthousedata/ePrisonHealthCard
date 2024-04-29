
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM hospitalisation_and_transfers where id = ".$_GET['waid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'hospitalization_and_ward_transfer.php';
?>