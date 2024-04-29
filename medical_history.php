<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());
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
			<div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
				<div class="form-group">
					<label for="" class="control-label" style="font-size:12px;">Prisoner Number</label>
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
        <label for="" class="control-label" style="font-size:12px;">Date</label>
        <div class="form-group">
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>">
            </div>
    </div>
  </div>
 </div>
</div>
<hr>


<div class="row">
			<div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
				<div class="form-group">
					<label for="" class="control-label" style="font-size:12px;">Are you currently ill (fever, headache, fatigue, nausea, vomiting, or diarrhea)?</label>
					<br>

    <label for="currently_ill" style="font-size: 12px;">Yes</label> 
    <input name="currently_ill" value="Yes" type="radio" id="currently_ill"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="currently_ill1" style="font-size: 12px;">No</label>
    <input name="currently_ill" value="No"  type="radio" id="currently_ill1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="currently_ill2" style="font-size: 12px;">No Applicable</label>
    <input name="currently_ill" value="N/A" type="radio" id="currently_ill2">

				</div>
			</div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Have you ever fainted from having your blood drawn or from an injection?</label>
                    <br>
<label for="fainted" style="font-size: 12px;">Yes</label> 
    <input name="fainted" value="Yes" type="radio" id="fainted"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="fainted1" oninvalid="No" style="font-size: 12px;">No</label>
    <input name="fainted" type="radio" id="fainted1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="fainted2" style="font-size: 12px;">No Applicable</label>
    <input name="fainted" value="N/A" type="radio" id="fainted2">
                </div>
            </div>
        </div>
    </div>
</div>
		<hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Do you live (or work closely) with anyone who has a deficiency of the immune system?</label>
                    <br>

    <label for="live_with_someone_have_deficiency_of_immune" style="font-size: 12px;">Yes</label> 
    <input name="live_with_someone_have_deficiency_of_immune" value="Yes" type="radio" id="live_with_someone_have_deficiency_of_immune"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="live_with_someone_have_deficiency_of_immune1" style="font-size: 12px;">No</label>
    <input name="live_with_someone_have_deficiency_of_immune" value="No" type="radio" id="live_with_someone_have_deficiency_of_immune1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="live_with_someone_have_deficiency_of_immune2" style="font-size: 12px;">No Applicable</label>
    <input name="live_with_someone_have_deficiency_of_immune" value="N/A" type="radio" id="live_with_someone_have_deficiency_of_immune2">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Do you have any deficiency of the immune system, or are you taking steroids, Yes No chemotherapy?</label>
                    <br>
<label for="deficincy_of_immune" style="font-size: 12px;">Yes</label> 
    <input name="deficincy_of_immune" value="Yes" type="radio" id="deficincy_of_immune"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="deficincy_of_immune1" style="font-size: 12px;">No</label>
    <input name="deficincy_of_immune" value="No" type="radio" id="deficincy_of_immune1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="deficincy_of_immune2" style="font-size: 12px;">No Applicable</label>
    <input name="deficincy_of_immune" value="N/A" type="radio" id="deficincy_of_immune2">
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Is there a possibility you may be pregnant?</label>
                    <br>

    <label for="pregnant_posibility" style="font-size: 12px;">Yes</label> 
    <input name="pregnant_posibility" value="Yes" type="radio" id="pregnant_posibility"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="pregnant_posibility1" style="font-size: 12px;">No</label>
    <input name="pregnant_posibility" value="No" type="radio" id="pregnant_posibility1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="pregnant_posibility2" style="font-size: 12px;">No Applicable</label>
    <input name="pregnant_posibility" value="N/A" type="radio" id="pregnant_posibility2">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Do you currently have a fever over 101 degrees orally or an acute illness?</label>
                    <br>
<label for="currently_fever" style="font-size: 12px;">Yes</label> 
    <input name="currently_fever" value="Yes" type="radio" id="currently_fever"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="currently_fever1" style="font-size: 12px;">No</label>
    <input name="currently_fever" value="No" type="radio" id="currently_fever1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="currently_fever2" style="font-size: 12px;">No Applicable</label>
    <input name="currently_fever" value="N/A" type="radio" id="currently_fever2">
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Are you on any anticoagulation medications or blood thinners?</label>
                    <br>

    <label for="anticoagulation_medications" style="font-size: 12px;">Yes</label> 
    <input name="anticoagulation_medications" value="Yes" type="radio" id="anticoagulation_medications"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="anticoagulation_medications1" style="font-size: 12px;">No</label>
    <input name="anticoagulation_medications" value="No" type="radio" id="anticoagulation_medications1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="anticoagulation_medications2" style="font-size: 12px;">No Applicable</label>
    <input name="anticoagulation_medications" value="N/A" type="radio" id="anticoagulation_medications2">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Do you have a thymus disorder (thymomas, myasthenia gravis, thymectomy)?</label>
                    <br>
<label for="thymus_disorder" style="font-size: 12px;">Yes</label> 
    <input name="thymus_disorder" value="Yes" type="radio" id="thymus_disorder"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="thymus_disorder1" style="font-size: 12px;">No</label>
    <input name="thymus_disorder" value="No" type="radio" id="thymus_disorder1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="thymus_disorder2" style="font-size: 12px;">No Applicable</label>
    <input name="thymus_disorder" value="N/A" type="radio" id="thymus_disorder2">
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Have you had a blood transfusion or Immune globulin in the past 6 months?</label>
                    <br>

    <label for="blood_transfusion_or_Immune_globulin" style="font-size: 12px;">Yes</label> 
    <input name="blood_transfusion_or_Immune_globulin" value="Yes" type="radio" id="blood_transfusion_or_Immune_globulin"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="blood_transfusion_or_Immune_globulin1" style="font-size: 12px;">No</label>
    <input name="blood_transfusion_or_Immune_globulin" value="No" type="radio" id="blood_transfusion_or_Immune_globulin1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="blood_transfusion_or_Immune_globulin2" style="font-size: 12px;">No Applicable</label>
    <input name="blood_transfusion_or_Immune_globulin" value="N/A" type="radio" id="blood_transfusion_or_Immune_globulin2">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Have you had any surgical procedure in the past 6 months?</label>
                    <br>
<label for="surgical_procedure" style="font-size: 12px;">Yes</label> 
    <input name="surgical_procedure" type="radio" value="Yes" id="surgical_procedure"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="surgical_procedure1" style="font-size: 12px;">No</label>
    <input name="surgical_procedure" type="radio" value="No" id="surgical_procedure1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="surgical_procedure2" style="font-size: 12px;">No Applicable</label>
    <input name="surgical_procedure" type="radio" value="N/A" id="surgical_procedure2">
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;">Do you have an allergy to egg, chicken protein, or gelatin?</label>
                    <br>

    <label for="allergy" style="font-size: 12px;">Yes</label> 
    <input name="allergy" type="radio" value="Yes" id="allergy"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="allergy1" style="font-size: 12px;">No</label>
    <input name="allergy" type="radio" value="No" id="allergy1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="allergy2" style="font-size: 12px;">No Applicable</label>
    <input name="allergy" type="radio" value="N/A" id="allergy2">

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
                <div class="card card-outline card-secondary">
    <div class="card-body">
                <div class="form-group">
                    <label for="" class="control-label" style="font-size:12px;"></label>
                    <br>
<br>
                </div>
            </div>
        </div>
    </div>
</div>
        <hr>

       
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
			url:'ajax.php?action=save_medical_history',
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

