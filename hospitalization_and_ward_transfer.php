<?php if(!isset($conn)){ include 'db_connect.php'; } 


?>


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
          <label for="" class="control-label">Clinical Referral</label>
        <br>
    <input name="clinical_referral" type="radio" id="clinical_referral1" <?php if (isset($clinical_referral) && $clinical_referral=="Yes") echo "checked";?> value="Yes" required />
    <label for="clinical_referral1" style="font-size: 12px;">Yes</label>
<br>
    <input name="clinical_referral" type="radio" id="clinical_referral2" <?php if (isset($clinical_referral) && $clinical_referral=="No") echo "checked";?> value="No" required/>
    <label for="clinical_referral2" style="font-size: 12px;">No</label>
        </div>
      </div>

 <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Hospital Name</label>
        <input type="text" class="form-control form-control-sm" name="hospital" value="<?php echo isset($hospital) ? $hospital : '' ?>">
        </div>
      </div>

     <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Wing</label>
        <input type="text" class="form-control form-control-sm" name="wing" value="<?php echo isset($wing) ? $wing : '' ?>">
        </div>
      </div>

         
		</div>
		<hr>

<div class="row">
			 <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Ward</label>
        <input type="text" class="form-control form-control-sm" name="ward" value="<?php echo isset($ward) ? $ward : '' ?>">
        </div>
      </div>

          	<div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Diagnosis</label>
        <input type="text" class="form-control form-control-sm" name="diagnosis" value="<?php echo isset($diagnosis) ? $diagnosis : '' ?>">
        </div>
      </div>

 <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Treatment</label>
        <input type="text" class="form-control form-control-sm" name="treatment" value="<?php echo isset($treatment) ? $treatment : '' ?>">
        </div>
      </div>

     <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Transfer Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="transfer_date" value="<?php echo isset($transfer_date) ? date("Y-m-d",strtotime($transfer_date)) : '' ?>" required>
            </div>
          </div>

         
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Outcome/Results</label>
					<br>
    <input name="outcome" type="radio" id="outcome1" <?php if (isset($outcome) && $outcome=="Released") echo "checked";?> value="Released" required />
    <label for="outcome1" style="font-size: 12px;">Released</label>
<br>
    <input name="outcome" type="radio" id="outcome2" <?php if (isset($outcome) && $outcome=="Transfered") echo "checked";?> value="Transfered" required/>
    <label for="outcome2" style="font-size: 12px;">Transfered</label>
<br>
    <input name="outcome" type="radio" id="outcome3" <?php if (isset($outcome) && $outcome=="Died") echo "checked";?> value="Died" required/>
    <label for="outcome3" style="font-size: 12px;">Died</label>
<br>
    <input name="outcome" type="radio" id="outcome4" <?php if (isset($outcome) && $outcome=="Escape") echo "checked";?> value="Escape" required/>
    <label for="outcome4" style="font-size: 12px;">Escape</label>
				</div>
			
			</div>

			<div class="col-md-6">
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
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
    		</div>
    	</div>
	</div>
</div>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_hospitalization_and_ward_transfer',
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

