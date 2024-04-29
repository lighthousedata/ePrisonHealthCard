<?php
include_once("db_connect.php");
if($_REQUEST['histprisoners_no']) {
	$sql = "SELECT l.*, TIMESTAMPDIFF(YEAR, p.dob, CURDATE()) AS age, t.tested_for_hiv FROM lab_tests l INNER JOIN prisoners p ON p.prisoners_no = l.prisoners_no INNER JOIN pre_hts_survey t ON p.prisoners_no = t.prisoners_no  WHERE p.prisoners_no='".$_REQUEST['histprisoners_no']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>
