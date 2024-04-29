<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
			<div class="card-tools">
				<!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
			</div>
		</div>

<div class="row">
      <div class="col-md-12">
      
<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist" style="width:100%">
	 <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center; text-align: center;">
    <a class="nav-link" id="home-tab-md"  href="./index.php?page=reports_in_tables" role="tab" aria-controls="home-md" aria-selected="true" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA: ALL	
">ALL</a>
                </li>
     <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center;">
    <a class="nav-link  active" id="home-tab-md"  href="./index.php?page=HTS_CASCADE_REPORT" role="tab" aria-controls="home-md" aria-selected="true" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA: HTS CASCADE	
">HTS CASCADE</a>
                </li>
  <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center;">
                  <a class="nav-link" id="profile-tab-md" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA:  VL MONITORING	
" href="./index.php?page=VL_MONITORING_REPORT" role="tab" aria-controls="profile-md" aria-selected="false">VL MONITORING</a>
                </li>
 <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center;">
                  <a class="nav-link" id="profile-tab-md" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA: STI	
" href="./index.php?page=STI_REPORT" role="tab" aria-controls="profile-md" aria-selected="false">STI</a>
                </li>
   <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center;">
                  <a class="nav-link" id="contact-tab-md" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA: TB	
" href="./index.php?page=TB_REPORT" role="tab" aria-controls="contact-md" aria-selected="false">TB</a>
                </li>
  <li class="nav-item waves-effect waves-light" style="width:16.66%; text-align: center;">
                  <a class="nav-link" id="contact-tab-md" data-toggle="mytoggle" data-placement="top" title="PROGRAM AREA: COVID-19	
" href="./index.php?page=COVID_19_REPORT" role="tab" aria-controls="contact-md" aria-selected="false">COVID-19</a>
                </li>
               
              </ul>
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

                if($_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){

                	//ROW ONE DATA
                	$r1_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND stations_id = $stations_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;

                	//ROW TWO DATA

                 $r2_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r2_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r2_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_sum = $r2_10m + $r2_10f + $r2_15m + $r2_15f + $r2_20m + $r2_20f + $r2_25m + $r2_25f + $r2_30m + $r2_30f + $r2_35m + $r2_35f + $r2_40m + $r2_40f + $r2_45m + $r2_45f + $r2_50m + $r2_50f;


                 //ROW THREE DATA

                 $r3_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r3_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r3_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_sum = $r3_10m + $r3_10f + $r3_15m + $r3_15f + $r3_20m + $r3_20f + $r3_25m + $r3_25f + $r3_30m + $r3_30f + $r3_35m + $r3_35f + $r3_40m + $r3_40f + $r3_45m + $r3_45f + $r3_50m + $r3_50f;


                 //RAW 4 DATA
                 $r4_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r4_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r4_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_sum = $r4_10m + $r4_10f + $r4_15m + $r4_15f + $r4_20m + $r4_20f + $r4_25m + $r4_25f + $r4_30m + $r4_30f + $r4_35m + $r4_35f + $r4_40m + $r4_40f + $r4_45m + $r4_45f + $r4_50m + $r4_50f;


                 //ROW 5 DATA
                $r5_10m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_10f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_15m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_15f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_20m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_20f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_25m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r5_25f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r5_30m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_30f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_35m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_35f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_40m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_40f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_45m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_45f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_50m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_50f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_sum = $r5_10m + $r5_10f + $r5_15m + $r5_15f + $r5_20m + $r5_20f + $r5_25m + $r5_25f + $r5_30m + $r5_30f + $r5_35m + $r5_35f + $r5_40m + $r5_40f + $r5_45m + $r5_45f + $r5_50m + $r5_50f;


                  //ROW 6 DATA
                 $r6_10m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_10f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_15m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_15f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_20m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_20f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_25m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r6_25f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r6_30m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_30f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_35m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_35f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_40m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_40f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_45m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_45f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_50m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_50f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.stations_id = $stations_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_sum = $r6_10m + $r6_10f + $r6_15m + $r6_15f + $r6_20m + $r6_20f + $r6_25m + $r6_25f + $r6_30m + $r6_30f + $r6_35m + $r6_35f + $r6_40m + $r6_40f + $r6_45m + $r6_45f + $r6_50m + $r6_50f;

                 //ROW 7 DATA
                 $r7_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r7_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r7_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_sum = $r7_10m + $r7_10f + $r7_15m + $r7_15f + $r7_20m + $r7_20f + $r7_25m + $r7_25f + $r7_30m + $r7_30f + $r7_35m + $r7_35f + $r7_40m + $r7_40f + $r7_45m + $r7_45f + $r7_50m + $r7_50f;

                 //ROW 8 DATA
                 $r8_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r8_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r8_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.stations_id = $stations_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_sum = $r8_10m + $r8_10f + $r8_15m + $r8_15f + $r8_20m + $r8_20f + $r8_25m + $r8_25f + $r8_30m + $r8_30f + $r8_35m + $r8_35f + $r8_40m + $r8_40f + $r8_45m + $r8_45f + $r8_50m + $r8_50f;





                 //ELIGIBILITY ROW
                 $rg_10m = $r1_10m - $r2_10m;
$rg_10f = $r1_10f - $r2_10f;

$rg_15m = $r1_15m - $r2_15m;
$rg_15f = $r1_15f - $r2_15f;

$rg_20m = $r1_20m - $r2_20m;
$rg_20f = $r1_20f - $r2_20f;

$rg_25m = $r1_25m - $r2_25m;
$rg_25f = $r1_25f - $r2_25f;

$rg_30m = $r1_30m - $r2_30m;
$rg_30f = $r1_30f - $r2_30f;

$rg_35m = $r1_35m - $r2_35m;
$rg_35f = $r1_35f - $r2_35f;

$rg_40m = $r1_40m - $r2_40m;
$rg_40f = $r1_40f - $r2_40f;

$rg_45m = $r1_45m - $r2_45m;
$rg_45f = $r1_45f - $r2_45f;

$rg_50m = $r1_50m - $r2_50m;
$rg_50f = $r1_50f - $r2_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;


                }elseif($_SESSION['login_type'] == 5){

                 	//ROW ONE DATA
                	$r1_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female' AND regions_id = $regions_id AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;

                	//ROW TWO DATA

                 $r2_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r2_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r2_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_sum = $r2_10m + $r2_10f + $r2_15m + $r2_15f + $r2_20m + $r2_20f + $r2_25m + $r2_25f + $r2_30m + $r2_30f + $r2_35m + $r2_35f + $r2_40m + $r2_40f + $r2_45m + $r2_45f + $r2_50m + $r2_50f;


                 //ROW THREE DATA

                 $r3_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r3_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r3_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_sum = $r3_10m + $r3_10f + $r3_15m + $r3_15f + $r3_20m + $r3_20f + $r3_25m + $r3_25f + $r3_30m + $r3_30f + $r3_35m + $r3_35f + $r3_40m + $r3_40f + $r3_45m + $r3_45f + $r3_50m + $r3_50f;


                 //RAW 4 DATA
                 $r4_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r4_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r4_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_sum = $r4_10m + $r4_10f + $r4_15m + $r4_15f + $r4_20m + $r4_20f + $r4_25m + $r4_25f + $r4_30m + $r4_30f + $r4_35m + $r4_35f + $r4_40m + $r4_40f + $r4_45m + $r4_45f + $r4_50m + $r4_50f;


                 //ROW 5 DATA
                $r5_10m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_10f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_15m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_15f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_20m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_20f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_25m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r5_25f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r5_30m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_30f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_35m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_35f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_40m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_40f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_45m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_45f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_50m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_50f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4 AND hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_sum = $r5_10m + $r5_10f + $r5_15m + $r5_15f + $r5_20m + $r5_20f + $r5_25m + $r5_25f + $r5_30m + $r5_30f + $r5_35m + $r5_35f + $r5_40m + $r5_40f + $r5_45m + $r5_45f + $r5_50m + $r5_50f;


                  //ROW 6 DATA
                 $r6_10m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_10f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_15m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_15f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_20m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_20f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_25m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r6_25f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r6_30m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_30f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_35m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_35f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_40m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_40f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_45m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_45f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_50m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_50f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE  hiv_test.regions_id = $regions_id AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_sum = $r6_10m + $r6_10f + $r6_15m + $r6_15f + $r6_20m + $r6_20f + $r6_25m + $r6_25f + $r6_30m + $r6_30f + $r6_35m + $r6_35f + $r6_40m + $r6_40f + $r6_45m + $r6_45f + $r6_50m + $r6_50f;

                 //ROW 7 DATA
                 $r7_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r7_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r7_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_sum = $r7_10m + $r7_10f + $r7_15m + $r7_15f + $r7_20m + $r7_20f + $r7_25m + $r7_25f + $r7_30m + $r7_30f + $r7_35m + $r7_35f + $r7_40m + $r7_40f + $r7_45m + $r7_45f + $r7_50m + $r7_50f;

                 //ROW 8 DATA
                 $r8_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r8_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r8_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART' AND hiv_test.regions_id = $regions_id AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_sum = $r8_10m + $r8_10f + $r8_15m + $r8_15f + $r8_20m + $r8_20f + $r8_25m + $r8_25f + $r8_30m + $r8_30f + $r8_35m + $r8_35f + $r8_40m + $r8_40f + $r8_45m + $r8_45f + $r8_50m + $r8_50f;





                 //ELIGIBILITY ROW
                 $rg_10m = $r1_10m - $r2_10m;
$rg_10f = $r1_10f - $r2_10f;

$rg_15m = $r1_15m - $r2_15m;
$rg_15f = $r1_15f - $r2_15f;

$rg_20m = $r1_20m - $r2_20m;
$rg_20f = $r1_20f - $r2_20f;

$rg_25m = $r1_25m - $r2_25m;
$rg_25f = $r1_25f - $r2_25f;

$rg_30m = $r1_30m - $r2_30m;
$rg_30f = $r1_30f - $r2_30f;

$rg_35m = $r1_35m - $r2_35m;
$rg_35f = $r1_35f - $r2_35f;

$rg_40m = $r1_40m - $r2_40m;
$rg_40f = $r1_40f - $r2_40f;

$rg_45m = $r1_45m - $r2_45m;
$rg_45f = $r1_45f - $r2_45f;

$rg_50m = $r1_50m - $r2_50m;
$rg_50f = $r1_50f - $r2_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;


                }elseif($_SESSION['login_type'] == 1){

                	//ROW ONE DATA
                	$r1_10m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_10f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r1_15m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_15f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r1_20m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_20f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r1_25m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r1_25f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r1_30m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_30f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r1_35m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_35f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r1_40m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_40f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r1_45m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_45f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r1_50m = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Male'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_50f = $conn->query("SELECT * FROM prisoners WHERE status != 3 AND gender = 'Female'  AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r1_sum = $r1_10m + $r1_10f + $r1_15m + $r1_15f + $r1_20m + $r1_20f + $r1_25m + $r1_25f + $r1_30m + $r1_30f + $r1_35m + $r1_35f + $r1_40m + $r1_40f + $r1_45m + $r1_45f + $r1_50m + $r1_50f;

                	//ROW TWO DATA

                 $r2_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r2_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r2_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r2_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r2_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r2_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r2_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r2_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r2_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r2_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r2_sum = $r2_10m + $r2_10f + $r2_15m + $r2_15f + $r2_20m + $r2_20f + $r2_25m + $r2_25f + $r2_30m + $r2_30f + $r2_35m + $r2_35f + $r2_40m + $r2_40f + $r2_45m + $r2_45f + $r2_50m + $r2_50f;


                 //ROW THREE DATA

                 $r3_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r3_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r3_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r3_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r3_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r3_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r3_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r3_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r3_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r3_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Already on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r3_sum = $r3_10m + $r3_10f + $r3_15m + $r3_15f + $r3_20m + $r3_20f + $r3_25m + $r3_25f + $r3_30m + $r3_30f + $r3_35m + $r3_35f + $r3_40m + $r3_40f + $r3_45m + $r3_45f + $r3_50m + $r3_50f;


                 //RAW 4 DATA
                 $r4_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r4_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r4_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r4_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r4_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r4_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r4_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r4_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r4_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r4_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r4_sum = $r4_10m + $r4_10f + $r4_15m + $r4_15f + $r4_20m + $r4_20f + $r4_25m + $r4_25f + $r4_30m + $r4_30f + $r4_35m + $r4_35f + $r4_40m + $r4_40f + $r4_45m + $r4_45f + $r4_50m + $r4_50f;


                 //ROW 5 DATA
                $r5_10m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_10f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r5_15m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_15f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r5_20m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_20f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r5_25m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r5_25f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r5_30m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_30f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r5_35m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_35f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r5_40m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_40f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r5_45m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_45f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r5_50m = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_50f = $conn->query("SELECT hiv_test.id FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE MONTH(hiv_test.service_date)  <= 4  AND  prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r5_sum = $r5_10m + $r5_10f + $r5_15m + $r5_15f + $r5_20m + $r5_20f + $r5_25m + $r5_25f + $r5_30m + $r5_30f + $r5_35m + $r5_35f + $r5_40m + $r5_40f + $r5_45m + $r5_45f + $r5_50m + $r5_50f;


                  //ROW 6 DATA
                 $r6_10m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_10f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r6_15m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_15f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r6_20m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_20f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r6_25m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r6_25f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r6_30m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_30f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r6_35m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_35f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r6_40m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_40f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r6_45m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_45f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r6_50m = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_50f = $conn->query("SELECT hiv_test.* FROM hiv_test JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no WHERE    prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r6_sum = $r6_10m + $r6_10f + $r6_15m + $r6_15f + $r6_20m + $r6_20f + $r6_25m + $r6_25f + $r6_30m + $r6_30f + $r6_35m + $r6_35f + $r6_40m + $r6_40f + $r6_45m + $r6_45f + $r6_50m + $r6_50f;

                 //ROW 7 DATA
                 $r7_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r7_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r7_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r7_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r7_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r7_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r7_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r7_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r7_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r7_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Newly Diagnosed HIV Positive'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r7_sum = $r7_10m + $r7_10f + $r7_15m + $r7_15f + $r7_20m + $r7_20f + $r7_25m + $r7_25f + $r7_30m + $r7_30f + $r7_35m + $r7_35f + $r7_40m + $r7_40f + $r7_45m + $r7_45f + $r7_50m + $r7_50f;

                 //ROW 8 DATA
                 $r8_10m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_10f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 10 AND 14")->num_rows;

                 $r8_15m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_15f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 15 AND 19")->num_rows;

                 $r8_20m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_20f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 20 AND 24")->num_rows;

                 $r8_25m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;

                 $r8_25f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 25 AND 29")->num_rows;


                 $r8_30m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_30f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 30 AND 34")->num_rows;

                 $r8_35m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_35f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 35 AND 39")->num_rows;

                 $r8_40m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_40f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 40 AND 44")->num_rows;

                 $r8_45m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_45f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 45 AND 49")->num_rows;

                 $r8_50m = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Male' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_50f = $conn->query("SELECT stations.name AS stations, prisoners.gender, art_service.art_status FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id JOIN prisoners ON prisoners.prisoners_no = hiv_test.prisoners_no JOIN art_service ON prisoners.prisoners_no = art_service.prisoners_no WHERE hiv_test.previously_hiv_positive = 'Yes' AND art_service.art_status = 'Not on ART'  AND prisoners.gender = 'Female' AND DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),prisoners.dob)), '%Y')+0 BETWEEN 50 AND 200")->num_rows;

                 $r8_sum = $r8_10m + $r8_10f + $r8_15m + $r8_15f + $r8_20m + $r8_20f + $r8_25m + $r8_25f + $r8_30m + $r8_30f + $r8_35m + $r8_35f + $r8_40m + $r8_40f + $r8_45m + $r8_45f + $r8_50m + $r8_50f;





                 //ELIGIBILITY ROW
                 $rg_10m = $r1_10m - $r2_10m;
$rg_10f = $r1_10f - $r2_10f;

$rg_15m = $r1_15m - $r2_15m;
$rg_15f = $r1_15f - $r2_15f;

$rg_20m = $r1_20m - $r2_20m;
$rg_20f = $r1_20f - $r2_20f;

$rg_25m = $r1_25m - $r2_25m;
$rg_25f = $r1_25f - $r2_25f;

$rg_30m = $r1_30m - $r2_30m;
$rg_30f = $r1_30f - $r2_30f;

$rg_35m = $r1_35m - $r2_35m;
$rg_35f = $r1_35f - $r2_35f;

$rg_40m = $r1_40m - $r2_40m;
$rg_40f = $r1_40f - $r2_40f;

$rg_45m = $r1_45m - $r2_45m;
$rg_45f = $r1_45f - $r2_45f;

$rg_50m = $r1_50m - $r2_50m;
$rg_50f = $r1_50f - $r2_50f;

$rg_sum = $rg_10m + $rg_10f + $rg_15m + $rg_15f + $rg_20m + $rg_20f + $rg_25m + $rg_25f + $rg_30m + $rg_30f + $rg_35m + $rg_35f + $rg_40m + $rg_40f + $rg_45m + $rg_45f + $rg_50m + $rg_50f;

                }
                
                 
                  ?>


                  <tr style="font-size: 12px;">
<td style="color: black;">Gender</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">M</td>  <td style="text-align: center;color: #CD853F;">F</td> <td style="text-align: center;color: #CD853F;">TOTAL</td>
              
					</tr>
					<tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">A. Total prison population</td>  <td style="text-align: center;"><?php if($r1_10m == 0){ echo '';} else{ echo $r1_10m;}  ?></td>  <td style="text-align: center;"><?php if($r1_10f == 0){echo ''; } else{ echo $r1_10f;} ?></td>  <td style="text-align: center;"><?php if($r1_15m == 0){echo '';} else{echo $r1_15m; }  ?></td>  <td style="text-align: center;"><?php if($r1_15f == 0){echo '';} else {echo $r1_15f; }  ?></td>  <td style="text-align: center;"><?php if($r1_20m == 0){echo '';} else {echo $r1_20m; }  ?></td>  <td style="text-align: center;"><?php if($r1_20f == 0){echo '';} else{echo $r1_20f; }  ?></td>  <td style="text-align: center;"><?php if($r1_25m == 0){echo '';} else {echo $r1_25m; }  ?></td>  <td style="text-align: center;"><?php if($r1_25f == 0){echo '';} else{echo $r1_25f; }  ?></td>  <td style="text-align: center;"><?php if($r1_30m == 0){echo '';}else {echo $r1_30m; }  ?></td> <td style="text-align: center;"><?php if($r1_30f == 0){echo '';} else{ echo $r1_30f;}  ?></td> <td style="text-align: center;"><?php if($r1_35m == 0){echo '';} else { echo $r1_35m;}  ?></td> <td style="text-align: center;"><?php if($r1_35f == 0){ echo '';} else{ echo $r1_35f;}  ?></td> <td style="text-align: center;"><?php if($r1_40m == 0){echo '';} else{echo $r1_40m; }  ?></td> <td style="text-align: center;"><?php if($r1_40f == 0){echo '';} else {echo $r1_40f; }  ?></td> <td style="text-align: center;"><?php if($r1_45m == 0){echo '';} else {echo $r1_45m; }  ?></td> <td style="text-align: center;"><?php if($r1_45f == 0){echo '';} else{ echo $r1_45f;}  ?></td> <td style="text-align: center;"><?php if($r1_50m == 0){echo '';} else {echo $r1_50m; }  ?></td> <td style="text-align: center;"><?php if($r1_50f == 0){echo '';} else{echo $r1_50f; }  ?></td> <td style="text-align: center;"><?php echo $r1_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">B. Previously HIV+</td>  <td style="text-align: center;"><?php if($r2_10m == 0){ echo '';} else{ echo $r2_10m;}  ?></td>  <td style="text-align: center;"><?php if($r2_10f == 0){echo ''; } else{ echo $r2_10f;} ?></td>  <td style="text-align: center;"><?php if($r2_15m == 0){echo '';} else{echo $r2_15m; }  ?></td>  <td style="text-align: center;"><?php if($r2_15f == 0){echo '';} else {echo $r2_15f; }  ?></td>  <td style="text-align: center;"><?php if($r2_20m == 0){echo '';} else {echo $r2_20m; }  ?></td>  <td style="text-align: center;"><?php if($r2_20f == 0){echo '';} else{echo $r2_20f; }  ?></td>  <td style="text-align: center;"><?php if($r2_25m == 0){echo '';} else {echo $r2_25m; }  ?></td>  <td style="text-align: center;"><?php if($r2_25f == 0){echo '';} else{echo $r2_25f; }  ?></td>  <td style="text-align: center;"><?php if($r2_30m == 0){echo '';}else {echo $r2_30m; }  ?></td> <td style="text-align: center;"><?php if($r2_30f == 0){echo '';} else{ echo $r2_30f;}  ?></td> <td style="text-align: center;"><?php if($r2_35m == 0){echo '';} else { echo $r2_35m;}  ?></td> <td style="text-align: center;"><?php if($r2_35f == 0){ echo '';} else{ echo $r2_35f;}  ?></td> <td style="text-align: center;"><?php if($r2_40m == 0){echo '';} else{echo $r2_40m; }  ?></td> <td style="text-align: center;"><?php if($r2_40f == 0){echo '';} else {echo $r2_40f; }  ?></td> <td style="text-align: center;"><?php if($r2_45m == 0){echo '';} else {echo $r2_45m; }  ?></td> <td style="text-align: center;"><?php if($r2_45f == 0){echo '';} else{ echo $r2_45f;}  ?></td> <td style="text-align: center;"><?php if($r2_50m == 0){echo '';} else {echo $r2_50m; }  ?></td> <td style="text-align: center;"><?php if($r2_50f == 0){echo '';} else{echo $r2_50f; }  ?></td> <td style="text-align: center;"><?php echo $r2_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">C. Previously HIV+ on ART</td>  <td style="text-align: center;"><?php if($r3_10m == 0){ echo '';} else{ echo $r3_10m;}  ?></td>  <td style="text-align: center;"><?php if($r3_10f == 0){echo ''; } else{ echo $r3_10f;} ?></td>  <td style="text-align: center;"><?php if($r3_15m == 0){echo '';} else{echo $r3_15m; }  ?></td>  <td style="text-align: center;"><?php if($r3_15f == 0){echo '';} else {echo $r3_15f; }  ?></td>  <td style="text-align: center;"><?php if($r3_20m == 0){echo '';} else {echo $r3_20m; }  ?></td>  <td style="text-align: center;"><?php if($r3_20f == 0){echo '';} else{echo $r3_20f; }  ?></td>  <td style="text-align: center;"><?php if($r3_25m == 0){echo '';} else {echo $r3_25m; }  ?></td>  <td style="text-align: center;"><?php if($r3_25f == 0){echo '';} else{echo $r3_25f; }  ?></td>  <td style="text-align: center;"><?php if($r3_30m == 0){echo '';}else {echo $r3_30m; }  ?></td> <td style="text-align: center;"><?php if($r3_30f == 0){echo '';} else{ echo $r3_30f;}  ?></td> <td style="text-align: center;"><?php if($r3_35m == 0){echo '';} else { echo $r3_35m;}  ?></td> <td style="text-align: center;"><?php if($r3_35f == 0){ echo '';} else{ echo $r3_35f;}  ?></td> <td style="text-align: center;"><?php if($r3_40m == 0){echo '';} else{echo $r3_40m; }  ?></td> <td style="text-align: center;"><?php if($r3_40f == 0){echo '';} else {echo $r3_40f; }  ?></td> <td style="text-align: center;"><?php if($r3_45m == 0){echo '';} else {echo $r3_45m; }  ?></td> <td style="text-align: center;"><?php if($r3_45f == 0){echo '';} else{ echo $r3_45f;}  ?></td> <td style="text-align: center;"><?php if($r3_50m == 0){echo '';} else {echo $r3_50m; }  ?></td> <td style="text-align: center;"><?php if($r3_50f == 0){echo '';} else{echo $r3_50f; }  ?></td> <td style="text-align: center;"><?php echo $r3_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">D. Previously HIV+ not on ART</td>  <td style="text-align: center;"><?php if($r4_10m == 0){ echo '';} else{ echo $r4_10m;}  ?></td>  <td style="text-align: center;"><?php if($r4_10f == 0){echo ''; } else{ echo $r4_10f;} ?></td>  <td style="text-align: center;"><?php if($r4_15m == 0){echo '';} else{echo $r4_15m; }  ?></td>  <td style="text-align: center;"><?php if($r4_15f == 0){echo '';} else {echo $r4_15f; }  ?></td>  <td style="text-align: center;"><?php if($r4_20m == 0){echo '';} else {echo $r4_20m; }  ?></td>  <td style="text-align: center;"><?php if($r4_20f == 0){echo '';} else{echo $r4_20f; }  ?></td>  <td style="text-align: center;"><?php if($r4_25m == 0){echo '';} else {echo $r4_25m; }  ?></td>  <td style="text-align: center;"><?php if($r4_25f == 0){echo '';} else{echo $r4_25f; }  ?></td>  <td style="text-align: center;"><?php if($r4_30m == 0){echo '';}else {echo $r4_30m; }  ?></td> <td style="text-align: center;"><?php if($r4_30f == 0){echo '';} else{ echo $r4_30f;}  ?></td> <td style="text-align: center;"><?php if($r4_35m == 0){echo '';} else { echo $r4_35m;}  ?></td> <td style="text-align: center;"><?php if($r4_35f == 0){ echo '';} else{ echo $r4_35f;}  ?></td> <td style="text-align: center;"><?php if($r4_40m == 0){echo '';} else{echo $r4_40m; }  ?></td> <td style="text-align: center;"><?php if($r4_40f == 0){echo '';} else {echo $r4_40f; }  ?></td> <td style="text-align: center;"><?php if($r4_45m == 0){echo '';} else {echo $r4_45m; }  ?></td> <td style="text-align: center;"><?php if($r4_45f == 0){echo '';} else{ echo $r4_45f;}  ?></td> <td style="text-align: center;"><?php if($r4_50m == 0){echo '';} else {echo $r4_50m; }  ?></td> <td style="text-align: center;"><?php if($r4_50f == 0){echo '';} else{echo $r4_50f; }  ?></td> <td style="text-align: center;"><?php echo $r4_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">E. Eligible for HTS (A - B)</td>  <td style="text-align: center;"><?php if($rg_10m == 0){ echo '';} else{ echo $rg_10m;}  ?></td>  <td style="text-align: center;"><?php if($rg_10f == 0){echo ''; } else{ echo $rg_10f;} ?></td>  <td style="text-align: center;"><?php if($rg_15m == 0){echo '';} else{echo $rg_15m; }  ?></td>  <td style="text-align: center;"><?php if($rg_15f == 0){echo '';} else {echo $rg_15f; }  ?></td>  <td style="text-align: center;"><?php if($rg_20m == 0){echo '';} else {echo $rg_20m; }  ?></td>  <td style="text-align: center;"><?php if($rg_20f == 0){echo '';} else{echo $rg_20f; }  ?></td>  <td style="text-align: center;"><?php if($rg_25m == 0){echo '';} else {echo $rg_25m; }  ?></td>  <td style="text-align: center;"><?php if($rg_25f == 0){echo '';} else{echo $rg_25f; }  ?></td>  <td style="text-align: center;"><?php if($rg_30m == 0){echo '';}else {echo $rg_30m; }  ?></td> <td style="text-align: center;"><?php if($rg_30f == 0){echo '';} else{ echo $rg_30f;}  ?></td> <td style="text-align: center;"><?php if($rg_35m == 0){echo '';} else { echo $rg_35m;}  ?></td> <td style="text-align: center;"><?php if($rg_35f == 0){ echo '';} else{ echo $rg_35f;}  ?></td> <td style="text-align: center;"><?php if($rg_40m == 0){echo '';} else{echo $rg_40m; }  ?></td> <td style="text-align: center;"><?php if($rg_40f == 0){echo '';} else {echo $rg_40f; }  ?></td> <td style="text-align: center;"><?php if($rg_45m == 0){echo '';} else {echo $rg_45m; }  ?></td> <td style="text-align: center;"><?php if($rg_45f == 0){echo '';} else{ echo $rg_45f;}  ?></td> <td style="text-align: center;"><?php if($rg_50m == 0){echo '';} else {echo $rg_50m; }  ?></td> <td style="text-align: center;"><?php if($rg_50f == 0){echo '';} else{echo $rg_50f; }  ?></td> <td style="text-align: center;"><?php echo $rg_sum; ?></td>

                    </tr>	
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">F. Tested for HIV(4-Months Ago)</td>  <td style="text-align: center;"><?php if($r5_10m == 0){ echo '';} else{ echo $r5_10m;}  ?></td>  <td style="text-align: center;"><?php if($r5_10f == 0){echo ''; } else{ echo $r5_10f;} ?></td>  <td style="text-align: center;"><?php if($r5_15m == 0){echo '';} else{echo $r5_15m; }  ?></td>  <td style="text-align: center;"><?php if($r5_15f == 0){echo '';} else {echo $r5_15f; }  ?></td>  <td style="text-align: center;"><?php if($r5_20m == 0){echo '';} else {echo $r5_20m; }  ?></td>  <td style="text-align: center;"><?php if($r5_20f == 0){echo '';} else{echo $r5_20f; }  ?></td>  <td style="text-align: center;"><?php if($r5_25m == 0){echo '';} else {echo $r5_25m; }  ?></td>  <td style="text-align: center;"><?php if($r5_25f == 0){echo '';} else{echo $r5_25f; }  ?></td>  <td style="text-align: center;"><?php if($r5_30m == 0){echo '';}else {echo $r5_30m; }  ?></td> <td style="text-align: center;"><?php if($r5_30f == 0){echo '';} else{ echo $r5_30f;}  ?></td> <td style="text-align: center;"><?php if($r5_35m == 0){echo '';} else { echo $r5_35m;}  ?></td> <td style="text-align: center;"><?php if($r5_35f == 0){ echo '';} else{ echo $r5_35f;}  ?></td> <td style="text-align: center;"><?php if($r5_40m == 0){echo '';} else{echo $r5_40m; }  ?></td> <td style="text-align: center;"><?php if($r5_40f == 0){echo '';} else {echo $r5_40f; }  ?></td> <td style="text-align: center;"><?php if($r5_45m == 0){echo '';} else {echo $r5_45m; }  ?></td> <td style="text-align: center;"><?php if($r5_45f == 0){echo '';} else{ echo $r5_45f;}  ?></td> <td style="text-align: center;"><?php if($r5_50m == 0){echo '';} else {echo $r5_50m; }  ?></td> <td style="text-align: center;"><?php if($r5_50f == 0){echo '';} else{echo $r5_50f; }  ?></td> <td style="text-align: center;"><?php echo $r5_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">G. Newly tested HIV+</td> <td style="text-align: center;"><?php if($r6_10m == 0){ echo '';} else{ echo $r6_10m;}  ?></td>  <td style="text-align: center;"><?php if($r6_10f == 0){echo ''; } else{ echo $r6_10f;} ?></td>  <td style="text-align: center;"><?php if($r6_15m == 0){echo '';} else{echo $r6_15m; }  ?></td>  <td style="text-align: center;"><?php if($r6_15f == 0){echo '';} else {echo $r6_15f; }  ?></td>  <td style="text-align: center;"><?php if($r6_20m == 0){echo '';} else {echo $r6_20m; }  ?></td>  <td style="text-align: center;"><?php if($r6_20f == 0){echo '';} else{echo $r6_20f; }  ?></td>  <td style="text-align: center;"><?php if($r6_25m == 0){echo '';} else {echo $r6_25m; }  ?></td>  <td style="text-align: center;"><?php if($r6_25f == 0){echo '';} else{echo $r6_25f; }  ?></td>  <td style="text-align: center;"><?php if($r6_30m == 0){echo '';}else {echo $r6_30m; }  ?></td> <td style="text-align: center;"><?php if($r6_30f == 0){echo '';} else{ echo $r6_30f;}  ?></td> <td style="text-align: center;"><?php if($r6_35m == 0){echo '';} else { echo $r6_35m;}  ?></td> <td style="text-align: center;"><?php if($r6_35f == 0){ echo '';} else{ echo $r6_35f;}  ?></td> <td style="text-align: center;"><?php if($r6_40m == 0){echo '';} else{echo $r6_40m; }  ?></td> <td style="text-align: center;"><?php if($r6_40f == 0){echo '';} else {echo $r6_40f; }  ?></td> <td style="text-align: center;"><?php if($r6_45m == 0){echo '';} else {echo $r6_45m; }  ?></td> <td style="text-align: center;"><?php if($r6_45f == 0){echo '';} else{ echo $r6_45f;}  ?></td> <td style="text-align: center;"><?php if($r6_50m == 0){echo '';} else {echo $r6_50m; }  ?></td> <td style="text-align: center;"><?php if($r6_50f == 0){echo '';} else{echo $r6_50f; }  ?></td> <td style="text-align: center;"><?php echo $r6_sum; ?></td>
                    </tr>
                    <tr>
<td style="color: #CD853F;font-size: 12px;font-weight: bold;">H. Newly tested HIV+ initiated on ART</td> <td style="text-align: center;"><?php if($r7_10m == 0){ echo '';} else{ echo $r7_10m;}  ?></td>  <td style="text-align: center;"><?php if($r7_10f == 0){echo ''; } else{ echo $r7_10f;} ?></td>  <td style="text-align: center;"><?php if($r7_15m == 0){echo '';} else{echo $r7_15m; }  ?></td>  <td style="text-align: center;"><?php if($r7_15f == 0){echo '';} else {echo $r7_15f; }  ?></td>  <td style="text-align: center;"><?php if($r7_20m == 0){echo '';} else {echo $r7_20m; }  ?></td>  <td style="text-align: center;"><?php if($r7_20f == 0){echo '';} else{echo $r7_20f; }  ?></td>  <td style="text-align: center;"><?php if($r7_25m == 0){echo '';} else {echo $r7_25m; }  ?></td>  <td style="text-align: center;"><?php if($r7_25f == 0){echo '';} else{echo $r7_25f; }  ?></td>  <td style="text-align: center;"><?php if($r7_30m == 0){echo '';}else {echo $r7_30m; }  ?></td> <td style="text-align: center;"><?php if($r7_30f == 0){echo '';} else{ echo $r7_30f;}  ?></td> <td style="text-align: center;"><?php if($r7_35m == 0){echo '';} else { echo $r7_35m;}  ?></td> <td style="text-align: center;"><?php if($r7_35f == 0){ echo '';} else{ echo $r7_35f;}  ?></td> <td style="text-align: center;"><?php if($r7_40m == 0){echo '';} else{echo $r7_40m; }  ?></td> <td style="text-align: center;"><?php if($r7_40f == 0){echo '';} else {echo $r7_40f; }  ?></td> <td style="text-align: center;"><?php if($r7_45m == 0){echo '';} else {echo $r7_45m; }  ?></td> <td style="text-align: center;"><?php if($r7_45f == 0){echo '';} else{ echo $r7_45f;}  ?></td> <td style="text-align: center;"><?php if($r7_50m == 0){echo '';} else {echo $r7_50m; }  ?></td> <td style="text-align: center;"><?php if($r7_50f == 0){echo '';} else{echo $r7_50f; }  ?></td> <td style="text-align: center;"><?php echo $r7_sum; ?></td>
                    </tr>
                     <tr>
<td style="color: #CD853F;font-size: 12px; font-weight: bold;">I. Previously HIV+ (not on ART) initiated on ART (from d)</td>  <td style="text-align: center;"><?php if($r8_10m == 0){ echo '';} else{ echo $r8_10m;}  ?></td>  <td style="text-align: center;"><?php if($r8_10f == 0){echo ''; } else{ echo $r8_10f;} ?></td>  <td style="text-align: center;"><?php if($r8_15m == 0){echo '';} else{echo $r8_15m; }  ?></td>  <td style="text-align: center;"><?php if($r8_15f == 0){echo '';} else {echo $r8_15f; }  ?></td>  <td style="text-align: center;"><?php if($r8_20m == 0){echo '';} else {echo $r8_20m; }  ?></td>  <td style="text-align: center;"><?php if($r8_20f == 0){echo '';} else{echo $r8_20f; }  ?></td>  <td style="text-align: center;"><?php if($r8_25m == 0){echo '';} else {echo $r8_25m; }  ?></td>  <td style="text-align: center;"><?php if($r8_25f == 0){echo '';} else{echo $r8_25f; }  ?></td>  <td style="text-align: center;"><?php if($r8_30m == 0){echo '';}else {echo $r8_30m; }  ?></td> <td style="text-align: center;"><?php if($r8_30f == 0){echo '';} else{ echo $r8_30f;}  ?></td> <td style="text-align: center;"><?php if($r8_35m == 0){echo '';} else { echo $r8_35m;}  ?></td> <td style="text-align: center;"><?php if($r8_35f == 0){ echo '';} else{ echo $r8_35f;}  ?></td> <td style="text-align: center;"><?php if($r8_40m == 0){echo '';} else{echo $r8_40m; }  ?></td> <td style="text-align: center;"><?php if($r8_40f == 0){echo '';} else {echo $r8_40f; }  ?></td> <td style="text-align: center;"><?php if($r8_45m == 0){echo '';} else {echo $r8_45m; }  ?></td> <td style="text-align: center;"><?php if($r8_45f == 0){echo '';} else{ echo $r8_45f;}  ?></td> <td style="text-align: center;"><?php if($r8_50m == 0){echo '';} else {echo $r8_50m; }  ?></td> <td style="text-align: center;"><?php if($r8_50f == 0){echo '';} else{echo $r8_50f; }  ?></td> <td style="text-align: center;"><?php echo $r8_sum; ?></td>
                    </tr>
			
				</tbody>
			</table>
		</div>
	</div>
</div>
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

