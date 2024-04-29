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
							<th style="color: #CD853F; font-size: 12px;">BOOKED DATE</th>
							<th style="color: #CD853F; font-size: 12px;">TEST TYPE</th>
							<th style="color: #CD853F; font-size: 12px;">REMARKS</th>
							<th style="color: #CD853F; font-size: 12px;">ACTION</th>
						</thead>
						<tbody>
							<?php
					$i = 1;
					$stations_id = $_SESSION['login_stations_id'];
					$qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, l.*, l.id AS bid FROM prisoners p INNER JOIN book_lab_test l ON l.prisoners_no = p.prisoners_no  WHERE l.stations_id = $stations_id AND l.status = 1 ORDER BY l.service_date DESC");

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
							<p><?php echo ucwords($row['service_date']) ?></p>
							
						</td>
						<td>
							<p><?php echo ucwords($row['test_type']) ?></p>
							
						</td>
						
						<td>
							<p><?php echo ucwords($row['remarks']) ?></p>
							
						</td>
						
                      
						<td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=pre_booked_test&bid=<?php echo $row['bid'] ?>"><button class="btn btn-primary btn-sm pull-right" >Test <i class="fa fa-vial"></i></button></a>
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
	$('.refer_to_other_departments').click(function(){
		uni_modal("<i class='fa fa-plus'></i> Results for: "+$(this).attr('data-prisoners_no'),"manage_referral.php?id="+$(this).attr('data-id')+"&id="+$(this).attr('data-id'),'large')
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