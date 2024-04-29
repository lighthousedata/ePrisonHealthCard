
<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>

<?php 
$notice="";
if (isset($_POST['save'])) {
if ($conn->query("INSERT INTO clinical_services (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$_POST[name]')")) {
  $notice ="<div class='alert alert-success'>New Service Added Successfully</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$conn->error."</div>";
}
}

 ?>

 <?php echo $notice ?>

<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form action="" id="manage-project">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label">Prisoner Number</label>
					<select class="form-control form-control-sm select2" name="prisoners_no" required>
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['prisoners_no'] ?>" <?php echo isset($prisoners_no) && $prisoners_no == $row['prisoners_no'] ? "selected" : '' ?>><?php echo ucwords($row['pname']) ?></option>
              	<?php endwhile; ?>
              </select>
				</div>
			</div>
          
      <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Service Name</label>
    <select class="form-control form-control-sm select2" name="service_name" required>
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT * FROM clinical_services WHERE stations_id = $stations_id ORDER BY name ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['name'] ?>" <?php echo isset($service_name) && $service_name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
              </select>
        </div>
      </div>

             <div class="col-md-3">
                <div class="form-group">
                    <label for="" class="control-label">Test Results</label>
                   <select class="form-control form-control-sm select2" name="testing" value="<?php echo isset($testing) ? $testing : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($testing) && $testing == 'Negative' ? 'selected' : '' ?>>Negative</option>
    <option <?php echo isset($testing) && $testing == 'Positive' ? 'selected' : '' ?>>Positive</option>
   <option <?php echo isset($testing) && $testing == 'Not Done' ? 'selected' : '' ?>>Not Done</option>
    
              </select>
                </div>
            </div>

     <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Service Date</label>
              <input type="text" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>" readonly>
            </div>
          </div>
		</div>


		<div class="row">
			

             <div class="col-md-12">
              

              <div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			
    			<button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i>If Service Name Is Not Available, Please Click Here To Add</button> 
    		</div>
    	</div> 
            </div>

     

		</div>
		<hr>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Remarks</label>
					<textarea name="remarks" id="" cols="36" rows="10" class="summernote form-control" required>
						<?php echo isset($remarks) ? $remarks : '' ?>
					</textarea>
				</div>
			
			</div>
		</div>
        </form>
    	</div>
    	<div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			
    			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project" onclick="foo()">Save </button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=lead_list'">Cancel</button>
    		</div>
    	</div>
	</div>
</div>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_added_services',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.href = 'index.php?page=added_services'
					},2000)
				}
			}
		})
	})


</script>

<script>
	function foo1 () {
		var regions_id = $("#regions_id").val();
		var lead_name_id = $("#lead_name_id").val();
		
      $.ajax({
        url:"email.php", //the page containing php script
        type: "POST", //request type
        data: { regions_id: regions_id, lead_name_id: lead_name_id},
           success:function(result){
         if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.href = 'index.php?page=lead_list'
					},2000)
				}
       }
     });
 }
</script>

<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add New Service</h4>
      </div>
      <div class="modal-body"> <form method="POST" enctype="multipart/form-data">
        <div style="width: 77%;margin: auto;">


<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
           <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Service Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save Service</button>
      </div>
    </form>
    </div>

  </div>
</div>