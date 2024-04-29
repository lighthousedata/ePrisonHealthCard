<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d');
?>

<?php 
$notice="";
if (isset($_POST['save'])) {
if ($conn->query("INSERT INTO vaccination_list (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$_POST[name]')")) {
  $notice ="<div class='alert alert-success'>New Vaccination Added To The List Successfully</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error: Something Went Wrong!</div>";
}
}

 ?>

 <?php 

 if (isset($_POST['vaccination'])) {
	// code...
   	//$pid = $_POST[prisoners_no];
	if($conn->query("INSERT INTO vaccination (regions_id, stations_id, prisoners_no,  vaccination_name, adminstered_date, remarks) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$_POST[vaccination_name]','$_POST[adminstered_date]', '$_POST[remarks]')")){


  echo '<script type="text/javascript">
                alert("Data Saved Successfully!");
                window.location = "index.php?page=view_vaccination";
                </script>';
   }else{
   	     echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
 }
 ?>

 <?php echo $notice ?>

<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form method="POST">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

<div class="row">
 <div class="col-md-6">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		
		<label for="" class="control-label">Prisoner Name/Number</label>
		<div class="form-group">
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
  </div>
 </div>

 <div class="col-md-6">
  <div class="card card-outline card-secondary">
	<div class="card-body">
	
		<label for="" class="control-label">Service Date</label>
		<div class="form-group">
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="adminstered_date" value="<?php echo $my_date; ?>">
            </div>
	</div>
  </div>
 </div>
 </div>



<div class="row">
 <div class="col-md-12">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Vaccination Type &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px; font-size:8px;"><i class="fa fa-plus fa-fw"> </i></button></p><hr>
<select class="form-control form-control-sm select2" name="vaccination_name" required>
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT * FROM vaccination_list ORDER BY name ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['name'] ?>" <?php echo isset($vaccination_name) && $vaccination_name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
              </select>
	</div>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<div class="form-group">
					<p style="font-size:14px;color:#CD853F; font-weight: bold; text-align:center;" class="control-label">General Remarks</p>
					<textarea name="remarks" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;">
                    <?php echo isset($remarks) ? $remarks : '' ?>
                </textarea>
				</div>
	</div>
  </div>
 </div>
</div>

<div class="d-flex w-100 justify-content-center align-items-center">
    			
    			<button type="submit" name="vaccination" class="btn btn-flat  bg-gradient-primary mx-2"><b>Save</b></button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
    		</div>
        </form>
    	</div>
    	
	</div>
</div>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_vaccination',
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
						location.href = 'index.php?page=vaccination'
					},2000)
				}
			}
		})
	})


</script>

<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Vaccination</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Vaccination Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save Vaccination</button>
      </div>
    </form>
    </div>

  </div>
</div>