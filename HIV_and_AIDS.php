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
              	$prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE 1 ORDER BY prisoners_no ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['prisoners_no'] ?>" <?php echo isset($prisoners_no) && $prisoners_no == $row['prisoners_no'] ? "selected" : '' ?>><?php echo ucwords($row['pname']) ?></option>
              	<?php endwhile; ?>
              </select>
				</div>
			</div>
          	<div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">Eligible for Test?</label>
          <br>
    <input name="test_eligible" type="radio" id="test_eligible1" <?php if (isset($test_eligible) && $test_eligible=="Yes") echo "checked";?> value="Yes" required />
    <label for="test_eligible1" style="font-size: 12px;">Yes</label>

    <input name="test_eligible" type="radio" id="test_eligible2" <?php if (isset($test_eligible) && $test_eligible=="No") echo "checked";?> value="No" required/>
    <label for="test_eligible2" style="font-size: 12px;">No</label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="" class="control-label">HIV/AIDS Test</label>
          <br>
    <input name="testing" type="radio" id="testing1" <?php if (isset($testing) && $testing=="Negative") echo "checked";?> value="Negative" required />
    <label for="testing1" style="font-size: 12px;">Negative</label>
<br>
    <input name="testing" type="radio" id="testing2" <?php if (isset($testing) && $testing=="Positive") echo "checked";?> value="Positive" required/>
    <label for="testing2" style="font-size: 12px;">Positive</label>
<br>
    <input name="testing" type="radio" id="testing3" <?php if (isset($testing) && $testing=="Inconclusive") echo "checked";?> value="Inconclusive" required/>
    <label for="testing3" style="font-size: 12px;">Inconclusive</label>
<br>
    <input name="testing" type="radio" id="testing4" <?php if (isset($testing) && $testing=="Refused") echo "checked";?> value="Refused" required/>
    <label for="testing4" style="font-size: 12px;">Refused</label>
        </div>
      </div>

     <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Service Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo isset($service_date) ? date("Y-m-d",strtotime($service_date)) : '' ?>" required>
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
			url:'ajax.php?action=save_hiv_aids',
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

