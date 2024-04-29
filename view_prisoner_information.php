<?php include'db_connect.php';
$prisoners_no = $_GET['id'];
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
               
                <li class="nav-item waves-effect waves-light" style="width:33.33%">
                  <a class="nav-link active" id="profile-tab-md" data-toggle="tab" data-placement="top" title="BASIC PARTICULARS" href="#basic-md" role="tab" aria-controls="profile-md" aria-selected="false">BASIC PARTICULARS</a>
                </li>
                <li class="nav-item waves-effect waves-light" style="width:33.33%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="CASE" href="#case-md" role="tab" aria-controls="contact-md" aria-selected="false">CASE</a>
                </li>

                <li class="nav-item waves-effect waves-light" style="width:33.33%">
                  <a class="nav-link" id="contact-tab-md" data-toggle="tab" data-placement="top" title="SENTENCE" href="#sentence-md" role="tab" aria-controls="contact-md" aria-selected="false">SENTENCE</a>
                </li>
                

              </ul>
<div class="tab-content card pt-5" id="myTabContentMD">
                <div class="tab-pane fade show active" id="basic-md" role="tabpanel" aria-labelledby="basic-tab-md">
    <?php
$qry = $conn->query("SELECT * FROM prisoners WHERE prisoners_no = '$prisoners_no' ")->fetch_array();
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
  <h6 style="text-align: center;">Basic Particulars For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($fname); echo " "; echo ucwords($lname); echo "::";  echo ucwords($alias); ?>}</h6>

  <div class="card card-outline card-secondary">
    <div class="card-body">
    
<?php if($_SESSION['login_type'] == 3): ?>
<div class="card-header">
      <div class="card-tools">
        <a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=edit_basic_particulars&id=<?php echo $id ?>"><i class="fa fa-edit"></i>Edit</a>
      </div>
    </div>
<?php endif; ?>
      <table class="table tabe-hover table-condensed" id="basic">
      <colgroup>
                  <col width="50%">
                  <col width="50%">
                  
                </colgroup>
                <thead>
                  <th style="color: #CD853F; font-size: 12px;">VARIABLE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">VALUE <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                </thead>
                
               <tbody>

      <tr><td style="font-weight: bold;">Gender</td> <td style="color: black;"><?php echo ucwords($gender) ?></td> </tr>
      <tr><td style="font-weight: bold;">Age</td> <td style="color: black;"><?php echo ($age) ?></td>  </tr>
      <tr><td style="font-weight: bold;">Mother's Name</td> <td style="color: black;"><?php echo ($mother_name) ?></td>  </tr>
      <tr><td style="font-weight: bold;">Father's Name</td> <td style="color: black;"><?php echo ($father_name) ?></td>  </tr>
      <tr><td style="font-weight: bold;">Home Location</td> <td style="color: black;"><?php echo ucwords($home_location) ?></td> </tr>
      <tr><td style="font-weight: bold;">Village</td> <td style="color: black;"><?php echo ucwords($village) ?></td>  </tr>
      <tr><td style="font-weight: bold;">Chief</td> <td style="color: black;"><?php echo ucwords($chief) ?></td>  </tr>
      <tr><td style="font-weight: bold;">District</td> <td style="color: black;"><?php echo ucwords($district) ?></td> </tr>
      <tr><td style="font-weight: bold;">National ID</td> <td style="color: black;"><?php echo ucwords($national_id) ?></td>  </tr>
      <tr><td style="font-weight: bold;">Passport ID</td> <td style="color: black;"><?php echo ucwords($passport_no) ?></td> </tr>
    <tr> <td style="font-weight: bold;">Driving Licence ID</td> <td style="color: black;"><?php echo ucwords($driving_license_id) ?></td></tr>
    <tr><td style="font-weight: bold;">Educational Level</td> <td style="color: black;"><?php echo ucwords($education_level) ?></td> </tr>
    <tr><td style="font-weight: bold;">Profession</td> <td style="color: black;"><?php echo ucwords($profession) ?></td> </tr>
    <tr><td style="font-weight: bold;">Past Occupation</td> <td style="color: black;"><?php echo ucwords($past_occupation) ?></td> </tr>
    <tr><td style="font-weight: bold;">Religion</td> <td style="color: black;"><?php echo ucwords($religion) ?></td> </tr>
    <tr><td style="font-weight: bold;">Denoination</td> <td style="color: black;"><?php echo ucwords($denomination) ?></td> </tr>
    <tr><td style="font-weight: bold;">Cell</td> <td style="color: black;"><?php echo ucwords($cell) ?></td> </tr>
    <tr><td style="font-weight: bold;">Block</td> <td style="color: black;"><?php echo ucwords($block) ?></td> </tr>
    <tr> <td style="font-weight: bold;">Status</td> <td style="color: black;"><?php $stats=$status;
                      if($stats==1){
                      ?>
                      <span style="color: black;">CONVICT</span>
                      <?php } if($stats==2)  { ?>
                      <span style="color: black;">REMANDEE</span>
                      <?php } ?>
                      </td> </tr>
                </tbody> 
              </table>
            </div>
          </div>
       

        <script>
  $(document).ready(function(){
    $('#basic').dataTable({
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


<div class="tab-pane fade" id="case-md" role="tabpanel" aria-labelledby="case-tab-md">
                 <!--TABLE FOR HIV AIDS-->
  <h6 style="text-align: center;">Case(s) For {<?php echo ucwords($prisoners_no) ?> - <?php echo ucwords($fname); echo " "; echo ucwords($lname); echo "::";  echo ucwords($alias); ?>}</h6>
  <div class="card card-outline card-secondary">
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="case">
      <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
                <thead>
                  <th style="color: #CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                 
                  <th style="color: #CD853F; font-size: 12px;" data-toggle="tab" data-placement="top" title="CASE">CASE-NO<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">COURT-NAME<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">COMMITAL-DATE<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ADMISSION-DATE<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">CONVICTION<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">COFIRMATION<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">SCDATE<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACNDATE<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                  <th style="color: #CD853F; font-size: 12px;">ACTION<i class="fas fa-sort nav-icon" style="color:#CD853F; font-size:12px;"></i></th>
                </thead>
                <tbody>
                <?php
                $i = 1;
               
                $qry = $conn->query("SELECT *, id AS case_id FROM prisoner_cases WHERE prisoners_no = '$prisoners_no' ORDER BY admission_date DESC");
                while($row= $qry->fetch_assoc()):
                 
                  ?>
                  <tr>
                      <td>
                         <?php echo $i++ ?>
                      </td>
                     
                       <td>
                          <a>
                           <?php echo ucwords($row['case_no']) ?>
                          </a>
                          
                      </td>
                     
                     <td>
                          <a>
                           <?php echo ucwords($row['court']) ?>
                          </a>
                          
                      </td>

                      <td>
                          <a>
                           <?php echo date("M d, Y",strtotime($row['commital_date'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['admission_date'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                           <?php echo ucwords($row['conviction']) ?>
                          </a>
                          
                      </td>

                       <td>
                          <a>
                           <?php echo ucwords($row['sentence_confirmation']) ?>
                          </a>
                          
                      </td>

                       <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['scdate'])) ?>
                          </a>
                          
                      </td>
                     
                      <td>
                          <a>
                          
                           <?php echo date("M d, Y",strtotime($row['scndate'])) ?>
                          </a>
                          
                      </td>
                     
                    <td class="text-center">
              <button type="button" class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <b>Action</b>
                        </button>
                        <div class="dropdown-menu" style="">
                          <?php if($_SESSION['login_type'] == 3): ?>
                          <a class="dropdown-item" href="./index.php?page=view_offence&case_id=<?php echo $row['case_id'] ?>">View Offence(s)</a>
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
    $('#case').dataTable({
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

