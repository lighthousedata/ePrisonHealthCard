
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM medical_treatments where id = ".$_GET['tmtid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'medical_treatment.php';
?>