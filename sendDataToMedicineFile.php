<?php
include_once("db_connect.php");
if($_REQUEST['medid']) {
	$sql = "SELECT * FROM drugs  WHERE id='".$_REQUEST['medid']."'";
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
