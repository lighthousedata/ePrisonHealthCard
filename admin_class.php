<?php

//Start a new session
session_start();
//Check the session start time is set or not
// if(!isset($_SESSION['start'])){

// 	//Set the session start time
// 	$_SESSION['start'] = time();
// }

// //Check the session is expired or not
// if(isset($_SESSION['start']) && (time() - $_SESSION['start'] >60)){
// 	//Unset the session variables
// 	session_unset();
// 	//Destroy the session
// 	session_destroy();
// 	echo '<script type="text/javascript">
//                 alert("Session is expired!");
//                 </script>';
// }
?>

<?php
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}
	
	function login(){
		extract($_POST);
			$qry = $this->db->query("SELECT u.*, concat(u.firstname,' ',u.lastname) AS user_name, r.name AS region_name, r.location AS region_location, r.id AS regions_id, s.name AS station_name, s.location AS station_location, s.id AS stations_id, s.code AS station_code, h.name AS head_quarters_name FROM users u INNER JOIN regions r ON r.id = u.regions_id INNER JOIN stations s ON s.id = u.stations_id INNER JOIN head_quarters h ON h.id = u.head_quarters_id WHERE u.email = '".$email."' AND u.password = '".sha1($password)."'  ");

		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'password' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 2;
		}
	}

	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	function login2(){
		extract($_POST);
			$qry = $this->db->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM students where student_code = '".$student_code."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'password' && !is_numeric($key))
					$_SESSION['rs_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function save_user(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass','password')) && !is_numeric($k)){
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(!empty($password)){
					$data .= ", password=sha1('$password') ";

		}
		$check = $this->db->query("SELECT * FROM users where email ='$email' ".(!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
			$data .= ", avatar = '$fname' ";

		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set $data");
		}else{
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if($save){
			return 1;
		}
	}
	function signup(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass')) && !is_numeric($k)){
				if($k =='password'){
					if(empty($v))
						continue;
					$v = sha1($v);

				}
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}

		$check = $this->db->query("SELECT * FROM users where email ='$email' ".(!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
			$data .= ", avatar = '$fname' ";

		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set $data");

		}else{
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if($save){
			if(empty($id))
				$id = $this->db->insert_id;
			foreach ($_POST as $key => $value) {
				if(!in_array($key, array('id','cpass','password')) && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
					$_SESSION['login_id'] = $id;
				if(isset($_FILES['img']) && !empty($_FILES['img']['tmp_name']))
					$_SESSION['login_avatar'] = $fname;
			return 1;
		}
	}

	function update_user(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','cpass','table','password')) && !is_numeric($k)){
				
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$check = $this->db->query("SELECT * FROM users where email ='$email' ".(!empty($id) ? " and id != {$id} " : ''))->num_rows;
		if($check > 0){
			return 2;
			exit;
		}
		if(isset($_FILES['img']) && $_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
			$data .= ", avatar = '$fname' ";

		}
		if(!empty($password))
			$data .= " ,password=sha1('$password') ";
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set $data");
		}else{
			$save = $this->db->query("UPDATE users set $data where id = $id");
		}

		if($save){
			foreach ($_POST as $key => $value) {
				if($key != 'password' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
			if(isset($_FILES['img']) && !empty($_FILES['img']['tmp_name']))
					$_SESSION['login_avatar'] = $fname;
			return 1;
		}
	}
	function delete_user(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users where id = ".$id);
		if($delete)
			return 1;
	}
	function save_system_settings(){
		extract($_POST);
		$data = '';
		foreach($_POST as $k => $v){
			if(!is_numeric($k)){
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if($_FILES['cover']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['cover']['name'];
			$move = move_uploaded_file($_FILES['cover']['tmp_name'],'../assets/uploads/'. $fname);
			$data .= ", cover_img = '$fname' ";

		}
		$chk = $this->db->query("SELECT * FROM system_settings");
		if($chk->num_rows > 0){
			$save = $this->db->query("UPDATE system_settings set $data where id =".$chk->fetch_array()['id']);
		}else{
			$save = $this->db->query("INSERT INTO system_settings set $data");
		}
		if($save){
			foreach($_POST as $k => $v){
				if(!is_numeric($k)){
					$_SESSION['system'][$k] = $v;
				}
			}
			if($_FILES['cover']['tmp_name'] != ''){
				$_SESSION['system']['cover_img'] = $fname;
			}
			return 1;
		}
	}
	function save_image(){
		extract($_FILES['file']);
		if(!empty($tmp_name)){
			$fname = strtotime(date("Y-m-d H:i"))."_".(str_replace(" ","-",$name));
			$move = move_uploaded_file($tmp_name,'assets/uploads/'. $fname);
			$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
			$hostName = $_SERVER['HTTP_HOST'];
			$path =explode('/',$_SERVER['PHP_SELF']);
			$currentPath = '/'.$path[1]; 
			if($move){
				return $protocol.'://'.$hostName.$currentPath.'/assets/uploads/'.$fname;
			}
		}
	}
	function save_particulars(){
		extract($_POST);
		echo $_POST;
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','user_ids')) && !is_numeric($k)){
				if($k == 'name')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(isset($user_ids)){
			$data .= ", user_ids='".implode(',',$user_ids)."' ";
		}
		// echo $data;exit;
		if(empty($id)){
			$save = $this->db->query("INSERT INTO lead set $data");
		}else{
			$save = $this->db->query("UPDATE lead set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_particulars(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM lead where id = $id");
		if($delete){
			return 1;
		}
	}

	
	function save_lead(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','user_ids')) && !is_numeric($k)){
				if($k == 'description')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(isset($user_ids)){
			$data .= ", user_ids='".implode(',',$user_ids)."' ";
		}

		// echo $data;exit;
		if(empty($id)){
			$save = $this->db->query("INSERT INTO lead_list set $data");
			
		}else{
			$save = $this->db->query("UPDATE lead_list set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}


	function save_basic_particulars() {
		extract($_POST);
		$data = "";
		$user = $_SESSION['login_id'];

		foreach ($_POST as $k => $v) {
			// Skip 'id' field and non-numeric keys
			if ($k !== 'id' && !is_numeric($k)) {
				// Ensure $v is properly escaped
				$v = $this->db->real_escape_string($v);
				
				// Handle special case for 'denomination' field
				if ($k === 'denomination') {
					$v = htmlentities(str_replace("'", "&#x2022;", $v));
				}
				
				// Append key-value pair to $data string
				if (empty($data)) {
					$data .= "$k='$v'";
				} else {
					$data .= ", $k='$v'";
				}
			}
		}
		// $message = "INSERT INTO prisoners SET $data";
		// return $message;
	
		if (empty($id)) {
			try {
				// Execute the INSERT query
				$save = $this->db->query("INSERT INTO prisoners SET $data, created_by = $user");
				if ($save) {
					$result = $this->db->query("SELECT * FROM prisoners ORDER BY id DESC LIMIT 1;");
					$insertedRecord = ($result && $result->num_rows > 0) ? $result->fetch_assoc() : [];

					return json_encode(array('success' => true, 'message' => 'Prisoner has successfully been registered.', 'data' => $insertedRecord));
					
				} else {
					return json_encode(array('success' => false, 'message' => 'Failed to insert record.'));
				}
			} catch (mysqli_sql_exception $e) {
				return json_encode(array('success' => false, 'error' => $e->getMessage(), 'message' => 'Failed to insert record.'));
			}
		} else {
			try {
				// Update existing record if 'id' is provided
				$save = $this->db->query("UPDATE prisoners SET $data WHERE id = $id");
			if ($save) {
				$result = $this->db->query("SELECT * FROM prisoners WHERE id = $id;");
				$updatedRecord = ($result && $result->num_rows > 0) ? $result->fetch_assoc() : [];

				return json_encode(array('success' => true, 'message' => 'Prisoner has successfully been updated.', 'data' => $updatedRecord));
				
			} else {
				return json_encode(array('success' => false, 'message' => 'Failed to update record.'));
			}
		} catch (mysqli_sql_exception $e) {
			return json_encode(array('success' => false, 'error' => $e->getMessage(), 'message' => 'Failed to update record.'));
		}
		}
	}

	function delete_basic_particulars(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM prisoners where id = $id");
		if($delete){
			return 1;
		}
	}


	function save_covid_19(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO covid19 set $data");
		}else{
			$save = $this->db->query("UPDATE covid19 set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_covid_19(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM covid19 where id = $id");
		if($delete){
			return 1;
		}
	}



	function save_prescription(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'action')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO prescriptions set $data");
		}else{
			$save = $this->db->query("UPDATE prescriptions set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_prescription(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM prescriptions where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_clinical_referral(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO clinical_referral set $data");
		}else{
			$save = $this->db->query("UPDATE clinical_referral set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_clinical_referral(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM clinical_referral where id = $id");
		if($delete){
			return 1;
		}
	}



	function save_prisoner_case(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'court')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO prisoner_cases set $data");
		}else{
			$save = $this->db->query("UPDATE prisoner_cases set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_prisoner_case(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM prisoner_cases where id = $id");
		if($delete){
			return 1;
		}
	}


	function save_characteristics(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'others')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO characteristics set $data");
		}else{
			$save = $this->db->query("UPDATE characteristics set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_characteristics(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM characteristics where id = $id");
		if($delete){
			return 1;
		}
	}


function save_medical_history(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'others')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO medical_history set $data");
		}else{
			$save = $this->db->query("UPDATE medical_history set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_medical_history(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM medical_history where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_referral(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO referral_department set $data");
		}else{
			$save = $this->db->query("UPDATE referral_department set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_referral(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM referral_department where id = $id");
		if($delete){
			return 1;
		}
	}



	function save_my_drugs(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'description')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO drugs set $data");
		}else{
			$save = $this->db->query("UPDATE drugs set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_drugs(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM drugs where id = $id");
		if($delete){
			return 1;
		}
	}


	function save_medical_screening(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'others')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO medical_screenings set $data");
		}else{
			$save = $this->db->query("UPDATE medical_screenings set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_medical_screening(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM medical_screenings where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_lab_tests(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO lab_tests set $data");
		}else{
			$save = $this->db->query("UPDATE lab_tests set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_lab_tests(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM lab_tests where id = $id");
		if($delete){
			return 1;
		}
	}


function save_sti_tests(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO stis_service set $data");
		}else{
			$save = $this->db->query("UPDATE stis_service set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_sti_tests(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM stis_service where id = $id");
		if($delete){
			return 1;
		}
	}




function save_death_and_causes(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO death_and_causes set $data");
		}else{
			$save = $this->db->query("UPDATE death_and_causes set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_death_and_causes(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM death_and_causes where id = $id");
		if($delete){
			return 1;
		}
	}



	function save_lab_tests_booked(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO lab_tests set $data");
		}else{
			$save = $this->db->query("UPDATE lab_tests set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_lab_tests_booked(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM lab_tests where id = $id");
		if($delete){
			return 1;
		}
	}

function save_vaccination(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO vaccination set $data");
		}else{
			$save = $this->db->query("UPDATE vaccination set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_vaccination(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM vaccination where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_temperature(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO temperature set $data");
		}else{
			$save = $this->db->query("UPDATE temperature set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_temperature(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM temperature where id = $id");
		if($delete){
			return 1;
		}
	}



	function save_hiv_aids(){
		extract($_POST);
		$data = "";
		$user = $_SESSION['login_id'];
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO hiv_test set $data, created_by = $user");
		}else{
			$save = $this->db->query("UPDATE hiv_test set $data, updated_by = $user, updated_at = NOW() where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_hiv_aids(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM hiv_test where id = $id");
		if($delete){
			return 1;
		}
	}


function save_ART_history_at_entry(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id', 'created_at', 'updated_at')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($v)){ // Check if the value is empty
					$data .= "$k=NULL, "; // Set to NULL if empty
				} else {
					$data .= "$k='$v', ";
				}
			}
		}
		$data = rtrim($data, ', '); // Remove trailing comma and space
		if(empty($id)){
			$save = $this->db->query("INSERT INTO art_history_at_entry set $data");
		}else{
			$save = $this->db->query("UPDATE art_history_at_entry set $data where id = $id");
		}
		
		if($save){
			return 1;
		}else {
			return 0;
		}
	}
	function delete_ART_history_at_entry(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM art_history_at_entry where id = $id");
		if($delete){
			return 1;
		}
	}


function save_vitals(){
		extract($_POST);
		$data = "";
		$user = $_SESSION['login_id'];
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k) && $v !== ''){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		//return $data;
		if(empty($id)){
			$save = $this->db->query("INSERT INTO vitals set $data, created_by='$user'");
		}else{
			$save = $this->db->query("UPDATE vitals set $data, updated_by='$user', updated_at=NOW() where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_vitals(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM vitals where id = $id");
		if($delete){
			return 1;
		}
	}



function save_tuberculosis(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO tb_test set $data");
		}else{
			$save = $this->db->query("UPDATE tb_test set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_tuberculosis(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM tb_test where id = $id");
		if($delete){
			return 1;
		}
	}


function save_sexually_transmitted_infections(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO stis_service set $data");
		}else{
			$save = $this->db->query("UPDATE stis_service set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_sexually_transmitted_infections(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM stis_service where id = $id");
		if($delete){
			return 1;
		}
	}

	
function save_weight_register(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO weight_registers set $data");
		}else{
			$save = $this->db->query("UPDATE weight_registers set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_weight_register(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM weight_registers where id = $id");
		if($delete){
			return 1;
		}
	}

function save_basic_body_checkups(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO basic_body_checkups set $data");
		}else{
			$save = $this->db->query("UPDATE basic_body_checkups set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_basic_body_checkups(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM basic_body_checkups where id = $id");
		if($delete){
			return 1;
		}
	}

function save_medical_treatment(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO medical_treatments set $data");
		}else{
			$save = $this->db->query("UPDATE medical_treatments set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_medical_treatment(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM medical_treatments where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_hospitalization_and_ward_transfer(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO hospitalisation_and_transfers set $data");
		}else{
			$save = $this->db->query("UPDATE hospitalisation_and_transfers set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_hospitalization_and_ward_transfer(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM hospitalisation_and_transfers where id = $id");
		if($delete){
			return 1;
		}
	}


	function save_prison_issuances(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'quantity_and_description')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO prison_issuances set $data");
		}else{
			$save = $this->db->query("UPDATE prison_issuances set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_prison_issuances(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM prison_issuances where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_stage_leader(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'reason')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO stage_leaders set $data");
		}else{
			$save = $this->db->query("UPDATE stage_leaders set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_stage_leader(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM stage_leaders where id = $id");
		if($delete){
			return 1;
		}
	}


	function save_batchings(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO batchings set $data");
		}else{
			$save = $this->db->query("UPDATE batchings set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_batchings(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM batchings where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_added_services(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'remarks')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO added_services set $data");
		}else{
			$save = $this->db->query("UPDATE added_services set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_added_services(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM added_services where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_task(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'description')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO task_list set $data");
		}else{
			$save = $this->db->query("UPDATE task_list set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_task(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM task_list where id = $id");
		if($delete){
			return 1;
		}
	}
	function save_progress(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$dur = abs(strtotime("2020-01-01 ".$end_time)) - abs(strtotime("2020-01-01 ".$start_time));
		$dur = $dur / (60 * 60);
		$data .= ", time_rendered='$dur' ";
		// echo "INSERT INTO user_productivity set $data"; exit;
		if(empty($id)){
			$data .= ", user_id={$_SESSION['login_id']} ";
			
			$save = $this->db->query("INSERT INTO user_productivity set $data");
			
		}else{
			$save = $this->db->query("UPDATE user_productivity set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_progress(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM user_productivity where id = $id");
		if($delete){
			return 1;
		}
	}

	function save_payment(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if($k == 'comment')
					$v = htmlentities(str_replace("'","&#x2022;",$v));
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		$dur = abs(strtotime("2020-01-01 ".$end_time)) - abs(strtotime("2020-01-01 ".$start_time));
		$dur = $dur / (60 * 60);
		$data .= ", time_rendered='$dur' ";
		// echo "INSERT INTO user_productivity set $data"; exit;
		if(empty($id)){
			$data .= ", user_id={$_SESSION['login_id']} ";
			
			$save = $this->db->query("INSERT INTO payment set $data");
		}else{
			$save = $this->db->query("UPDATE payment set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_payment(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM payment where id = $id");
		if($delete){
			return 1;
		}
	}
	function get_report(){
		extract($_POST);
		$data = array();
		$get = $this->db->query("SELECT t.*,p.name as ticket_for FROM ticket_list t inner join pricing p on p.id = t.pricing_id where date(t.date_created) between '$date_from' and '$date_to' order by unix_timestamp(t.date_created) desc ");
		while($row= $get->fetch_assoc()){
			$row['date_created'] = date("M d, Y",strtotime($row['date_created']));
			$row['name'] = ucwords($row['name']);
			$row['adult_price'] = number_format($row['adult_price'],2);
			$row['child_price'] = number_format($row['child_price'],2);
			$row['amount'] = number_format($row['amount'],2);
			$data[]=$row;
		}
		return json_encode($data);

	}
	function get_metadata(){
		extract($_POST);
		$results = "";
		$metadata = array();
		global $statement;
		switch($_POST['get']){
			case "districts":
				$statement = "SELECT * FROM district;";
				break;
			case "traditional_authority":
				$statement = "SELECT * FROM traditional_authority WHERE district_id=".(int)$districtId.";";
				break;
			case "village":
				$statement = "SELECT * FROM village WHERE traditional_authority_id=".(int)$taId.";";
				break;
			case "nationality":
				$statement = "SELECT * FROM nationality order by name asc;";
				break;
			case "religion":
				$statement = "SELECT * FROM religion order by name asc;";
				break;
			case "hts_test_types":
				$statement = "SELECT * FROM hiv_test_type order by name asc;";
				break;
			case "tb_test_types":
				$statement = "SELECT * FROM tb_test_type order by name asc;";
				break;
			case "sti_test_types":
				$statement = "SELECT * FROM sti_type order by name asc;";
				break;
			case "facilities":
				$statement = "SELECT * FROM hospital_name order by name asc;";
				break;
				case "regimen":
			$statement = "SELECT * FROM new_regimen order by regimen asc;";
				break;
			default:
				break;
		}
		$results = $this->db->query($statement);
		while($row= $results->fetch_assoc()){
			$metadata[] = $row;
		}

		return json_encode($metadata);
	}

	function verify(){
		extract($_POST);
		// $results = "";
		// $metadata = array();
		global $statement;
		switch($_POST['field']){
			case "prison_number":
				$statement = "SELECT * FROM prisoners WHERE prisoners_no='".$value."';";
				break;
			default:
				break;
		}
		$qry = $this->db->query($statement);
		if($qry->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}

	function get(){
		extract($_POST);
		$results = array();
		global $statement;
		switch($_POST['get']){
			case "prisoner":
				$statement = "SELECT * FROM prisoners WHERE id=".$id.";";
				break;
				case "art_at_entry":
					if(!empty($id)){
					  $statement = "SELECT * FROM art_history_at_entry WHERE id=".$id.";";
					}else if(!empty($pid)){
					  $statement = "SELECT * FROM art_history_at_entry WHERE prisoners_no=".$pid.";";
					}
					break;
				case "vitals":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM vitals ".$whereClause.";";
					break;
				case "hiv_testing":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM hiv_test ".$whereClause.";";
					break;
				case "sti_service":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM stis_service ".$whereClause.";";
					break;
				case "tb_service":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM tb_test ".$whereClause.";";
					break;
				case "covid_service":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM covid19 ".$whereClause.";";
					break;
				case "clinic_referal":
					$whereClause = "WHERE voided = 0 ";
    				if(!empty($id)){
    				    $whereClause .= "AND id=".$id;
    				} elseif(!empty($pid)){
    				    $whereClause .= "AND prisoners_no=".$pid;
   			 		}
					$statement = "SELECT * FROM clinical_referral ".$whereClause.";";
					break;
				case "outcomes":
					$statement = "SELECT * FROM outcomes WHERE prisoners_no=".$pid.";";
					break;
			default:
				break;
		}
		
		$qry = $this->db->query($statement);
		if($qry->num_rows > 0){
			while($row= $qry->fetch_assoc()){
				$results[] = $row;
			}
			$results[0]['num_rows'] = $qry->num_rows;
			return json_encode($results);
		}else{
			return 0;
		}
	}

	function search(){
		extract($_POST);
		$results = "";
		$patients = array();
		$statement = "SELECT p.*, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p WHERE 1=1";
		
		if (!empty($firstName)) {
			$statement .= " AND fname LIKE '%" . $firstName . "%'";
		}
		if (!empty($lastName)) {
			$statement .= " AND lname LIKE '%" . $lastName . "%'";
		}
		if (!empty($dob)) {
			$statement .= " AND dob = '" . $dob . "'";
		}
		if (!empty($gender)) {
			$statement .= " AND gender = '" . $gender . "'";
		}

		$results = $this->db->query($statement);

		if ($results->num_rows > 0) {
			// Output data of each row
			while($row = $results->fetch_assoc()) {
				$patients[] = $row;
			}
			return json_encode($patients);
		} else {
			return [];
		}
	}
	function void_obs(){
		extract($_POST);
		$delete = $this->db->query("UPDATE $encounter SET voided = 1, voided_by = $user, voided_at= CURRENT_DATE() WHERE id = $id and prisoners_no = $prisoners_no;");
		if($delete){
			return 1;
		}
	}

function curr_visits(){
	$statement = 'SELECT MONTHNAME(visit_date) AS month, "HTS" program, COUNT(*) AS visit_count 
			  FROM hiv_test WHERE QUARTER(visit_date) = QUARTER(CURRENT_DATE()) AND YEAR(visit_date) = YEAR(CURRENT_DATE()) 
			  GROUP BY MONTHNAME(visit_date) UNION 
			  SELECT MONTHNAME(visit_date) AS month, "TB" program, COUNT(*) AS visit_count 
			  FROM tb_test WHERE QUARTER(visit_date) = QUARTER(CURRENT_DATE()) AND YEAR(visit_date) = YEAR(CURRENT_DATE()) 
			  GROUP BY MONTHNAME(visit_date) UNION 
			  SELECT MONTHNAME(visit_date) AS month, "STI" program, COUNT(*) AS visit_count 
			  FROM stis_service WHERE QUARTER(visit_date) = QUARTER(CURRENT_DATE()) AND YEAR(visit_date) = YEAR(CURRENT_DATE()) 
			  GROUP BY MONTHNAME(visit_date) UNION 
			  SELECT MONTHNAME(visit_date) AS month, "COVID" program, COUNT(*) AS visit_count 
			  FROM covid19 WHERE QUARTER(visit_date) = QUARTER(CURRENT_DATE()) AND YEAR(visit_date) = YEAR(CURRENT_DATE()) 
			  GROUP BY MONTHNAME(visit_date);';
	$results = $this->db->query($statement);
	// Format the data
	$data = array();
	while ($row = $results->fetch_assoc()) {
      $data[$row['program']][] = array(
		'month' => $row['month'],
        'visit_count' => $row['visit_count']);
	}
	// Return the formatted data as JSON
	return json_encode($data);
}

function update_outcome(){
	extract($_POST);
	$data = "";
	foreach($_POST as $k => $v){
		if(empty($data)){
			$data .= " $k='$v' ";
		}else{
			$data .= ", $k='$v' ";
		}
	}
	
	$results = $this->db->query("SELECT * FROM outcomes WHERE prisoners_no = $prisoners_no");

	if ($results->num_rows > 0) {
		$save = $this->db->query("UPDATE outcomes set $data where prisoners_no = $prisoners_no");
	}else{
		$save = $this->db->query("INSERT INTO outcomes set $data");
	}

	if($save){
		return 1;
	}
}


}
