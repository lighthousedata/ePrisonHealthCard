<?php
ob_start();
date_default_timezone_set("Africa/Blantyre");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}

if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'save_basic_particulars'){
	$save = $crud->save_basic_particulars();
	header('Content-Type: application/json');
	echo $save;
}

if($action == 'delete_basic_particulars'){
	$save = $crud->delete_basic_particulars();
	if($save)
		echo $save;
}

if($action == 'save_prisoner_case'){
	$save = $crud->save_prisoner_case();
	if($save)
		echo $save;
}

if($action == 'delete_prisoner_case'){
	$save = $crud->delete_prisoner_case();
	if($save)
		echo $save;
}

if($action == 'save_stage_leader'){
	$save = $crud->save_stage_leader();
	if($save)
		echo $save;
}

if($action == 'delete_stage_leader'){
	$save = $crud->delete_stage_leader();
	if($save)
		echo $save;
}

if($action == 'save_batchings'){

	$save = $crud->save_batchings();
	if($save)
		echo $save;
}

if($action == 'delete_batchings'){
	$save = $crud->delete_batchings();
	if($save)
		echo $save;
}


if($action == 'save_characteristics'){
	$save = $crud->save_characteristics();
	if($save)
		echo $save;
}

if($action == 'save_medical_history'){
	$save = $crud->save_medical_history();
	if($save)
		echo $save;
}
if($action == 'delete_medical_history'){
	$save = $crud->delete_medical_history();
	if($save)
		echo $save;
}


if($action == 'save_medical_screening'){
	$save = $crud->save_medical_screening();
	if($save)
		echo $save;
}
if($action == 'delete_medical_screening'){
	$save = $crud->delete_medical_screening();
	if($save)
		echo $save;
}

if($action == 'save_vitals'){
	$save = $crud->save_vitals();
	if($save)
		echo $save;
}
if($action == 'delete_vitals'){
	$save = $crud->delete_vitals();
	if($save)
		echo $save;
}

if($action == 'save_lab_tests'){
	$save = $crud->save_lab_tests();
	if($save)
		echo $save;
}
if($action == 'delete_lab_tests'){
	$save = $crud->delete_lab_tests();
	if($save)
		echo $save;
}


if($action == 'save_sti_tests'){
	$save = $crud->save_sti_tests();
	if($save)
		echo $save;
}
if($action == 'delete_sti_tests'){
	$save = $crud->delete_sti_tests();
	if($save)
		echo $save;
}


if($action == 'save_clinical_referral'){
	$save = $crud->save_clinical_referral();
	if($save)
		echo $save;
}
if($action == 'delete_clinical_referral'){
	$save = $crud->delete_clinical_referral();
	if($save)
		echo $save;
}

if($action == 'save_lab_tests_booked'){
	$save = $crud->save_lab_tests_booked();
	if($save)
		echo $save;
}
if($action == 'delete_lab_tests_booked'){
	$save = $crud->delete_lab_tests_booked();
	if($save)
		echo $save;
}

if($action == 'save_hiv_aids'){
	$save = $crud->save_hiv_aids();
	if($save)
		echo $save;
}
if($action == 'delete_hiv_aids'){
	$save = $crud->delete_hiv_aids();
	if($save)
		echo $save;
}

if($action == 'save_covid_19'){
	$save = $crud->save_covid_19();
	if($save)
		echo $save;
}
if($action == 'delete_covid_19'){
	$save = $crud->delete_covid_19();
	if($save)
		echo $save;
}

if($action == 'save_tuberculosis'){
	$save = $crud->save_tuberculosis();
	if($save)
		echo $save;
}
if($action == 'delete_tuberculosis'){
	$save = $crud->delete_tuberculosis();
	if($save)
		echo $save;
}


if($action == 'save_ART_history_at_entry'){
	$save = $crud->save_ART_history_at_entry();
	if($save)
		echo $save;
}
if($action == 'delete_ART_history_at_entry'){
	$save = $crud->delete_ART_history_at_entry();
	if($save)
		echo $save;
}


if($action == 'save_prescription'){
	$save = $crud->save_prescription();
	if($save)
		echo $save;
}
if($action == 'delete_prescription'){
	$save = $crud->delete_prescription();
	if($save)
		echo $save;
}


if($action == 'save_sexually_transmitted_infections'){
	$save = $crud->save_sexually_transmitted_infections();
	if($save)
		echo $save;
}
if($action == 'delete_sexually_transmitted_infections'){
	$save = $crud->delete_sexually_transmitted_infections();
	if($save)
		echo $save;
}

if($action == 'save_weight_register'){
	$save = $crud->save_weight_register();
	if($save)
		echo $save;
}
if($action == 'delete_weight_register'){
	$save = $crud->delete_weight_register();
	if($save)
		echo $save;
}


if($action == 'save_death_and_causes'){
	$save = $crud->save_death_and_causes();
	if($save)
		echo $save;
}
if($action == 'delete_death_and_causes'){
	$save = $crud->delete_death_and_causes();
	if($save)
		echo $save;
}

if($action == 'save_basic_body_checkups'){
	$save = $crud->save_basic_body_checkups();
	if($save)
		echo $save;
}
if($action == 'delete_basic_body_checkups'){
	$save = $crud->delete_basic_body_checkups();
	if($save)
		echo $save;
}

if($action == 'save_medical_treatment'){
	$save = $crud->save_medical_treatment();
	if($save)
		echo $save;
}
if($action == 'delete_medical_treatment'){
	$save = $crud->delete_medical_treatment();
	if($save)
		echo $save;
}

if($action == 'save_hospitalization_and_ward_transfer'){
	$save = $crud->save_hospitalization_and_ward_transfer();
	if($save)
		echo $save;
}
if($action == 'delete_hospitalization_and_ward_transfer'){
	$save = $crud->delete_hospitalization_and_ward_transfer();
	if($save)
		echo $save;
}



if($action == 'save_vaccination'){
	$save = $crud->save_vaccination();
	if($save)
		echo $save;
}
if($action == 'delete_vaccination'){
	$save = $crud->delete_vaccination();
	if($save)
		echo $save;
}

if($action == 'save_temperature'){
	$save = $crud->save_temperature();
	if($save)
		echo $save;
}
if($action == 'delete_temperature'){
	$save = $crud->delete_temperature();
	if($save)
		echo $save;
}


if($action == 'save_referral'){
	$save = $crud->save_referral();
	if($save)
		echo $save;
}
if($action == 'delete_referral'){
	$save = $crud->delete_referral();
	if($save)
		echo $save;
}


if($action == 'save_my_drugs'){
	$save = $crud->save_my_drugs();
	if($save)
		echo $save;
}
if($action == 'delete_my_drugs'){
	$save = $crud->delete_my_drugs();
	if($save)
		echo $save;
}


if($action == 'save_payment'){
	$save = $crud->save_payment();
	if($save)
		echo $save;
}
if($action == 'delete_payment'){
	$save = $crud->delete_payment();
	if($save)
		echo $save;
}


if($action == 'save_prison_issuances'){
	$save = $crud->save_prison_issuances();
	if($save)
		echo $save;
}
if($action == 'delete_prison_issuances'){
	$save = $crud->delete_prison_issuances();
	if($save)
		echo $save;
}


if($action == 'save_added_services'){
	$save = $crud->save_added_services();
	if($save)
		echo $save;
}
if($action == 'delete_added_services'){
	$save = $crud->delete_added_services();
	if($save)
		echo $save;
}

if($action == 'get_report'){
	$get = $crud->get_report();
	if($get)
		echo $get;
}

if($action == 'metadata'){
	$get = $crud->get_metadata();
	if($get)
		echo $get;
}

if($action == 'verify'){
	$get = $crud->verify();
	if($get)
		echo $get;
}

if($action == 'fetch'){
	$get = $crud->get();
	if($get)
		echo $get;
}

if($action == 'search'){
	$results = $crud->search();
	if($results)
		echo $results;
}

if($action == 'curr_visits'){
	$results = $crud->curr_visits();
	if($results)
		echo $results;
}

if($action == 'void_obs'){
	$results = $crud->void_obs();
	if($results)
		echo $results;
}

if($action == 'update_outcome'){
	$results = $crud->update_outcome();
	if($results)
		echo $results;
}

ob_end_flush();
?>
