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
              <label for="" class="control-label">Height (CM)</label>
              <input type="number" class="form-control form-control-sm" name="height" value="<?php echo isset($height) ? $height : '' ?>"  min="0" step="1" oninput="validity.valid||(value='');" onpress="isNumber(event)"  required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Weight (Kgs)</label>
              <input type="number" class="form-control form-control-sm" name="weight" value="<?php echo isset($weight) ? $weight : '' ?>" min="0" step="0.01" oninput="validity.valid||(value='');" onpress="isNumber(event)" required>
            </div>
          </div>

           <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Eye Color</label>
					<input type="text" class="form-control form-control-sm" name="eye_color" value="<?php echo isset($eye_color) ? $eye_color : '' ?>">
            </div>
          </div>
		</div>
		<hr>

<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label">Scars/Marks</label>
					<br>
<input name="marks_scars" type="radio" id="marks_scars1" <?php if (isset($marks_scars) && $marks_scars=="Yes") echo "checked";?> value="Yes" required>
    <label for="marks_scars1" style="font-size: 12px;">Yes</label>

<input name="marks_scars" type="radio" id="marks_scars2" <?php if (isset($marks_scars) && $marks_scars=="No") echo "checked";?> value="No" required>
    <label for="marks_scars2" style="font-size: 12px;">No</label>
				</div>
			</div>

			<div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Tatoos</label><br>
<input name="tatoo" id="tatoo" type="radio" <?php if (isset($tatoo) && $tatoo=="Yes") echo "checked";?> value="Yes" required>
    <label for="tatoo1" style="font-size: 12px;">Yes</label>

    <input name="tatoo" id="tatoo" type="radio" <?php if (isset($tatoo) && $tatoo=="No") echo "checked";?> value="No" required>
    <label for="tatoo2" style="font-size: 12px;">No</label>
            </div>
          </div>

          	<div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Hernia</label><br>
<input name="hernia" id="hernia" type="radio" <?php if (isset($hernia) && $hernia=="Yes") echo "checked";?> value="Yes" required>
    <label for="hernia1" style="font-size: 12px;">Yes</label>

    <input name="hernia" id="hernia" type="radio" <?php if (isset($hernia) && $hernia=="No") echo "checked";?> value="No" required>
    <label for="hernia2" style="font-size: 12px;">No</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Perforation</label><br>
   <input name="perforation" type="radio" <?php if (isset($perforation) && $perforation=="Yes") echo "checked";?> value="Yes" id="perforation1" required>
    <label for="perforation1" style="font-size: 12px;">Yes</label>

    <input name="perforation" type="radio" <?php if (isset($perforation) && $perforation=="No") echo "checked";?> value="No" id="perforation2" required>
    <label for="perforation2" style="font-size: 12px;">No</label>
            </div>
          </div>
		</div>
		<hr>


<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label">Ear Perforation</label>
					<br>
<input name="ear_perforation" type="radio" id="ear_perforation1" <?php if (isset($ear_perforation) && $ear_perforation=="Yes") echo "checked";?> value="Yes" required>
    <label for="ear_perforation1" style="font-size: 12px;">Yes</label>

    <input name="ear_perforation" type="radio" id="ear_perforation2" <?php if (isset($ear_perforation) && $ear_perforation=="No") echo "checked";?> value="No" required>
    <label for="ear_perforation2" style="font-size: 12px;">No</label>
				</div>
			</div>
          	
<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label">Head Abnormality/Size/Shape</label>
					<br>
<input name="head_abnormality_in_size_or_shape" type="radio" id="head_abnormality_in_size_or_shape1" <?php if (isset($head_abnormality_in_size_or_shape) && $head_abnormality_in_size_or_shape=="Yes") echo "checked";?> value="Yes" required>
    <label for="head_abnormality_in_size_or_shape" style="font-size: 12px;">Yes</label>

    <input name="head_abnormality_in_size_or_shape" type="radio" id="head_abnormality_in_size_or_shape" <?php if (isset($head_abnormality_in_size_or_shape) && $head_abnormality_in_size_or_shape=="No") echo "checked";?> value="No" required>
    <label for="head_abnormality_in_size_or_shape2" style="font-size: 12px;">No</label>
				</div>
			</div>


<div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Skin Color</label>
					<input type="text" class="form-control form-control-sm" name="skin_color" value="<?php echo isset($skin_color) ? $skin_color : '' ?>">
            </div>
          </div>

<div class="col-md-3">
            <div class="form-group">
            	<table class="table" id="dynamic_field">
             <tr>
 <td>  
  <p style="text-align: center; color: #CD853F; font-weight: bold;">
   <button type="button" name="add" id="add" class="btn btn-light" style="color: #CD853F; font-weight: bold;">Circumcision</button>
 </p>
 </td> 
 <td></td>
 
</tr>
</table>
            </div>
          </div>

		</div>

<hr>

<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label">Sight Defects</label>
					<br>
<input name="sight_defect" type="radio" id="sight_defect1" <?php if (isset($sight_defect) && $sight_defect=="Yes") echo "checked";?> value="Yes" required>
    <label for="sight_defect1" style="font-size: 12px;">Yes</label>

    <input name="sight_defect" type="radio" id="sight_defect2" <?php if (isset($sight_defect) && $sight_defect=="No") echo "checked";?> value="No" required>
    <label for="sight_defect2" style="font-size: 12px;">No</label>
				</div>
			</div>

			<div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Ear Defects</label><br>
    <input name="ear_defect" type="radio" id="ear_defect1" <?php if (isset($ear_defect) && $ear_defect=="Yes") echo "checked";?> value="Yes" required>
    <label for="ear_defect1" style="font-size: 12px;">Yes</label>

    <input name="ear_defect" type="radio" id="ear_defect2" <?php if (isset($ear_defect) && $ear_defect=="No") echo "checked";?> value="No" required>
    <label for="ear_defect2" style="font-size: 12px;">No</label>
            </div>
          </div>
         

          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Tooth Disorder</label><br>
   <input name="tooth_disorder" type="radio" id="tooth_disorder1" <?php if (isset($tooth_disorder) && $tooth_disorder=="Yes") echo "checked";?> value="Yes" required>
    <label for="tooth_disorder1" style="font-size: 12px;">Yes</label>

    <input name="tooth_disorder" type="radio" id="tooth_disorder2" <?php if (isset($tooth_disorder) && $tooth_disorder=="No") echo "checked";?> value="No" required>
    <label for="tooth_disorder2" style="font-size: 12px;">No</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              
            </div>
          </div>
		</div>
		<hr>
       
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Others (Specify)</label>
					<textarea name="others" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;">
                    <?php echo isset($others) ? $others : '' ?>
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

<script type='text/javascript' src='data/bootstrap.bundle.min.js'></script>
<!--SCRIPTS FOR SHOWING AND HIDING OR REMOVING INPUT TEXT BOX-->
<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><p style="text-align:center; "><label class="pay" style="color: #CD853F;">Circumcision</label><br><input name="circumcision" type="radio" id="circumcision1" <?php if (isset($circumcision) && $circumcision=="Yes") echo "checked";?> value="Yes"><label for="circumcision1" style="font-size: 12px;">Yes</label><input name="circumcision" type="radio" id="circumcision2" <?php if (isset($circumcision) && $circumcision=="No") echo "checked";?> value="No"><label for="circumcision2" style="font-size: 12px;">No</label></p></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td> </tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
});
</script> 

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

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_characteristics',
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

