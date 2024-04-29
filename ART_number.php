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
              <th style="color: #CD853F; font-size: 12px;">NEW-ART-#</th>
              <th style="color: #CD853F; font-size: 12px;">CURRENT-REGMEN</th>
              <th style="color: #CD853F; font-size: 12px;">NEW-REGMEN</th>
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
              <p><?php echo ucwords($row['new_ART_ID']) ?></p>
              
            </td>

            <td>
              <p><?php echo ucwords($row['current_Regimen']) ?></p>
              
            </td>

           

            <td>
              <p><?php echo ucwords($row['new_Regimen']) ?></p>
              
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
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_ART_number&artid=<?php echo $row['artid'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-pencil-alt"></i></button></a>
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

