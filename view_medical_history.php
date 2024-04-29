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
                <li class="nav-item waves-effect waves-light" style="width:50%">
                  <a class="nav-link active" id="home-tab-md"  href="#characteristics-md" role="tab" aria-controls="home-md" aria-selected="true" data-toggle="tab" data-placement="top" title="PHYSICAL CHARACTERISTICS">PHYSICAL CHARACTERISTICS</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:50%">
                  <a class="nav-link" id="profile-tab-md" data-toggle="tab" data-placement="top" title="MEDICAL SCREENING" href="#medicalscreening-md" role="tab" aria-controls="profile-md" aria-selected="false">MEDICAL SCREENING</a>
                </li>
               
              </ul>

              <div class="tab-content card pt-5" id="myTabContentMD">
                <div class="tab-pane fade show active" id="characteristics-md" role="tabpanel" aria-labelledby="characteristics-tab-md">
                

<script>
  $(function () {
  $('[data-toggle="tab"]').tooltip()
})
</script>

               <!--TABLE FOR characteristics-->
  <?php
$Glid = $_GET['id'];
$qry1 = $conn->query("SELECT *, id AS cid FROM prisoners WHERE id = 1 ")->fetch_array();
foreach($qry1 as $k => $v){
  $$k = $v;
}

if($qry1->num_rows > 0){
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
  <h6 style="text-align: center;">Physical Characteristics For {<?php echo ucwords($prisoners_no) ?>}</h6>

  
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
       

      <?php } ?>
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

