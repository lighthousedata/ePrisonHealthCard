<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
			<div class="card-tools">
				<!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
			<!--	<colgroup>
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
							<th style="color: #CD853F; font-size: 12px;">SERVICE-DATE</th>
							
							<th style="color: #CD853F; font-size: 12px;">DIAGNOSED-OF</th>
                            <th style="color: #CD853F; font-size: 12px;">PRESCRIPTION</th>
                            <th style="color: #CD853F; font-size: 12px;">DURATION (Days)</th>
                           <th style="color: #CD853F; font-size: 12px;">QUANTITY</th>
                            
                            <th style="color: #CD853F; font-size: 12px;"></th>
							
						</thead>
						<tbody>
							<?php
					$i = 1;
					$stations_id = $_SESSION['login_stations_id'];
					$regions_id = $_SESSION['login_regions_id'];
					$user_id = $_SESSION['login_id']; 
					$qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, pr.*, pr.id AS pid, pr.medicine_name AS mid, drugs.name AS medicine_name FROM prisoners p INNER JOIN prescriptions pr ON pr.prisoners_no = p.prisoners_no INNER JOIN drugs ON pr.medicine_name = drugs.id  WHERE pr.stations_id = $stations_id AND pr.status = 1 ORDER BY pr.service_date DESC");

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
							<p><?php echo ucwords($row['diagnosed_of']) ?></p>
							
						</td>
						<td>
							<p><?php echo ucwords($row['medicine_name']) ?></p>
							
						</td>

						<td>
							<p><?php echo ucwords($row['duration']) ?></p>
							
						</td>
              
                       
                        <td>
							<p><?php echo ucwords($row['quantity']) ?></p>
							
						</td>
                        
            
                       <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=drug_dispensory&mid=<?php echo $row['mid'] ?>&qty=<?php echo $row['quantity']?>&pid=<?php echo $row['pid']?>" data-id="<?php echo $row['mid'] ?>"><button class="btn btn-warning btn-sm pull-right" >Dispense <i class="fa fa-share-square"></i></button></a>
                </div>
            </td>

					</tr>	
				<?php endwhile; ?>
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