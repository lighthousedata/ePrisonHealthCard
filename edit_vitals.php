
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM vitals where id = ".$_GET['vid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'vitals.php';
?>