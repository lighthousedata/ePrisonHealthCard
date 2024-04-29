
<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM medical_screenings where id = ".$_GET['mid'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'medical_screening.php';
?>