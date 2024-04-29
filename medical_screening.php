<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());

?>

<?php 
$notice="";
if (isset($_POST['saveProduct'])) {
if ($conn->query("INSERT INTO medical_screenings (prisoners_no, stations_id, regions_id, visible_injuries, prior_ill_treatment, mental_condition, general_physique, brief_desc, remarks, service_date) values ('$_POST[prisoners_no]','$_POST[stations_id]','$_POST[regions_id]','$_POST[visible_injuries]','$_POST[prior_ill_treatment]','$_POST[mental_condition]','$_POST[general_physique]','$_POST[brief_desc]','$_POST[remarks]','$_POST[service_date]')")) {
  //$notice ="<div class='alert alert-success'>Successfully Saved</div>";
  //header("location:./index.php?page=home");
  //alert_toast('<div class="alert alert-danger">Successfully Saved</div>',"success");
   echo '
                <script type = "text/javascript">
                    alert("Successfully Saved!");
                    window.location = "index.php?page=medical_screening";
                </script>


               ';
}
else{
 // $notice ="<div class='alert alert-danger'>Error is:".$conn->error."</div>";
	echo '
                <script type = "text/javascript">
                    alert("Sorry! Something Went Wrong!");
                    window.location = "index.php?page=medical_screening";
                </script>


               ';
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
			<div class="col-md-4">
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

			<div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label">Service Date</label>
              <input type="date" class="form-control form-control-sm" name="service_date">
            </div>
          </div>
          	

<div class="col-md-4">
                <div class="form-group">
                    <label for="" class="control-label">Visible Injuries</label>
                   <select class="form-control form-control-sm select2" name="visible_injuries" value="<?php echo isset($visible_injuries) ? $visible_injuries : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($visible_injuries) && $visible_injuries == 'Yes' ? 'selected' : '' ?>>Yes</option>
    <option <?php echo isset($visible_injuries) && $visible_injuries == 'No' ? 'selected' : '' ?>>No</option>
              </select>
                </div>
            </div>

		</div>
		<hr>

<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="seeAnotherField" class="control-label">Complaining About Prior ill Treatment</label>
					<br>
     <select class="form-control form-control-sm select2" name="prior_ill_treatment" value="<?php echo isset($prior_ill_treatment) ? $prior_ill_treatment : '' ?>" id="seeAnotherField">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option value="Yes" <?php echo isset($prior_ill_treatment) && $prior_ill_treatment == 'Yes' ? 'selected' : '' ?>>Yes</option>
    <option value="No" <?php echo isset($prior_ill_treatment) && $prior_ill_treatment == 'No' ? 'selected' : '' ?>>No</option>
              </select>
				</div>
			</div>

          	<div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label">Mental Condition/Physical Disorder</label><br>
   <select class="form-control form-control-sm select2" name="mental_condition" value="<?php echo isset($mental_condition) ? $mental_condition : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($mental_condition) && $mental_condition == 'Yes' ? 'selected' : '' ?>>Yes</option>
    <option <?php echo isset($mental_condition) && $mental_condition == 'No' ? 'selected' : '' ?>>No</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label">General Physique</label>
              <input type="text" class="form-control form-control-sm" name="general_physique" value="<?php echo isset($general_physique) ? $general_physique : '' ?>">
            </div>
          </div>

		</div>
		<hr>

<hr>


		<div class="row">
			
<div class="col-md-12">
	<div class="form-group" id="otherFieldDiv">
				<div class="form-group">
					<label for="" class="control-label">Brief Description Bordering Prior ill treatment Stated on Admission</label>
					<textarea name="brief_desc" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;" ></textarea>
				</div>
			</div>
			</div>
		</div>

   <div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Remarks</label>
					
					<textarea name="remarks" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;" required></textarea>
				</div>
			
			</div>
		</div>
		</div>

		<div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
          </div>
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
			url:'ajax.php?action=save_medical_screening',
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
						location.href = 'index.php?page=home'
					},2000)
				}
			}
		})
	})


</script>


<script src="data/jquery-3.2.1.slim.min.js"></script>
<script src="data/bootstrap.min.js"></script>

<script type="text/javascript">
 $("#seeAnotherField").change(function() {
      if ($(this).val() == "Yes") {
        $('#otherFieldDiv').show();  
      }
      else {
        $('#otherFieldDiv').hide();        
      }
    });
    $("#seeAnotherField").trigger("change");
</script>

<script type='text/javascript' src='data11111/bootstrap.bundle.min.js'></script>
<!--SCRIPTS FOR SHOWING AND HIDING OR REMOVING INPUT TEXT BOX-->

<script type='text/javascript' src='data/bootstrap.bundle.min.js'></script>

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

