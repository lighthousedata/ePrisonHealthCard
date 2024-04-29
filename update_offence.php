<?php
	require_once 'db_connect.php';

	$data = [];
	
	for($i=0; $i < count($_POST['id']); $i++){
		$data[$_POST['id'][$i]]['name'] = $_POST['name'][$i];
		$data[$_POST['id'][$i]]['sentence'] = $_POST['sentence'][$i];
		$data[$_POST['id'][$i]]['type'] = $_POST['type'][$i];
	}
	
	
	foreach($data as $key => $value){
		mysqli_query($conn, "UPDATE `offences` SET `name` = '$value[name]', `sentence` = '$value[sentence]', `type` = '$value[type]' WHERE `id` = '$key'");
}
'<script>alert("Success");
</script>'

?>
