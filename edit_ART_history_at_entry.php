
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM art_history_at_entry where id = ".$_GET['artid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'ART_history_at_entry.php';
?>