<?php include'db_connect.php' ?>
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
 #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('img1/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
#loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('img1/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
  </style>
<div class="row">
      <div class="col-md-12">
      
            <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist" style="width:100%">
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link active" id="home-tab-md"  href="#characteristics-md" role="tab" aria-controls="home-md" aria-selected="true" data-toggle="tab" data-placement="top" title="PHYSICAL CHARACTERISTICS">P-C</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="profile-tab-md" data-toggle="tab" data-placement="top" title="MEDICAL SCREENING" href="#medicalscreening-md" role="tab" aria-controls="profile-md" aria-selected="false">M-S</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="profile-tab-md" data-toggle="tab" data-placement="top" title="COVID-19" href="#covid19-md" role="tab" aria-controls="profile-md" aria-selected="false">C-19</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="HIV AIDS" href="#hiv-md" role="tab" aria-controls="contact-md" aria-selected="false">H-A</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="ART" href="#art-md" role="tab" aria-controls="contact-md" aria-selected="false">A-T</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="TUBERCULOSIS (TB)" href="#tb-md" role="tab" aria-controls="contact-md" aria-selected="false">T-B</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="SEXUALLY TRANSMITTED INFECTIONS" href="#stis-md" role="tab" aria-controls="contact-md" aria-selected="false">S-T</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="WEIGHT" href="#weight-md" role="tab" aria-controls="contact-md" aria-selected="false">W-G</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="BLOOD PRESSURE (BP)" href="#bp-md" role="tab" aria-controls="contact-md" aria-selected="false">B-P</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="TREATMENT" href="#treatment-md" role="tab" aria-controls="contact-md" aria-selected="false">T-M</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:9.090%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="HOSPITALIZATION AND WARD TRANSFER" href="#ward-md" role="tab" aria-controls="contact-md" aria-selected="false">W-T</a>
                </li>

              </ul>

              <div class="tab-content card pt-5" id="myTabContentMD">
                <div class="tab-pane fade show active" id="characteristics-md" role="tabpanel" aria-labelledby="characteristics-tab-md">
                

               <!--TABLE FOR characteristics-->
  <?php
$Glid = $_GET['id'];
$qry = $conn->query("SELECT c.*, c.id AS cid, concat(p.fname, ' ', p.lname) AS pname, p.gender, p.dob, p.home_location, p.chief, p.village, p.nationality, p.profession FROM characteristics c INNER JOIN prisoners p ON p.prisoners_no = c.prisoners_no WHERE p.id = $Glid ")->fetch_array();
foreach($qry as $k => $v){
  $$k = $v;
}

$userDob = $dob;
                //Create a DateTime object using the user's Age.
                $dob1 = new DateTime($userDob);
                //We need to compare the user's Age with today's date.
                $now = new DateTime();
                //Calculate the time difference between the two dates.
                $difference = $now->diff($dob1);
                //Get the difference in years, as we are looking for the user's age.
                $age = $difference->y;
?>
  <h6 style="text-align: center;">Physical Characteristics For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>

  
  <div class="card card-outline card-secondary">
    <div class="card-body">
    
<?php if($_SESSION['login_type'] == 4): ?>
<div class="card-header">
      <div class="card-tools">
        <a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=edit_characteristics&cid=<?php echo $cid ?>"><i class="fa fa-edit"></i>Edit</a>
      </div>
    </div>
<?php endif; ?>
      <table class="table tabe-hover table-condensed" id="characteristics">
      <colgroup>
                  <col width="50%">
                  <col width="50%">
                  
                </colgroup>
                <thead>
                  <th style="color: #CD853F; font-size: 12px;">VARIABLE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">VALUE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                </thead>
                
               <tbody>

      <tr><td>Gender</td> <td style="color: #CD853F;"><?php echo ucwords($gender) ?></td> </tr>
      <tr><td>Age</td> <td style="color: #CD853F;"><?php echo ($age) ?></td>  </tr>
      <tr><td>Home Location</td> <td style="color: #CD853F;"><?php echo ucwords($home_location) ?></td> </tr>
      <tr><td>Skin Color</td> <td style="color: #CD853F;"><?php echo ucwords($skin_color) ?></td>  </tr>
      <tr><td>Eye Color</td> <td style="color: #CD853F;"><?php echo ucwords($eye_color) ?></td>  </tr>
      <tr><td>Height (CM)</td> <td style="color: #CD853F;"><?php echo ucwords($height) ?> CM</td> </tr>
      <tr><td>Weight</td> <td style="color: #CD853F;"><?php echo ucwords($weight) ?> Kgs</td>  </tr>
      <tr><td>Perforation</td> <td style="color: #CD853F;"><?php echo ucwords($perforation) ?></td> </tr>
    <tr> <td>Ear Perforation</td> <td style="color: #CD853F;"><?php echo ucwords($ear_perforation) ?></td></tr>
    <tr><td>Ear Defects</td> <td style="color: #CD853F;"><?php echo ucwords($ear_defect) ?></td> </tr>
    <tr><td>Hernia</td> <td style="color: #CD853F;"><?php echo ucwords($hernia) ?></td> </tr>
    <tr><td>Tatoos</td> <td style="color: #CD853F;"><?php echo ucwords($tatoo) ?></td> </tr>
    <tr><td>Marks/Scars</td> <td style="color: #CD853F;"><?php echo ucwords($marks_scars) ?></td> </tr>
    <tr><td>Tooth Disorder</td> <td style="color: #CD853F;"><?php echo ucwords($tooth_disorder) ?></td> </tr>
    <tr><td>Circumcision</td> <td style="color: #CD853F;"><?php echo ucwords($circumcision) ?></td> </tr>
    <tr><td>Head Abnormality(Size/Shape)</td> <td style="color: #CD853F;"><?php echo ucwords($head_abnormality_in_size_or_shape) ?></td> </tr>
    <tr> <td>Others</td> <td style="color: #CD853F;"> <?php echo ucwords($others) ?></td> </tr>
                </tbody> 
              </table>
            </div>
          </div>
       

        <script>
  $(document).ready(function(){
    $('#characteristics').dataTable({
        dom: 'lBfrtip',
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
                </div>




                <div class="tab-pane fade" id="medicalscreening-md" role="tabpanel" aria-labelledby="medicalscreening-tab-md">
               <!--TABLE FOR medicalscreening-->
  <?php

$qry = $conn->query("SELECT m.*, m.id AS mid, concat(p.fname, ' ', p.lname) AS pname, p.gender, p.dob, p.home_location, p.chief, p.village, p.nationality, p.profession FROM medical_screenings m INNER JOIN prisoners p ON p.prisoners_no = m.prisoners_no WHERE p.id = $Glid ")->fetch_array();
foreach($qry as $k => $v){
  $$k = $v;
}

$userDob = $dob;
                //Create a DateTime object using the user's Age.
                $dob1 = new DateTime($userDob);
                //We need to compare the user's Age with today's date.
                $now = new DateTime();
                //Calculate the time difference between the two dates.
                $difference = $now->diff($dob1);
                //Get the difference in years, as we are looking for the user's age.
                $age = $difference->y;
?>

<h6 style="text-align: center;">Medical Screening For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
     <?php if($_SESSION['login_type'] == 4): ?>
    <div class="card-header">
      <div class="card-tools">
        <a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=edit_medical_screening&mid=<?php echo $mid ?>"><i class="fa fa-edit"></i>Edit</a>
      </div>
    </div>
<?php endif; ?>
      <table class="table tabe-hover table-condensed" id="medicalscreening">
      <colgroup>
                  <col width="50%">
                  <col width="50%">
                 
                </colgroup>
                <thead>
                <th style="color: #CD853F; font-size: 12px;">VARIABLE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">VALUE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                
                </thead>
                <tbody>
    <tr><td>Age</td> <td style="color: #CD853F;"><?php echo ucwords($age) ?> </tr>
    <tr><td>Gender</td> <td style="color: #CD853F;"><?php echo ucwords($gender) ?></td> </tr>
    <tr><td>Vaccination</td> <td style="color: #CD853F;"><?php echo ucwords($Vaccination) ?></td>  </tr>
  <tr><td>General Physique</td> <td style="color: #CD853F;"><?php echo ucwords($general_physique) ?></td> </tr>
<tr><td>Prior Ill Treatment</td><td style="color: #CD853F;"><?php echo ucwords($prior_ill_treatment) ?></td></tr>
<tr><td>Mental Condition</td> <td style="color: #CD853F;"><?php echo ucwords($mental_condition) ?></td> </tr>
<tr> <td>Visible Injuries</td> <td style="color: #CD853F;"><?php echo ucwords($visible_injuries) ?></td></tr>
<tr><td>Brief Description Of Treatment/Intervention To Injuries</td> <td style="color: #CD853F;"><?php echo ucwords($brief_desc) ?></td>  </tr>
<tr><td>Pregnancy Test</td> <td style="color: #CD853F;"><?php echo ucwords($pregnancy_test) ?></td> </tr>
<tr><td>Remarks</td> <td style="color: #CD853F;"><?php echo ucwords($remarks) ?></td></tr> </tr>
                </tbody>  
              </table>
            </div>
          </div>
      
        <script>
  $(document).ready(function(){
    $('#medicalscreening').dataTable({
        dom: 'lBfrtip',
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
                </div>

<div class="tab-pane fade" id="covid19-md" role="tabpanel" aria-labelledby="covid19-tab-md">
                 <!--TABLE FOR covid19-->
  <h6 style="text-align: center;">COVID-19 History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">

      <table class="table tabe-hover table-condensed" id="covid19">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SCREENING-RESULTS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TESTING-RESULTS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
               
                $qry = $conn->query("SELECT c.*, c.id AS coid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN covid19 c ON p.prisoners_no = c.prisoners_no  WHERE p.id = $Glid ORDER BY c.service_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                      
                       <td>
                          <a>
                           <?php echo ucwords($row['screening']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['testing']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['service_date'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                     <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_covid19&coid=<?php echo $row['coid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#covid19').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="hiv-md" role="tabpanel" aria-labelledby="hiv-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">HIV AIDS History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="hiv">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                  <th style="color: #CD853F; font-size: 12px;">TEST-ELIGIBILITY <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TESTING-RESULTS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
               
                $qry = $conn->query("SELECT h.*, h.id AS hid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN hiv_test h ON p.prisoners_no = h.prisoners_no  WHERE p.id = $Glid ORDER BY h.service_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                       <td>
                          <a>
                           <?php echo ucwords($row['test_eligible']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['testing']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['service_date'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                    <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_HIV_and_AIDS&hid=<?php echo $row['hid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>  
                     
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#hiv').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="art-md" role="tabpanel" aria-labelledby="art-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">ART History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="art">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                  <th style="color: #CD853F; font-size: 12px;">ART-ID <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REGIMEN <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">HIV-STATUS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">DM <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">Hx-OF-TB <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">Hx-OF-STI <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">INITIATION-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                </thead>
                <tbody>
                <?php
                $i = 1;
               
                $qry = $conn->query("SELECT a.*, a.id AS aid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN art_service a ON p.prisoners_no = a.prisoners_no  WHERE p.id = $Glid ORDER BY a.Initiation_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                       <td>
                          <a>
                           <?php echo ucwords($row['ART_ID']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['Regimen']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['HIV_status']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['DM']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo ucwords($row['Hx_of_TB']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo ucwords($row['Hx_of_STI']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                          
                            <?php echo date("M d, Y",strtotime($row['Initiation_date'])) ?>
                          </a>
                          
                      </td>
                     <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_ART_service&aid=<?php echo $row['aid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>  
                     
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#art').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="tb-md" role="tabpanel" aria-labelledby="tb-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Tuberculosis (TB) History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="tb">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                  <th style="color: #CD853F; font-size: 12px;">SCREENING <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TESTING-RESULTS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SERVICE-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
               
                $qry = $conn->query("SELECT t.*, t.id AS tbid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN tb t ON p.prisoners_no = t.prisoners_no  WHERE p.id = $Glid ORDER BY t.service_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                       <td>
                          <a>
                           <?php echo ucwords($row['screening']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['testing']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                            <?php echo date("M d, Y",strtotime($row['service_date'])) ?>
                          
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                     <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_tuberculosis&tbid=<?php echo $row['tbid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>   
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#tb').dataTable({
        dom: 'lBfrtip',
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
                </div>

<div class="tab-pane fade" id="stis-md" role="tabpanel" aria-labelledby="stis-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">STIs History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="stis">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                 
                  <th style="color: #CD853F; font-size: 12px;">TESTING-RESULTS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SERVICE-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                   <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
              
                $qry = $conn->query("SELECT s.*, s.id AS stid,  concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN stis_service s ON p.prisoners_no = s.prisoners_no  WHERE p.id = $Glid ORDER BY s.service_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                      
                      <td>
                          <a>
                           <?php echo ucwords($row['testing']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['service_date'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                      <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_sexually_transmitted_infections&stid=<?php echo $row['stid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>   
                     
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#stis').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="weight-md" role="tabpanel" aria-labelledby="weight-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Weight History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="weight">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                 
                  <th style="color: #CD853F; font-size: 12px;">WEIGHT (KGs) <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">BMI-MUAC <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SERVICE-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
              
                $qry = $conn->query("SELECT wt.*, wt.id AS wid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN weight_registers wt ON p.prisoners_no = wt.prisoners_no  WHERE p.id = $Glid ORDER BY wt.wdate DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                      
                      <td>
                          <a>
                           <?php echo ucwords($row['kg']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['bmi_muac']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo date("M d, Y",strtotime($row['wdate'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                      <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_weight_registers&wid=<?php echo $row['wid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td> 
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#weight').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="bp-md" role="tabpanel" aria-labelledby="bp-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Blod Pressure History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="bp">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                 
                  <th style="color: #CD853F; font-size: 12px;">Systolic/Diastolic (S/D) <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  
                  <th style="color: #CD853F; font-size: 12px;">SERVICE-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
              
                $qry = $conn->query("SELECT bp.*, bp.id AS bpid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN blood_presure bp ON p.prisoners_no = bp.prisoners_no  WHERE p.id = $Glid ORDER BY bp.bdate DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                      
                      <td>
                          <a>
                           <?php echo ucwords($row['blood_presure']) ?>
                          </a>
                          
                      </td>
                     
                     
                      <td>
                          <a>
                           <?php echo date("M d, Y",strtotime($row['bdate'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                      <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_blood_pressure&bpid=<?php echo $row['bpid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td> 
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#bp').dataTable({
        dom: 'lBfrtip',
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
                </div>


<div class="tab-pane fade" id="treatment-md" role="tabpanel" aria-labelledby="treatment-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Medical Treatment History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="treatment">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                 
                  <th style="color: #CD853F; font-size: 12px;">DIAGNOSIS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TREATMENT <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SERVICE-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
              
                $qry = $conn->query("SELECT tmt.*, tmt.id AS tmtid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN medical_treatments tmt ON p.prisoners_no = tmt.prisoners_no  WHERE p.id = $Glid ORDER BY tmt.tdate DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                      
                      <td>
                          <a>
                           <?php echo ucwords($row['diagnosis']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['treatment']) ?>
                          </a>
                          
                      </td>
                      <td>
                          <a>
                           <?php echo date("M d, Y",strtotime($row['tdate'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                    <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_medical_treatment&tmtid=<?php echo $row['tmtid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>  
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#treatment').dataTable({
        dom: 'lBfrtip',
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
                </div>



<div class="tab-pane fade" id="ward-md" role="tabpanel" aria-labelledby="ward-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Hospitalization And Ward Transfer History For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($pname) ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="ward" width="100%">
    <!-- <colgroup>
                  <col width="5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                  <col width="9.5%">
                 
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                 <th style="color: #CD853F; font-size: 12px;">CLINICAL-REFERRAL <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 <th style="color: #CD853F; font-size: 12px;">HOSPITAL <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">DIAGNOSIS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TREATMENT <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">WING <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">WARD <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">TRANSFER-DATE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">OUTCOME <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">REMARKS <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
              
                $qry = $conn->query("SELECT ward.*, ward.id AS waid, concat(p.fname, ' ', p.lname) AS pname FROM prisoners p INNER JOIN hospitalisation_and_transfers ward ON p.prisoners_no = ward.prisoners_no  WHERE p.id = $Glid ORDER BY ward.transfer_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     <td>
                          <a>
                           <?php echo ucwords($row['clinical_referral']) ?>
                          </a>
                          
                      </td>
                      
                      <td>
                          <a>
                           <?php echo ucwords($row['hospital']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo ucwords($row['diagnosis']) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['treatment']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo ucwords($row['wing']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo ucwords($row['ward']) ?>
                          </a>
                          
                      </td>
                      <td>
                          <a>
                           <?php echo date("M d, Y",strtotime($row['transfer_date'])) ?>
                          </a>
                          
                      </td>
                     <td>
                          <a>
                           <?php echo ucwords($row['outcome']) ?>
                          </a>
                          
                      </td>
                      <td>
                          <a>
                           <?php echo ucwords($row['remarks']) ?>
                          </a>
                          
                      </td>
                     
                     <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 4): ?>
                          <a class="dropdown-item" href="./index.php?page=edit_hospitalization_and_ward_transfer&waid=<?php echo $row['waid'] ?>">Edit</a>
                      <?php endif; ?>
                        </div>
            </td>  
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
      

        <script>
  $(document).ready(function(){
    $('#ward').dataTable({
        dom: 'lBfrtip',
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
                </div>



              </div>
      
           
            <!-- Section: Live preview -->
      
          </div>
          <!-- Grid column -->
      
        </div>


<script>
  $(function () {
  $('[data-toggle="tab"]').tooltip()
})
</script>

