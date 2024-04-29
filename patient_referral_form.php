<?php include('db_connect.php') ?>

<!-- Info boxes -->
 <div class="col-12">
          <div class="card">
            <div class="card-body" id="welcome">
              <marquee>
             <dd style="color:#5a3a34; font-weight: bold; text-shadow: 4px 4px 7px #CD853F;"> Welcome <?php echo $_SESSION['login_user_name'] ?> to PRIMIS <?php echo $_SESSION['login_region_name'] ?> !</dd>
             </marquee>
            </div>
          
          </div>
  </div>
  <hr>

<?php $stations_id = $_SESSION['login_stations_id']; ?>
      <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-secondary">
          <div class="card-header">
            <p style="color:#CD853F; font-size: 20px; text-align: center; font-weight: bold;">Patient Referral Form</p>
          </div>
         
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0 table-hover" id="home_data">
               <!-- <colgroup>
                  <col width="5%">
                  <col width="30%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                </colgroup>-->
               
                <thead>
                  <th style="color:#CD853F; font-size: 20px;"></th>

                </thead>
                <tbody>
                <?php
                $i = 1;
                $stations_id = $_SESSION['login_stations_id'];
                $regions_id = $_SESSION['login_regions_id'];

              $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, r.name AS region_name, s.name AS station_name, referral.* FROM prisoners p INNER JOIN regions r ON r.id = p.regions_id INNER JOIN stations s ON s.id = p.stations_id INNER JOIN hospitalisation_and_transfers referral ON p.prisoners_no = referral.prisoners_no WHERE p.stations_id = $stations_id ORDER BY referral.id DESC LIMIT 1");

                  while($row= $qry->fetch_assoc()):
                 
              
                  ?>

                  <tr>
                      <td>
                        <form>
          <div class="row">
      <div class="col-md-12">
          <p style="text-align: center;" class="logo-border1">
           <img src="assets/uploads/logo.png" alt="Avatar" class="brand_logo1" style="border-radius: 50%;">
          </p>
          <p style="text-align: center; color:#CD853F; font-weight: bold;" class="logo-border1">
           MALAWI PRISON SERVICES
          </p>
        </div>
      </div>

      <div class="row">
      <div class="col-md-6">
        <a> Referral To: </a><hr>
        <a> Focal Point: </a><hr>
        <a> Location:   </a><hr>
        </div>

         <div class="col-md-6">
        <a> Date:<?php echo date("M d, Y",strtotime($row['referral_date'])) ?></a><hr>
       <a> Phone:</a><hr>
       <a> Email:  </a><hr><br>
        </div>
      </div>

      <hr>

      <div class="row">
      <div class="col-md-6">
        <a> Referring From: <?php echo $_SESSION['login_station_name'] ?></a><hr>
        <a> Focal Point: </a><hr>
        <a> Location:   </a><hr>
        </div>

         <div class="col-md-6">
        <a> Station Code:<?php echo $_SESSION['login_station_code'] ?></a><hr>
       <a> Phone:</a><hr>
       <a> Email:  </a><hr><br>
        </div>
      </div>
                      
                        </form>
                      </td>
                     
                  </tr>
                <?php endwhile; ?>
                </tbody>  
              </table>
            </div>
          </div>
        </div>
        </div>

<script>
  $(document).ready(function(){
    $('#home_data').dataTable({
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

<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>


      </div>
