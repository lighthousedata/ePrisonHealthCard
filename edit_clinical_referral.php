
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM clinical_referral where id = ".$_GET['clid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'clinical_referral.php';
?>