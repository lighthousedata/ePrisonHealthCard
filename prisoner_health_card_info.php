<?php include'db_connect.php';

 ?>
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
               
                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link active" id="profile-tab-md" data-toggle="tab" data-placement="top" title="ART HISTORY AT ENTRY" href="#art-md" role="tab" aria-controls="profile-md" aria-selected="false">ART</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="VITALS" href="#vitals-md" role="tab" aria-controls="contact-md" aria-selected="false">VITALS</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="HTS" href="#hts-md" role="tab" aria-controls="contact-md" aria-selected="false">HTS</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="TUBERCULOSIS" href="#tb-md" role="tab" aria-controls="contact-md" aria-selected="false">TB</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="SEXUALLY TRANSMITTED INFECTIONS" href="#sti-md" role="tab" aria-controls="contact-md" aria-selected="false">STI</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="COVID-19" href="#covid19-md" role="tab" aria-controls="contact-md" aria-selected="false">COVID-19</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="CLINICAL REFERRAL" href="#clinical-md" role="tab" aria-controls="contact-md" aria-selected="false">CLINICAL REF:</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:12.5%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="DEATH AND CAUSES" href="#death-md" role="tab" aria-controls="contact-md" aria-selected="false">DEATH & CAUSE</a>
                </li>
                

              </ul>
<div class="tab-content card pt-5" id="myTabContentMD">
                <div class="tab-pane fade show active" id="art-md" role="tabpanel" aria-labelledby="art-tab-md">
<div class="card card-outline card-secondary">
    <div class="card-body">
    <table class="table tabe-hover table-condensed" id="art">
     <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESID-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">HIV-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">ON-ART</th>
              <th style="color: #CD853F; font-size: 12px;">CURRENT-ART-#</th>
              
              <th style="color: #CD853F; font-size: 12px;">CURRENT-REGMEN</th>
              
              <th style="color: #CD853F; font-size: 12px;">DM</th>
              <th style="color: #CD853F; font-size: 12px;">HX-OF-TB</th>
              <th style="color: #CD853F; font-size: 12px;">HX-OF-STI</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, a.*, a.id AS artid FROM prisoners p INNER JOIN art_history_at_entry a ON p.prisoners_no = a.prisoners_no WHERE p.stations_id = $stations_id ORDER BY a.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['HIV_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['on_ART']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['current_ART_ID']) ?></p>
              
            </td>

            

            <td>
              <p><?php echo ucwords($row['current_Regimen']) ?></p>
              
            </td>

           

            <td>
              <p><?php echo ucwords($row['DM']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['Hx_of_TB']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['Hx_of_STI']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_ART_history_at_entry&artid=<?php echo $row['artid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
              </div>
            </div>


<div class="tab-pane fade" id="vitals-md" role="tabpanel" aria-labelledby="vitals-tab-md">
                
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="vitals">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESD-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">WEIGHT</th>
              <th style="color: #CD853F; font-size: 12px;">HEIGHT</th>
              <th style="color: #CD853F; font-size: 12px;">BMI/MUAC</th>
              <th style="color: #CD853F; font-size: 12px;">TEMPERATURE</th>
              <th style="color: #CD853F; font-size: 12px;">BLOOD-PRESSURE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, v.*, v.id AS vid FROM prisoners p INNER JOIN vitals v ON p.prisoners_no = v.prisoners_no WHERE p.stations_id = $stations_id ORDER BY v.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['weight']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['height']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['bmi_muac']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['temperature']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['systolic']) ?>/<?php echo ucwords($row['diastolic']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_vitals&vid=<?php echo $row['vid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
    $('#vitals').dataTable({
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
            </div>



<div class="tab-pane fade" id="hts-md" role="tabpanel" aria-labelledby="hts-tab-md">
                
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="hts">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESD-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">ELIGIBLE-FOR-TEST</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-TYPE</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-RESULTS</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, h.*, h.id AS hid FROM prisoners p INNER JOIN hiv_test h ON p.prisoners_no = h.prisoners_no WHERE p.stations_id = $stations_id ORDER BY h.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['eligible_for_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['type_of_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['HIV_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_HIV_testing_service&hid=<?php echo $row['hid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
    $('#hts').dataTable({
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
            </div>



<div class="tab-pane fade" id="tb-md" role="tabpanel" aria-labelledby="tb-tab-md">
              
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="tb">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESID-STATUS</th>
              
              <th style="color: #CD853F; font-size: 12px;">SCREENING</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-CRITERIA</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-RESULTS</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-TYPE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, tb.*, tb.id AS tbid FROM prisoners p INNER JOIN tb_test tb ON p.prisoners_no = tb.prisoners_no WHERE p.stations_id = $stations_id ORDER BY tb.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['tb_screening']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['test_criteria']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['tb_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['type_of_test']) ?></p>
              
            </td>

             <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>

            


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_TB&tbid=<?php echo $row['tbid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
   
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
              </div>
            </div>

<div class="tab-pane fade" id="sti-md" role="tabpanel" aria-labelledby="sti-tab-md">
              
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="sti">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESID-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">SCREENING</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-RESULTS</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-TYPE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, stis.*, stis.id AS stisid FROM prisoners p INNER JOIN stis_service stis ON p.prisoners_no = stis.prisoners_no WHERE p.stations_id = $stations_id ORDER BY stis.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['sti_screening']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['sti_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['type_of_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_STI&stisid=<?php echo $row['stisid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
    $('#sti').dataTable({
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
            </div>


<div class="tab-pane fade" id="covid19-md" role="tabpanel" aria-labelledby="covid19-tab-md">
              
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="covid19">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESID-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">SCREENING</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-RESULTS</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-TYPE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, c.*, c.id AS coid FROM prisoners p INNER JOIN covid19 c ON p.prisoners_no = c.prisoners_no WHERE p.stations_id = $stations_id ORDER BY c.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['covid19_screening']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['covid19_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['type_of_test']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_COVID19&coid=<?php echo $row['coid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
   
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
              </div>
            </div>      


<div class="tab-pane fade" id="clinical-md" role="tabpanel" aria-labelledby="clinical-tab-md">
              
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="clinical">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">VISIT-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">RESID-STATUS</th>
              <th style="color: #CD853F; font-size: 12px;">CLINICAL-REFERRAL</th>
              <th style="color: #CD853F; font-size: 12px;">CLINIC-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">OUTCOME</th>
              <th style="color: #CD853F; font-size: 12px;">NEXT-APP-DATE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, cl.*, cl.id AS clid FROM prisoners p INNER JOIN clinical_referral cl ON p.prisoners_no = cl.prisoners_no WHERE p.stations_id = $stations_id ORDER BY cl.visit_date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['visit_date'])) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['resident_status']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['clinical_referral']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['hospital_name']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['outcome']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['app_date']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_clinical_referral&clid=<?php echo $row['clid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
    $('#clinical').dataTable({
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
            </div>




<div class="tab-pane fade" id="death-md" role="tabpanel" aria-labelledby="death-tab-md">
              
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="death">
      <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">DATE</th>
              
              <th style="color: #CD853F; font-size: 12px;">CAUSE</th>
              <th style="color: #CD853F; font-size: 12px;">COMMENT</th>
             
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, d.*, d.id AS did FROM prisoners p INNER JOIN death_and_causes d ON p.prisoners_no = d.prisoners_no WHERE p.stations_id = $stations_id ORDER BY d.date DESC");
         if($qry->num_rows > 0){
          while($row= $qry->fetch_assoc()):
          
          ?>
          <tr>
            <td class="text-center"><?php echo $i++ ?></td>
            <td>
              <p><?php echo ucwords($row['prisoners_no']) ?></p>
              
            </td>
            <td>
              <p><?php echo ucwords($row['pname']) ?></p>
              
            </td>
            <td>
              <p><?php echo date('Y-m-d',strtotime($row['date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['causes']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['comment']) ?></p>
              
            </td>

            


            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_death_cause&did=<?php echo $row['did'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
    
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
    $('#death').dataTable({
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

