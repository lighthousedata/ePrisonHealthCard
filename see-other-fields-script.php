			<div class="row">
			<div class="col-md-12">
			<div class="form-group">
    <label for="seeAnotherField" class="control-label">Diagnosis Action</label>
    <select class="form-control form-control-sm select2" id="seeAnotherField" name="diagnosis_action">
     <option selected="true" disabled="disabled">--Select Action Here--</option>
     <option value="Prescription">Prescription</option>
	 <option value="Refer to LAB/Other Departments">Refer to LAB/Other Departments</option>
	 <option value="Refer to Nearest Hospital">Refer to Nearest Hospital</option>
    </select>
  </div>
			</div>
			</div>

	<div class="form-group" id="otherFieldDiv">
		
    <label for="seeAnotherFieldGroup" class="control-label">Prescription</label><hr>
    <table class="table table-bordered" id="dynamic_field">
	<div class="row">
		<tr>
			<td>
	
        <div class="form-group">
          <label for="" class="control-label">Medicine Name</label>
        <select class="form-control form-control-sm select2" name="medicine_name[]" required>
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT * FROM drugs WHERE stations_id = $stations_id ORDER BY name ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['id'] ?>" <?php echo isset($medicine_name) && $medicine_name == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
              </select>
        </div>
		
</td>

<td>
		
        <div class="form-group">
          <label for="" class="control-label">Strength Or Potency Of The Medicine</label>
        <input type="text" class="form-control form-control-sm" name="strength_or_potency[]" value="<?php echo isset($strength_or_potency) ? $strength_or_potency : '' ?>">
        </div>
		
		</td>

<td>
		
        <div class="form-group">
          <label for="" class="control-label">Dosage Form</label>
        <input type="text" class="form-control form-control-sm" name="dosage_form[]" value="<?php echo isset($dosage_form) ? $dosage_form : '' ?>" placeholder="E.g. DT or Tablet, or Syrup etc">
        </div>
      
      </td>

      <td>
      
        <div class="form-group">
          <label for="" class="control-label">Quantity</label>
        <input type="number" class="form-control form-control-sm" name="total_quantity[]" value="<?php echo isset($total_quantity) ? $total_quantity : '' ?>" min="0" step="1" oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"  required/>

      </div>
      </td>

      <td>
      	<button type="button" name="add" id="add" class="btn btn-info">Add</button>
      </td>
    
    </tr>
    </table>
	  </div>
<hr>
  </div>

  <div class="form-group" id="otherFieldDiv1">
    <label for="seeAnotherFieldGroup" class="control-label">LAB/Other Departments</label><hr>
	<div class="row">
    <div class="col-md-6">
     <div class="form-group">
        <label for="" class="control-label">Refer To:</label>
         <select class="form-control form-control-sm select2" name="send_to" value="<?php echo isset($send_to) ? $send_to : '' ?>">
    <option selected="true" disabled="disabled">--Select Department--</option>
    <option <?php echo isset($send_to) && $send_to == 'Outpatient Department' ? 'selected' : '' ?>>Outpatient Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Inpatient Department' ? 'selected' : '' ?>>Inpatient Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Nursing Department' ? 'selected' : '' ?>>Nursing Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Pathology Department (LAB)' ? 'selected' : '' ?>>Pathology Department (LAB)</option>
    <option <?php echo isset($send_to) && $send_to == 'Physical Medicine and Rehabilitation Department' ? 'selected' : '' ?>>Physical Medicine and Rehabilitation Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Operation Theatre Complex (OT)' ? 'selected' : '' ?>>Operation Theatre Complex (OT)</option>
    <option <?php echo isset($send_to) && $send_to == 'Pharmacy Department' ? 'selected' : '' ?>>Pharmacy Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Radiology Department (X-ray)' ? 'selected' : '' ?>>Radiology Department (X-ray)</option>
    <option <?php echo isset($send_to) && $send_to == 'Dietary Department' ? 'selected' : '' ?>>Dietary Department</option>
    <option <?php echo isset($send_to) && $send_to == 'Admitting Department' ? 'selected' : '' ?>>Admitting Department</option>
    </select>
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
    <hr>
  </div>

  <div class="form-group" id="otherFieldDiv2">
    <label for="seeAnotherFieldGroup" class="control-label">Nearest Hospital</label>
	<hr>
	<div class="row">
	<div class="col-md-6">
        <div class="form-group">
          <label for="" class="control-label">Hospital/Clinic Name</label>
        <input type="text" class="form-control form-control-sm" name="hospital" value="<?php echo isset($hospital) ? $hospital : '' ?>">
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
		<hr>
  </div>
  
		  <div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			
    			<button type="submit" name="save" class="btn btn-flat  bg-gradient-primary mx-2">Save </button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
    		</div>
    	</div>
        </form>
    	</div>
    	
	</div>
</div>



<script language="JavaScript">

  // this prevents from typing non-number text, including "e".
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
      evt.preventDefault();
    } else {
      return true;
    }
  }
</script>


<script src="data/jquery-3.2.1.slim.min.js"></script>
<script src="data/bootstrap.min.js"></script>

<script type="text/javascript">
 $("#seeAnotherField").change(function() {
      if ($(this).val() == "Prescription") {
        $('#otherFieldDiv').show();  
      }
      else {
        $('#otherFieldDiv').hide();        
      }
    });
    $("#seeAnotherField").trigger("change");
</script>


<script type="text/javascript">
 $("#seeAnotherField").change(function() {
      if ($(this).val() == "Refer to LAB/Other Departments") {
        $('#otherFieldDiv1').show();  
      }
      else {
        $('#otherFieldDiv1').hide();        
      }
    });
    $("#seeAnotherField").trigger("change");
</script>


<script type="text/javascript">
 $("#seeAnotherField").change(function() {
      if ($(this).val() == "Refer to Nearest Hospital") {
        $('#otherFieldDiv2').show();  
      }
      else {
        $('#otherFieldDiv2').hide();        
      }
    });
    $("#seeAnotherField").trigger("change");
</script>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_medical_treatment',
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