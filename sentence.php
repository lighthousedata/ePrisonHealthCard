<?php if(!isset($conn)){ include 'db_connect.php'; } 


?>

<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form action="sentence.php" id="manage-project">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
      $station_code = $_SESSION['login_station_code'];

      
      $prisoners = $conn->query("SELECT id FROM prisoners WHERE stations_id = $stations_id AND  regions_id = $regions_id")->num_rows;
          $value = $prisoners + 1;
          $punique = str_pad($value, 4, '0', STR_PAD_LEFT);
          $year = (new DateTime)->format("Y");
          $prisoners_no = ($station_code.'/'.$year.'/'.$punique); 
?>

 <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
          <label for="" class="control-label">Prisoner Number <sup style="color: red;">*</sup></label>
          <select class="form-control form-control-sm select2" name="prisoners_no" id="prisoners_no" required>
                <option></option>
                <?php 
                $prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['prisoners_no'] ?>" <?php echo isset($prisoners_no) && $prisoners_no == $prisoners_no ? "selected" : '' ?>><?php echo ucwords($row['pname']) ?></option>
                <?php endwhile; ?>
              </select>
        </div>
			</div>

          	<div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Case Number<sup style="color: red;">*</sup></label>
             <input type="text" class="form-control form-control-sm" name="case_no" id="case_no" value="<?php echo isset($case_no) ? $case_no : '' ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Court Name <sup style="color: red;">*</sup></label>
              <input type="text" class="form-control form-control-sm" name="court" id="court" value="<?php echo isset($court) ? $court : '' ?>" required>
            </div>
          </div>

           <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Conviction <sup style="color: red;">*</sup></label>
				<select class="form-control form-control-sm select2" name="conviction" id="conviction" value="<?php echo isset($conviction) ? $conviction : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Here--</option>
                <option>First Offender</option>
                <option>Recidivist</option>
                
              </select>
            </div>
          </div>
		</div>
		<hr>

<div class="row">
            <div class="col-md-3">
                <div class="form-group">
              <label for="" class="control-label">Date of Commital <sup style="color: red;">*</sup></label>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="commital_date" id="commital_date" value="<?php echo isset($commital_date) ? date("Y-m-d",strtotime($commital_date)) : '' ?>" required>
            </div>
            </div>

            <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Date of Admission <sup style="color: red;">*</sup></label>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="admission_date" id="admission_date" value="<?php echo isset($admission_date) ? date("Y-m-d",strtotime($admission_date)) : '' ?>" required>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Sentence Confirmation <sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="sentence_confirmation" id="sentence_confirmation" value="<?php echo isset($sentence_confirmation) ? $sentence_confirmation : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Here--</option>
                <option>Confirmed</option>
                <option>Not Confirmed</option>
                
              </select>
            </div>
          </div>

           <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Security Risk <sup style="color: red;">*</sup></label>
                <select class="form-control form-control-sm select2" name="security_risk" id="security_risk" value="<?php echo isset($security_risk) ? $security_risk : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Risk Level--</option>
                <option>High</option>
                <option>Moderate</option>
                <option>Low</option>
              </select>
            </div>
          </div>
        </div>
        <hr>



<div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Sentence Confirmation Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="scdate" id="scdate" value="<?php echo isset($scdate) ? date("Y-m-d",strtotime($scdate)) : '' ?>">
            </div>
          </div>

            <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Sentence Confirmation Notification Received Date</label>
                <input type="date" class="form-control form-control-sm" autocomplete="off" name="scndate" id="scndate" value="<?php echo isset($scndate) ? date("Y-m-d",strtotime($scndate)) : '' ?>">
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
      url:'ajax.php?action=save_prisoner_case',
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
            location.href = 'index.php?page=offence'
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

