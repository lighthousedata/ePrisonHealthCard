<script>
  $(document).ready(function(){
  setTimeout(function(){
        $.get("admin_class.php", function(data){
        if(data==0) window.location.href="ajax.php?action=logout";
        });
    },1*60*1000);
});
</script>
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
							<th style="color: #CD853F; font-size: 12px;">RECORDED-DATE</th>
							
							<th style="color: #CD853F; font-size: 12px;">ART NUMBER</th>
                          
                            
                            <th style="color: #CD853F; font-size: 12px;"></th>
							
						</thead>
						<tbody>
							<?php
					$i = 1;
					$stations_id = $_SESSION['login_stations_id'];
					$regions_id = $_SESSION['login_regions_id'];
					$user_id = $_SESSION['login_id']; 
					$qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, p.id AS pid, a.*, a.id AS ART_id FROM prisoners p INNER JOIN art_service a ON p.prisoners_no = a.prisoners_no WHERE p.stations_id = $stations_id ORDER BY a.service_date DESC");
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
							<p><?php echo ucwords($row['ART_Number']) ?></p>
							
						</td>
						
                       <td class="text-center">
                            <a class="dropdown-item drug_dispensory" href="./index.php?page=edit_ART_number&ART_id=<?php echo $row['ART_id'] ?>&pname=<?php echo $row['pname'] ?>"><button class="btn btn-warning btn-sm pull-right" ><i class="fa fa-edit"></i></button></a>
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