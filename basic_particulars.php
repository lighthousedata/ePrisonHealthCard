<?php if(!isset($conn)){ include 'db_connect.php'; } ?>

<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form action="" id="manage-project">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
      $station_code = $_SESSION['login_station_code'];

      $districts = $conn->query("SELECT * FROM district;");
      $districts_2 = $conn->query("SELECT * FROM district;");
      $tas = $conn->query("SELECT * FROM traditional_authority;");
      $tas_2 = $conn->query("SELECT * FROM traditional_authority;");
      $villages = $conn->query("SELECT * FROM village;");
      $villages_2 = $conn->query("SELECT * FROM village;");

?>

 			<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 			<input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 			<input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label">Prisoner Number</label>
          	<input type="text" class="form-control form-control-sm" name="prisoners_no"  id="prisoners_no" value="<?php echo isset($prisoners_no) ? $prisoners_no : '' ?>">
					</div>
				</div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">First Name <sup style="color: red;">*</sup></label>
            <input type="text" class="form-control form-control-sm" name="fname" value="<?php echo isset($fname) ? $fname : '' ?>" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Last Name <sup style="color: red;">*</sup></label>
            <input type="text" class="form-control form-control-sm" name="lname" value="<?php echo isset($lname) ? $lname : '' ?>" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Alias</label>
						<input type="text" class="form-control form-control-sm" name="alias" value="<?php echo isset($alias) ? $alias : '' ?>">
          </div>
        </div>
			</div>
			<hr>

			<div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Gender <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="gender" value="<?php echo isset($gender) ? $gender : '' ?>" required>
              <option selected="true" disabled="disabled">--Select Gender--</option>
              <option <?php echo isset($gender) && $gender == 'Male' ? 'selected' : '' ?>>Male</option>
              <option  <?php echo isset($gender) && $gender == 'Female' ? 'selected' : '' ?>>Female</option>
              <option  <?php echo isset($gender) && $gender == 'Other' ? 'selected' : '' ?>>Other</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Date of Birth <sup style="color: red;">*</sup></label>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="dob" value="<?php echo isset($dob) ? date("Y-m-d",strtotime($dob)) : '' ?>" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Next of kin name</label>
            <input type="text" class="form-control form-control-sm" name="next_of_kin_name" value="<?php echo isset($next_of_kin_name) ? $next_of_kin_name : '' ?>">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Next of kin contact</label>
            <input type="text"  pattern="[0-9]{10}" class="form-control form-control-sm" name="next_of_kin_contact" value="<?php echo isset($next_of_kin_contact) ? $next_of_kin_contact : '' ?>">
          </div>
        </div>
      </div>
      <hr>

			<div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Nationality<sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="nationality" id="nationality" value="<?php echo isset($nationality) ? $nationality : '' ?>" required>
     
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home District <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_district"  id="home_district" value="<?php echo isset($home_district) ? $home_district : '' ?>" required>
              <option selected="true" disabled="disabled">--Select Home District--</option>
            </select>
          </div>
	      </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home T/A <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_ta" id="home_ta" value="<?php echo isset($home_ta) ? $home_ta : '' ?>" required>
              <option selected="true" disabled="disabled">--Select Traditional Authority--</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home Village <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_village" id="home_village" value="<?php echo isset($home_village) ? $home_village : '' ?>" required>
              <option selected="true" disabled="disabled">--Select Village--</option>
            </select>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Residential District <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="residential_district" id="res_district" value="<?php echo isset($residential_district) ? $residential_district : '' ?>" required>
            <option selected="true" disabled="disabled">--Select District--</option>
            </select>
          </div>
	      </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Residential T/A <sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="residential_ta" id="res_ta" value="<?php echo isset($residential_ta) ? $residential_ta : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Traditional Authority--</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Residential Village <sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="residential_village" id="res_village" value="<?php echo isset($residential_village) ? $residential_village : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Village--</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">National ID</label>
              <input type="text" class="form-control form-control-sm" name="national_id" value="<?php echo isset($national_id) ? $national_id : '' ?>">
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Religion<sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="religion" id="religion" value="<?php echo isset($religion) ? $religion : '' ?>" required>
                <option selected="true" disabled="disabled">--Select Religion--</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Denomination</label>
              <input type="text" class="form-control form-control-sm" name="denomination" value="<?php echo isset($denomination) ? $denomination : '' ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Educational Level</label>
              <select class="form-control form-control-sm select2" name="education_level" value="<?php echo isset($education_level) ? $education_level : '' ?>">
                <option selected="true" disabled="disabled">--Select Educational Level--</option>
                <option <?php echo isset($education_level) && $education_level == 'Primary Education' ? 'selected' : '' ?>>Primary Education</option>
                <option <?php echo isset($education_level) && $education_level == 'Secondary Education' ? 'selected' : '' ?>>Secondary Education</option>
                <option <?php echo isset($education_level) && $education_level == 'Short-cycle Tertiary Education' ? 'selected' : '' ?>>Short-cycle Tertiary Education</option>
                <option <?php echo isset($education_level) && $education_level == 'Diploma' ? 'selected' : '' ?>>Diploma</option>
                <option <?php echo isset($education_level) && $education_level == 'Bachelors' ? 'selected' : '' ?>>Bachelors</option>
                <option <?php echo isset($education_level) && $education_level == 'Masters' ? 'selected' : '' ?>>Masters</option>                  <option <?php echo isset($education_level) && $education_level == 'Doctors' ? 'selected' : '' ?>>Doctors</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Cell Number</label>
              <input type="text" class="form-control" name="cell" value="<?php echo isset($cell) ? $cell : '' ?>">
            </div>
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Entry Status <sup style="color: red;">*</sup></label>
              <select name="status" id="status" class="custom-select" required>
                <option selected="true" disabled="disabled" style="background-color: gray; color: white; font-weight: bold;">--Select Entry Status--</option>
                <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?> style="background-color: gray; color: white; font-weight: bold;">CONVICT</option>
                <option value="2" <?php echo isset($status) && $status == 2 ? 'selected' : '' ?> style="background-color: gray; color: white; font-weight: bold;">REMANDEE</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="entry_date" class="control-label">Entry Date</label>
              <input type="date" class="form-control" name="entry_date" id="entry_date" value="<?php echo isset($entry_date) ? $entry_date : '' ?>">
            </div>
          </div>
        </div>
        </form>
    	</div>
    	<div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project">Save </button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
    		</div>
    	</div>
	</div>
</div>

<script>
$(document).ready(function(){
  $('#home_district, #res_district').change(function(){
    loadTAs($(this))
  })
  $('#home_ta, #res_ta').change(function(){
    loadVillages($(this))
  })

  $("#prisoners_no").blur(function(){
    var prison_num = $(this).val();
    $.ajax({
      type: "POST",
      url: 'ajax.php?action=verify',
      data: { field: 'prison_number', value: prison_num },
      success: function(response){
        if (response == 1){
          alert_toast("Prison number already exists!","error");
          $("#prisoners_no").focus();
        }
      }
    });
  });
});

function loadNationality() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'nationality' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#nationality").append($('<option>', {
        selected: true,
        disabled: "disabled",
        text: "--Select Nationality--"
      }));
    // Assuming `result` is an array of objects
    $.each(result, function(index, item) {
      $("#nationality").append($('<option>', {
        value: item.nationality_id,
        text: item.name
      }));
    });
  });
}

function loadReligion() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'religion' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $.each(result, function(index, item) {
      $("#religion").append($('<option>', {
        value: item.religion_id,
        text: item.name
      }));
    });
  });
}

function loadDistricts() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'districts' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $.each(result, function(index, item) {
      $("#home_district, #res_district").append($('<option>', {
        value: item.district_id,
        text: item.name
      }));
    });
  });
}

function loadTAs(district){
  var districtId = district.find(':selected').val()
  var selectId = ""
  if (district.attr('id') == "res_district"){
    selectId = "#res_ta"
  }else if(district.attr('id') == "home_district"){
    selectId = "#home_ta"
  }
  $(selectId).children().remove()
 
  $.ajax({
    type: "POST",
	  url:'ajax.php?action=metadata',
    data: "get=traditional_authority&districtId=" + districtId,
    dataType: "json",
  }).done(function( result ) {
    $(selectId).append($('<option>', {
        selected: true,
        disabled: "disabled",
        text: "--Select Traditional Authority--"
      }));
    $.each(result, function(index, item) {
      $(selectId).append($('<option>', {
        value: item.traditional_authority_id,
        text: item.name,
      }));
    })
  });
}

function loadVillages(ta){
  var taId = ta.find(':selected').val()
  var selectId = ""
  if (ta.attr('id') == "res_ta"){
    selectId = "#res_village"
  }else if(ta.attr('id') == "home_ta"){
    selectId = "#home_village"
  }
  $(selectId).children().remove()
 
  $.ajax({
    type: "POST",
    url: "ajax.php?action=metadata",
    data: "get=village&taId=" + taId,
    dataType: "json"
  }).done(function( result ) {
    $(selectId).append($('<option>', {
        selected: true,
        disabled: "disabled",
        text: "--Select Village--"
      }));
    $.each(result, function(index, item) {
      $(selectId).append($('<option>', {
        value: item.village_id,
        text: item.name,
      }));
    })
  });
}
// init the metadata
loadNationality()
loadReligion()
loadDistricts()
</script>
<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_basic_particulars',
			data: new FormData($(this)[0]),
      cache: false,
		  contentType: false,
		  processData: false,
		  method: 'POST',
		  type: 'POST',
		  dataType: "json",
      success:function(resp){
				if(resp.success){
					alert_toast(resp.message,"success");
					setTimeout(function(){
					 	location.href = 'index.php?page=ART_history_at_entry&pid='+resp.data.id
					},2000)
				}else {
          alert_toast(resp.message,"error");
        }
			},
      error: function(xhr, status, error) {
        console.error("AJAX Error:", error);
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
						location.href = 'index.php?page=home'
					},2000)
				}
       }
     });
 }
</script>

