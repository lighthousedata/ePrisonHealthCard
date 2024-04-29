<?php include'db_connect.php' ?>

<div class="container-fluid">
    <form method="POST">


        <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id'];
      $action = "Has Dispensed Drugs at: "; 
?>
  
            <div class="row">
<div class="col-sm-6">
          <div class="form-group">
           <label for="" class="control-label">From</label><hr>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="date_from" required>
          </div>
       </div>

       <div class="col-sm-6">
          <div class="form-group">
           <label for="" class="control-label">To</label><hr>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="date_to" required>
          </div>
       </div>


            </div>

    <br>
    <div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
            
            <button type="submit" name="fetch" class="btn btn-secondary">Query Report</button>
            
          </div>
        </div>  
    </form>
</div>

<?php
$date_to = '';
if(isset($_POST["fetch"])) {

                $date_from = $_POST['date_from'];
                $date_to = $_POST['date_to'];
}
?>


<?php if($date_to != ''): ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
			<div class="card-tools">
				<!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
			</div>
		</div>

		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<h5 style="text-align:center; color: #CD853F;">HTS CASCADE REPORT</h5>

						<thead>
							<th style="color: #CD853F; font-size: 12px;">INDICATOR</th>
							
							<th style="color: #CD853F; font-size: 12px;" colspan="2">10Y-14Y</th>
							
							<th style="color: #CD853F; font-size: 12px;" colspan="2">15Y-19Y</th>
							
							<th style="color: #CD853F; font-size: 12px;" colspan="2">20Y-24Y</th>
							
							<th style="color: #CD853F; font-size: 12px;" colspan="2">25Y-29Y</th>
							<th style="color: #CD853F; font-size: 12px;" colspan="2">30Y-34Y</th>
							<th style="color: #CD853F; font-size: 12px;" colspan="2">35Y-39Y</th>
							<th style="color: #CD853F; font-size: 12px;" colspan="2">40Y-44Y</th>
							<th style="color: #CD853F; font-size: 12px;" colspan="2">45Y-49Y</th>
							<th style="color: #CD853F; font-size: 12px;" colspan="2">50+Y</th>
							<th style="color: #CD853F; font-size: 12px;">TOTAL</th>
						</thead>
						<tbody>
					<?php
                $i = 1;
                $stations_id = $_SESSION['login_stations_id'];
                $regions_id = $_SESSION['login_regions_id'];
                //SELECT * FROM `prisoners` WHERE MONTH(created_at) BETWEEN '01' AND '06'


                if($_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){

                	//ROW ONE DATA
                	$r1_10m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;



//New registration


    $new_reg_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $new_reg_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $new_reg_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_sum = $new_reg_10m + $new_reg_10f + $new_reg_15m + $new_reg_15f + $new_reg_20m + $new_reg_20f + $new_reg_25m + $new_reg_25f + $new_reg_30m + $new_reg_30f + $new_reg_35m + $new_reg_35f + $new_reg_40m + $new_reg_40f + $new_reg_45m + $new_reg_45f + $new_reg_50m + $new_reg_50f;



 //Total prison population for the reporting period (Alive and in prison)

                 $convicts_10m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_10f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_15m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_15f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_20m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_20f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_25m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $convicts_25f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $convicts_30m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_30f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_35m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_35f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_40m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_40f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_45m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_45f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_50m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_50f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND stations_id = $stations_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_sum = $convicts_10m + $convicts_10f + $convicts_15m + $convicts_15f + $convicts_20m + $convicts_20f + $convicts_25m + $convicts_25f + $convicts_30m + $convicts_30f + $convicts_35m + $convicts_35f + $convicts_40m + $convicts_40f + $convicts_45m + $convicts_45f + $convicts_50m + $convicts_50f;


//Number Previously HIV+

        $hiv_prev_positive_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $hiv_prev_positive_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $hiv_prev_positive_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_sum = $hiv_prev_positive_10m + $hiv_prev_positive_10f + $hiv_prev_positive_15m + $hiv_prev_positive_15f + $hiv_prev_positive_20m + $hiv_prev_positive_20f + $hiv_prev_positive_25m + $hiv_prev_positive_25f + $hiv_prev_positive_30m + $hiv_prev_positive_30f + $hiv_prev_positive_35m + $hiv_prev_positive_35f + $hiv_prev_positive_40m + $hiv_prev_positive_40f + $hiv_prev_positive_45m + $hiv_prev_positive_45f + $hiv_prev_positive_50m + $hiv_prev_positive_50f;


//Number previously HIV+ on ART


                 $prev_positive_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_sum = $prev_positive_on_ART_10m + $prev_positive_on_ART_10f + $prev_positive_on_ART_15m + $prev_positive_on_ART_15f + $prev_positive_on_ART_20m + $prev_positive_on_ART_20f + $prev_positive_on_ART_25m + $prev_positive_on_ART_25f + $prev_positive_on_ART_30m + $prev_positive_on_ART_30f + $prev_positive_on_ART_35m + $prev_positive_on_ART_35f + $prev_positive_on_ART_40m + $prev_positive_on_ART_40f + $prev_positive_on_ART_45m + $prev_positive_on_ART_45f + $prev_positive_on_ART_50m + $prev_positive_on_ART_50f;


//Number previously HIV+ not on ART

                 $prev_positive_not_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_not_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_not_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.stations_id = $stations_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_sum = $prev_positive_not_on_ART_10m + $prev_positive_not_on_ART_10f + $prev_positive_not_on_ART_15m + $prev_positive_not_on_ART_15f + $prev_positive_not_on_ART_20m + $prev_positive_not_on_ART_20f + $prev_positive_not_on_ART_25m + $prev_positive_not_on_ART_25f + $prev_positive_not_on_ART_30m + $prev_positive_not_on_ART_30f + $prev_positive_not_on_ART_35m + $prev_positive_not_on_ART_35f + $prev_positive_not_on_ART_40m + $prev_positive_not_on_ART_40f + $prev_positive_not_on_ART_45m + $prev_positive_not_on_ART_45f + $prev_positive_not_on_ART_50m + $prev_positive_not_on_ART_50f;


                 //ELIGIBLE FOR HTS
                  //ELIGIBILITY ROW
                 $rg_10m = $new_reg_10m - $hiv_prev_positive_10m;
$rg_10f = $new_reg_10f - $hiv_prev_positive_10f;

$rg_15m = $new_reg_15m - $hiv_prev_positive_15m;
$rg_15f = $new_reg_15f - $hiv_prev_positive_15f;

$rg_20m = $new_reg_20m - $hiv_prev_positive_20m;
$rg_20f = $new_reg_20f - $hiv_prev_positive_20f;

$rg_25m = $new_reg_25m - $hiv_prev_positive_25m;
$rg_25f = $new_reg_25f - $hiv_prev_positive_25f;

$rg_30m = $new_reg_30m - $hiv_prev_positive_30m;
$rg_30f = $new_reg_30f - $hiv_prev_positive_30f;

$rg_35m = $new_reg_35m - $hiv_prev_positive_35m;
$rg_35f = $new_reg_35f - $hiv_prev_positive_35f;

$rg_40m = $new_reg_40m - $hiv_prev_positive_40m;
$rg_40f = $new_reg_40f - $hiv_prev_positive_40f;

$rg_45m = $new_reg_45m - $hiv_prev_positive_45m;
$rg_45f = $new_reg_45f - $hiv_prev_positive_45f;

$rg_50m = $new_reg_50m - $hiv_prev_positive_50m;
$rg_50f = $new_reg_50f - $hiv_prev_positive_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;

                	

                    
                }elseif($_SESSION['login_type'] == 5){

                 	
                    //ROW ONE DATA
                    $r1_10m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;



//New registration


    $new_reg_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $new_reg_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $new_reg_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_sum = $new_reg_10m + $new_reg_10f + $new_reg_15m + $new_reg_15f + $new_reg_20m + $new_reg_20f + $new_reg_25m + $new_reg_25f + $new_reg_30m + $new_reg_30f + $new_reg_35m + $new_reg_35f + $new_reg_40m + $new_reg_40f + $new_reg_45m + $new_reg_45f + $new_reg_50m + $new_reg_50f;



 //Total prison population for the reporting period (Alive and in prison)

                 $convicts_10m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_10f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_15m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_15f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_20m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_20f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_25m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $convicts_25f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $convicts_30m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_30f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_35m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_35f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_40m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_40f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_45m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_45f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_50m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_50f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female' AND regions_id = $regions_id AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_sum = $convicts_10m + $convicts_10f + $convicts_15m + $convicts_15f + $convicts_20m + $convicts_20f + $convicts_25m + $convicts_25f + $convicts_30m + $convicts_30f + $convicts_35m + $convicts_35f + $convicts_40m + $convicts_40f + $convicts_45m + $convicts_45f + $convicts_50m + $convicts_50f;


//Number Previously HIV+

        $hiv_prev_positive_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $hiv_prev_positive_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $hiv_prev_positive_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_sum = $hiv_prev_positive_10m + $hiv_prev_positive_10f + $hiv_prev_positive_15m + $hiv_prev_positive_15f + $hiv_prev_positive_20m + $hiv_prev_positive_20f + $hiv_prev_positive_25m + $hiv_prev_positive_25f + $hiv_prev_positive_30m + $hiv_prev_positive_30f + $hiv_prev_positive_35m + $hiv_prev_positive_35f + $hiv_prev_positive_40m + $hiv_prev_positive_40f + $hiv_prev_positive_45m + $hiv_prev_positive_45f + $hiv_prev_positive_50m + $hiv_prev_positive_50f;


//Number previously HIV+ on ART


                 $prev_positive_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_sum = $prev_positive_on_ART_10m + $prev_positive_on_ART_10f + $prev_positive_on_ART_15m + $prev_positive_on_ART_15f + $prev_positive_on_ART_20m + $prev_positive_on_ART_20f + $prev_positive_on_ART_25m + $prev_positive_on_ART_25f + $prev_positive_on_ART_30m + $prev_positive_on_ART_30f + $prev_positive_on_ART_35m + $prev_positive_on_ART_35f + $prev_positive_on_ART_40m + $prev_positive_on_ART_40f + $prev_positive_on_ART_45m + $prev_positive_on_ART_45f + $prev_positive_on_ART_50m + $prev_positive_on_ART_50f;


//Number previously HIV+ not on ART

                 $prev_positive_not_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_not_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_not_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND pre_hts_survey.regions_id = $regions_id AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_sum = $prev_positive_not_on_ART_10m + $prev_positive_not_on_ART_10f + $prev_positive_not_on_ART_15m + $prev_positive_not_on_ART_15f + $prev_positive_not_on_ART_20m + $prev_positive_not_on_ART_20f + $prev_positive_not_on_ART_25m + $prev_positive_not_on_ART_25f + $prev_positive_not_on_ART_30m + $prev_positive_not_on_ART_30f + $prev_positive_not_on_ART_35m + $prev_positive_not_on_ART_35f + $prev_positive_not_on_ART_40m + $prev_positive_not_on_ART_40f + $prev_positive_not_on_ART_45m + $prev_positive_not_on_ART_45f + $prev_positive_not_on_ART_50m + $prev_positive_not_on_ART_50f;



                 //ELIGIBLE FOR HTS
                  //ELIGIBILITY ROW
                 $rg_10m = $new_reg_10m - $hiv_prev_positive_10m;
$rg_10f = $new_reg_10f - $hiv_prev_positive_10f;

$rg_15m = $new_reg_15m - $hiv_prev_positive_15m;
$rg_15f = $new_reg_15f - $hiv_prev_positive_15f;

$rg_20m = $new_reg_20m - $hiv_prev_positive_20m;
$rg_20f = $new_reg_20f - $hiv_prev_positive_20f;

$rg_25m = $new_reg_25m - $hiv_prev_positive_25m;
$rg_25f = $new_reg_25f - $hiv_prev_positive_25f;

$rg_30m = $new_reg_30m - $hiv_prev_positive_30m;
$rg_30f = $new_reg_30f - $hiv_prev_positive_30f;

$rg_35m = $new_reg_35m - $hiv_prev_positive_35m;
$rg_35f = $new_reg_35f - $hiv_prev_positive_35f;

$rg_40m = $new_reg_40m - $hiv_prev_positive_40m;
$rg_40f = $new_reg_40f - $hiv_prev_positive_40f;

$rg_45m = $new_reg_45m - $hiv_prev_positive_45m;
$rg_45f = $new_reg_45f - $hiv_prev_positive_45f;

$rg_50m = $new_reg_50m - $hiv_prev_positive_50m;
$rg_50f = $new_reg_50f - $hiv_prev_positive_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;


                }elseif($_SESSION['login_type'] == 1){

                	
                    //ROW ONE DATA
                    $r1_10m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Male'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE  gender = 'Female'  AND  date(created_at) BETWEEN date(created_at) AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;



//New registration


    $new_reg_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $new_reg_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $new_reg_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $new_reg_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $new_reg_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $new_reg_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $new_reg_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $new_reg_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $new_reg_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $new_reg_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $new_reg_sum = $new_reg_10m + $new_reg_10f + $new_reg_15m + $new_reg_15f + $new_reg_20m + $new_reg_20f + $new_reg_25m + $new_reg_25f + $new_reg_30m + $new_reg_30f + $new_reg_35m + $new_reg_35f + $new_reg_40m + $new_reg_40f + $new_reg_45m + $new_reg_45f + $new_reg_50m + $new_reg_50f;



 //Total prison population for the reporting period (Alive and in prison)

                 $convicts_10m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_10f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $convicts_15m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_15f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $convicts_20m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_20f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $convicts_25m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $convicts_25f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $convicts_30m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_30f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $convicts_35m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_35f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $convicts_40m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_40f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $convicts_45m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_45f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $convicts_50m = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Male'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_50f = $conn->query("SELECT * FROM prisoners WHERE status = 1 AND gender = 'Female'  AND  date(created_at) BETWEEN '$date_from' AND '$date_to' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $convicts_sum = $convicts_10m + $convicts_10f + $convicts_15m + $convicts_15f + $convicts_20m + $convicts_20f + $convicts_25m + $convicts_25f + $convicts_30m + $convicts_30f + $convicts_35m + $convicts_35f + $convicts_40m + $convicts_40f + $convicts_45m + $convicts_45f + $convicts_50m + $convicts_50f;


//Number Previously HIV+

        $hiv_prev_positive_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $hiv_prev_positive_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $hiv_prev_positive_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $hiv_prev_positive_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $hiv_prev_positive_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $hiv_prev_positive_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $hiv_prev_positive_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $hiv_prev_positive_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $hiv_prev_positive_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $hiv_prev_positive_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.diagnosed_with_hiv = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $hiv_prev_positive_sum = $hiv_prev_positive_10m + $hiv_prev_positive_10f + $hiv_prev_positive_15m + $hiv_prev_positive_15f + $hiv_prev_positive_20m + $hiv_prev_positive_20f + $hiv_prev_positive_25m + $hiv_prev_positive_25f + $hiv_prev_positive_30m + $hiv_prev_positive_30f + $hiv_prev_positive_35m + $hiv_prev_positive_35f + $hiv_prev_positive_40m + $hiv_prev_positive_40f + $hiv_prev_positive_45m + $hiv_prev_positive_45f + $hiv_prev_positive_50m + $hiv_prev_positive_50f;


//Number previously HIV+ on ART


                 $prev_positive_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Yes' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_on_ART_sum = $prev_positive_on_ART_10m + $prev_positive_on_ART_10f + $prev_positive_on_ART_15m + $prev_positive_on_ART_15f + $prev_positive_on_ART_20m + $prev_positive_on_ART_20f + $prev_positive_on_ART_25m + $prev_positive_on_ART_25f + $prev_positive_on_ART_30m + $prev_positive_on_ART_30f + $prev_positive_on_ART_35m + $prev_positive_on_ART_35f + $prev_positive_on_ART_40m + $prev_positive_on_ART_40f + $prev_positive_on_ART_45m + $prev_positive_on_ART_45f + $prev_positive_on_ART_50m + $prev_positive_on_ART_50f;


//Number previously HIV+ not on ART

                 $prev_positive_not_on_ART_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $prev_positive_not_on_ART_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $prev_positive_not_on_ART_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $prev_positive_not_on_ART_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $prev_positive_not_on_ART_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $prev_positive_not_on_ART_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $prev_positive_not_on_ART_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $prev_positive_not_on_ART_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $prev_positive_not_on_ART_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $prev_positive_not_on_ART_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN pre_hts_survey ON stations.id = pre_hts_survey.stations_id JOIN prisoners ON prisoners.prisoners_no = pre_hts_survey.prisoners_no WHERE pre_hts_survey.on_ART = 'Not' AND  AND  date(pre_hts_survey.created_at) BETWEEN '$date_from' AND '$date_to' AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $prev_positive_not_on_ART_sum = $prev_positive_not_on_ART_10m + $prev_positive_not_on_ART_10f + $prev_positive_not_on_ART_15m + $prev_positive_not_on_ART_15f + $prev_positive_not_on_ART_20m + $prev_positive_not_on_ART_20f + $prev_positive_not_on_ART_25m + $prev_positive_not_on_ART_25f + $prev_positive_not_on_ART_30m + $prev_positive_not_on_ART_30f + $prev_positive_not_on_ART_35m + $prev_positive_not_on_ART_35f + $prev_positive_not_on_ART_40m + $prev_positive_not_on_ART_40f + $prev_positive_not_on_ART_45m + $prev_positive_not_on_ART_45f + $prev_positive_not_on_ART_50m + $prev_positive_not_on_ART_50f;

                 //ELIGIBLE FOR HTS
                  //ELIGIBILITY ROW
                 $rg_10m = $new_reg_10m - $hiv_prev_positive_10m;
$rg_10f = $new_reg_10f - $hiv_prev_positive_10f;

$rg_15m = $new_reg_15m - $hiv_prev_positive_15m;
$rg_15f = $new_reg_15f - $hiv_prev_positive_15f;

$rg_20m = $new_reg_20m - $hiv_prev_positive_20m;
$rg_20f = $new_reg_20f - $hiv_prev_positive_20f;

$rg_25m = $new_reg_25m - $hiv_prev_positive_25m;
$rg_25f = $new_reg_25f - $hiv_prev_positive_25f;

$rg_30m = $new_reg_30m - $hiv_prev_positive_30m;
$rg_30f = $new_reg_30f - $hiv_prev_positive_30f;

$rg_35m = $new_reg_35m - $hiv_prev_positive_35m;
$rg_35f = $new_reg_35f - $hiv_prev_positive_35f;

$rg_40m = $new_reg_40m - $hiv_prev_positive_40m;
$rg_40f = $new_reg_40f - $hiv_prev_positive_40f;

$rg_45m = $new_reg_45m - $hiv_prev_positive_45m;
$rg_45f = $new_reg_45f - $hiv_prev_positive_45f;

$rg_50m = $new_reg_50m - $hiv_prev_positive_50m;
$rg_50f = $new_reg_50f - $hiv_prev_positive_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;

                }
                
                 
                  ?>


                  <tr style="font-size: 12px;">
<td style="color: black;">Gender</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">TOTAL</td>
              
					</tr>
					<tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">A. Total prison population for the reporting period (Cummulative)
</td>  <td style="text-align: center;"><?php  echo $r1_10m;  ?></td>  <td style="text-align: center;"><?php  echo $r1_10f; ?></td>  <td style="text-align: center;"><?php echo $r1_15m;   ?></td>  <td style="text-align: center;"><?php echo $r1_15f;   ?></td>  <td style="text-align: center;"><?php echo $r1_20m;   ?></td>  <td style="text-align: center;"><?php echo $r1_20f;   ?></td>  <td style="text-align: center;"><?php echo $r1_25m;   ?></td>  <td style="text-align: center;"><?php echo $r1_25f;  ?></td>  <td style="text-align: center;"><?php echo $r1_30m;   ?></td> <td style="text-align: center;"><?php  echo $r1_30f;  ?></td> <td style="text-align: center;"><?php  echo $r1_35m;  ?></td> <td style="text-align: center;"><?php  echo $r1_35f;  ?></td> <td style="text-align: center;"><?php echo $r1_40m;   ?></td> <td style="text-align: center;"><?php echo $r1_40f;   ?></td> <td style="text-align: center;"><?php echo $r1_45m;  ?></td> <td style="text-align: center;"><?php  echo $r1_45f;  ?></td> <td style="text-align: center;"><?php echo $r1_50m;   ?></td> <td style="text-align: center;"><?php echo $r1_50f;   ?></td> <td style="text-align: center;"><?php echo $r1_sum; ?></td>
                    </tr>


                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">B. New registration
</td>  <td style="text-align: center;"><?php echo $new_reg_10m;  ?></td>  <td style="text-align: center;"><?php  echo $new_reg_10f; ?></td>  <td style="text-align: center;"><?php echo $new_reg_15m;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_15f;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_20m;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_20f;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_25m;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_25f;   ?></td>  <td style="text-align: center;"><?php echo $new_reg_30m;  ?></td> <td style="text-align: center;"><?php  echo $new_reg_30f; ?></td> <td style="text-align: center;"><?php  echo $new_reg_35m;  ?></td> <td style="text-align: center;"><?php echo $new_reg_35f; ?></td> <td style="text-align: center;"><?php echo $new_reg_40m;   ?></td> <td style="text-align: center;"><?php echo $new_reg_40f;  ?></td> <td style="text-align: center;"><?php echo $new_reg_45m;   ?></td> <td style="text-align: center;"><?php  echo $new_reg_45f;  ?></td> <td style="text-align: center;"><?php echo $new_reg_50m;   ?></td> <td style="text-align: center;"><?php echo $new_reg_50f;   ?></td> <td style="text-align: center;"><?php echo $new_reg_sum; ?></td>
                    </tr>




 <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">C. Total prison population for the reporting period (Alive and in prison)
</td>  <td style="text-align: center;"><?php echo $convicts_10m;  ?></td>  <td style="text-align: center;"><?php  echo $convicts_10f; ?></td>  <td style="text-align: center;"><?php echo $convicts_15m;   ?></td>  <td style="text-align: center;"><?php echo $convicts_15f;   ?></td>  <td style="text-align: center;"><?php echo $convicts_20m;   ?></td>  <td style="text-align: center;"><?php echo $convicts_20f;   ?></td>  <td style="text-align: center;"><?php echo $convicts_25m;   ?></td>  <td style="text-align: center;"><?php echo $convicts_25f;   ?></td>  <td style="text-align: center;"><?php echo $convicts_30m;  ?></td> <td style="text-align: center;"><?php  echo $convicts_30f; ?></td> <td style="text-align: center;"><?php  echo $convicts_35m;  ?></td> <td style="text-align: center;"><?php echo $convicts_35f; ?></td> <td style="text-align: center;"><?php echo $convicts_40m;   ?></td> <td style="text-align: center;"><?php echo $convicts_40f;  ?></td> <td style="text-align: center;"><?php echo $convicts_45m;   ?></td> <td style="text-align: center;"><?php  echo $convicts_45f;  ?></td> <td style="text-align: center;"><?php echo $convicts_50m;   ?></td> <td style="text-align: center;"><?php echo $convicts_50f;   ?></td> <td style="text-align: center;"><?php echo $convicts_sum; ?></td>
                    </tr>



                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">D. Number Previously HIV+
</td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_10m;  ?></td>  <td style="text-align: center;"><?php  echo $hiv_prev_positive_10f; ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_15m;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_15f;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_20m;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_20f;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_25m;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_25f;   ?></td>  <td style="text-align: center;"><?php echo $hiv_prev_positive_30m;  ?></td> <td style="text-align: center;"><?php  echo $hiv_prev_positive_30f; ?></td> <td style="text-align: center;"><?php  echo $hiv_prev_positive_35m;  ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_35f; ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_40m;   ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_40f;  ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_45m;   ?></td> <td style="text-align: center;"><?php  echo $hiv_prev_positive_45f;  ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_50m;   ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_50f;   ?></td> <td style="text-align: center;"><?php echo $hiv_prev_positive_sum; ?></td>
                    </tr>


                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">E. Number previously HIV+ on ART
</td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_on_ART_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">F. Number previously HIV+ not on ART
</td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>
                    <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">G. Number eligible for HTS 
</td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>

                    <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">H. Number tested for HIV 
</td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>
                    <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">I. Number newly tested HIV+
</td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>
                    <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">J. Number newly tested HIV+ initiated on ART
</td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>
                     <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px; font-weight: bold;">K. Number previously HIV+ (not on ART) initiated on ART 
</td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>


                    <tr style="background-color:yellow;">
<td style="color: #CD853F;font-size: 12px; font-weight: bold;">L. KP Prev
 
</td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_10m;  ?></td>  <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_10f; ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_15f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_20f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25m;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_25f;   ?></td>  <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_30m;  ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_30f; ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_35m;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_35f; ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_40f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_45m;   ?></td> <td style="text-align: center;"><?php  echo $prev_positive_not_on_ART_45f;  ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50m;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_50f;   ?></td> <td style="text-align: center;"><?php echo $prev_positive_not_on_ART_sum; ?></td>
                    </tr>
			
				</tbody>
			</table>
		</div>
	</div>
</div>

 <?php endif; ?>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>

<script>
  $(document).ready(function(){
    $('#list').dataTable({
        dom: 'QlBfrtip',
         //dom: 'QlBfrtip',
        "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
            ,
            'colvis'
        ]
    } );
  })
  
</script>


<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
  <script type="text/javascript" src="data/moment.min.js"></script>
 <script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
 <script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
  <script type="text/javascript" src="data/datetime-moment.js"></script>


<script>
  $(function () {
  $('[data-toggle="mytoggle"]').tooltip()
})
</script>

