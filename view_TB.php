<?php include'db_connect.php' ?>


<?php $stations_id = $_SESSION['login_stations_id']; ?>
  <div class="row">
        <div class="col-md-3">
        <div class="card card-outline card-secondary">
                 <h3 style="color:#CD853F; text-align: center;"><?php echo $conn->query("SELECT id from lab_tests WHERE stations_id = $stations_id AND test_type = 'TB' AND results = 'Positive'")->num_rows; ?></h3>
              <p style="color:grey; font-weight: bold; text-align: center;">Confirmed Cases</p>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card card-outline card-secondary">
                 <h3 style="color:#CD853F; text-align: center;"><?php echo $conn->query("SELECT id from lab_tests WHERE stations_id = $stations_id AND test_type = 'TB' AND results = 'Positive' AND treatment = 1")->num_rows; ?></h3>

                <p style="color:grey; font-weight: bold; text-align: center;">Those On Treatment</p>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card card-outline card-secondary">
                 <h3 style="color:#CD853F; text-align: center;"><?php echo $conn->query("SELECT id from lab_tests WHERE stations_id = $stations_id AND test_type = 'TB' AND results = 'Positive'")->num_rows; ?></h3>
                <p style="color:grey; font-weight: bold; text-align: center;">TB+ and HIV+</p>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card card-outline card-secondary">
                <h3 style="color:#CD853F; text-align: center;"><?php echo $conn->query("SELECT id from lab_tests WHERE stations_id = $stations_id AND test_type = 'TB' AND results = 'Negative' AND treatment = 2")->num_rows; ?></h3>
                <p style="color:grey; font-weight: bold; text-align: center;">Completed Treatment</p>
        </div>
        </div>
    </div>

<div class="col-lg-12">
  <div class="card card-outline card-secondary">
    <div class="card-header">
      <div class="card-tools">
        <!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
      </div>
    </div>
    <div class="card-body">
      <table class="table tabe-hover table-condensed" id="list">
      <!--  <colgroup>
          <col width="5%">
          <col width="15%">
          <col width="20%">
          <col width="15%">
          <col width="15%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
        </colgroup>-->
        <thead>
              <th style="color: #CD853F; font-size: 12px;">#</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NO.</th>
              <th style="color: #CD853F; font-size: 12px;">PR-NAME</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-DATE</th>
              
              <th style="color: #CD853F; font-size: 12px;">SCREENING</th>
              <th style="color: #CD853F; font-size: 12px;">TEST-TYPE</th>
              <th style="color: #CD853F; font-size: 12px;">RESULTS</th>
              <th style="color: #CD853F; font-size: 12px;">REMARKS</th>
              <th style="color: #CD853F; font-size: 12px;">RECOM</th>
              <th style="color: #CD853F; font-size: 12px;"></th>
                          
              
            </thead>
            <tbody>
              <?php
          $i = 1;
          $stations_id = $_SESSION['login_stations_id'];
          $regions_id = $_SESSION['login_regions_id'];
          $user_id = $_SESSION['login_id']; 
          $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, c.*, c.id AS coid FROM prisoners p INNER JOIN lab_tests c ON p.prisoners_no = c.prisoners_no WHERE p.stations_id = $stations_id AND test_type = 'TB' ORDER BY c.service_date DESC");
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
              <p><?php echo date('Y-m-d',strtotime($row['service_date'])) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['screening']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['test_type']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['results']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['remarks']) ?></p>
              
            </td>

            <td ><?php $stats=$row['treatment'];
                      if($stats==1){
                      ?>
                      <span style="color: yellow; font-weight:bold;">On Treatment</span>
                      <?php } if($stats==2)  { ?>
                      <span style="color: green;font-weight:bold;">Completed Treatment</span>
                    <?php } if($stats==0)  { ?>
                      <span style="color: blue;font-weight:bold;">N/A</span>
                      <?php } ?>
                      </td>

            <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=TB_review&coid=<?php echo $row['coid'] ?>"><button class="btn btn-primary btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
                </div>
            </td>
            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
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
        dom: 'Bfrtip',
         //dom: 'lQlBfrtip',
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
  $('.manage_dispense').click(function(){
    uni_modal("<i class='fa fa-plus'></i> Quantity for: "+$(this).attr('data-name'),"manage_dispense.php?id="+$(this).attr('data-id')+"&id="+$(this).attr('data-id'),'large')
  })
  })
  function delete_project($id){
    start_load()
    $.ajax({
      url:'ajax.php?action=delete_project',
      method:'POST',
      data:{id:$id},
      success:function(resp){
        if(resp==1){
          alert_toast("Data successfully deleted",'success')
          setTimeout(function(){
            location.reload()
          },1500)

        }
      }
    })
  }
</script>



<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
  <script type="text/javascript" src="data/moment.min.js"></script>
 <script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
 <script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
  <script type="text/javascript" src="data/datetime-moment.js"></script>