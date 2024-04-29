
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

            

          </tr> 
        <?php endwhile; ?>
      <?php } ?>
        </tbody>
      </table>
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
                