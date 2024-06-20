<?php if(!isset($conn)){ include 'db_connect.php'; } ?>

<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form action="" id="manage-project">

<?php 
      $user_id = $_SESSION['login_id']; 
?>

 			<input type="hidden" name="id" id="id" value="">

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label">Prisoner Number</label>
          	<input type="text" class="form-control form-control-sm" name="prisoners_no" autocomplete="off" id="prisoners_no" value="" required>
					</div>
				</div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="status" class="control-label">Entry Status <sup style="color: red;">*</sup></label>
            <select name="status" id="status" class="custom-select form-control-sm select2" required>
            <option selected="true" disabled="disabled">--Select Entry Status--</option>
              <option value="Convict">Convict</option>
              <option value="Remandee">Remandee</option>
              <option value="Child">Child</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="entry_date" class="control-label">Entry Date</label>
            <input type="date" class="form-control form-control-sm" name="entry_date" id="entry_date" value="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Cell Number <sup style="color: red;">*</sup></label>
            <input type="text" class="form-control form-control-sm" name="cell" id="cell" autocomplete="off" value="">
          </div>
        </div>
      </div>
      <hr>        
      
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">First Name <sup style="color: red;">*</sup></label>
            <input type="text" class="form-control form-control-sm" name="fname" id="fname" value="" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Last Name <sup style="color: red;">*</sup></label>
            <input type="text" class="form-control form-control-sm" name="lname" id="lname" value="" autocomplete="off" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Alias</label>
						<input type="text" class="form-control form-control-sm" name="alias" id="alias" value="" autocomplete="off">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Gender <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="gender" id="gender" value="" required>
              <option selected="true" disabled="disabled">--Select Gender--</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
      </div>
      <hr>

			<div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Date of Birth <sup style="color: red;">*</sup></label>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="dob" id="dob" value="" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Next of kin name</label>
            <input type="text" class="form-control form-control-sm" name="next_of_kin_name" autocomplete="off" id="next_of_kin" value="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Next of kin contact</label>
            <input type="text"  pattern="[0-9]{10}" class="form-control form-control-sm" id="next_of_kin_contact"  autocomplete="off" name="next_of_kin_contact" value="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Nationality<sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="nationality" id="nationality" value="" required>
            </select>
          </div>
        </div>
        </div>
      <hr>

			<div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home District <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_district"  id="home_district" value="" required>
              <option selected="true" disabled="disabled">--Select Home District--</option>
            </select>
          </div>
	      </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home T/A <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_ta" id="home_ta" value="" required>
              <option selected="true" disabled="disabled">--Select Traditional Authority--</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Home Village <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="home_village" id="home_village" value="" required>
              <option selected="true" disabled="disabled">--Select Village--</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Residential District <sup style="color: red;">*</sup></label>
            <select class="form-control form-control-sm select2" name="residential_district" id="res_district" value="" required>
              <option selected="true" disabled="disabled">--Select District--</option>
            </select>
          </div>
	      </div>
      </div>
      <hr>

			<div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="" class="control-label">Residential T/A <sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="residential_ta" id="res_ta" value="" required>
                <option selected="true" disabled="disabled">--Select Traditional Authority--</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Residential Village <sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="residential_village" id="res_village" value="" required>
                <option selected="true" disabled="disabled">--Select Village--</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">National ID</label>
              <input type="text" class="form-control form-control-sm" name="national_id" value="" autocomplete="off">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Religion<sup style="color: red;">*</sup></label>
              <select class="form-control form-control-sm select2" name="religion" id="religion" value="" required>
                <option selected="true" disabled="disabled">--Select Religion--</option>
              </select>
            </div>
          </div>
        </div>
        <hr>

			  <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Denomination</label>
              <input type="text" class="form-control form-control-sm" name="denomination" id="denomination" autocomplete="off" value="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="" class="control-label">Educational Level</label>
              <select class="form-control form-control-sm select2" name="education_level" id="education_level" value="">
                <option selected="true" disabled="disabled">--Select Educational Level--</option>
                <option value="Primary Education">Primary Education</option>
                <option value="Secondary Education">Secondary Education</option>
                <option value="Short-cycle Tertiary Education">Short-cycle Tertiary Education</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Masters">Masters</option>
                <option value="Doctors">Doctors</option>
              </select>
            </div>
          </div>
        </div>
        <hr>
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
  var today = new Date();
  var yyyy = today.getFullYear();
  var mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
  var dd = String(today.getDate()).padStart(2, '0');
  var maxDate = yyyy + '-' + mm + '-' + dd;

  $('#dob, #entry_date').attr('max', maxDate);

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
  
  $('#nationality').change(function(event){
    var nationality = $(this).val();
    if(nationality !== "Malawian"){
      $('#home_district, #home_ta, #home_village').attr('disabled', 'disabled');
    }else{
      $('#home_district, #home_ta, #home_village').removeAttr('disabled')
    }
  });

  getPrisoner();
});

function getPrisoner() {
  var urlParams = new URLSearchParams(window.location.search);
  var id = urlParams.get('pid');

  $.ajax({
    type: "POST",
    url: 'ajax.php?action=fetch',
    data: { get: 'prisoner', id:  id}, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#id").val(result[0].id);
    $("#fname").val(result[0].fname);
    $("#lname").val(result[0].lname);
    $("#alias").val(result[0].alias);
    $("#prisoners_no").val(result[0].prisoners_no);
    $("#dob").val(result[0].dob);
    $("#cell").val(result[0].cell);
    $("#gender").val(result[0].gender).trigger('change');
    $("#next_of_kin").val(result[0].next_of_kin_name);
    $("#next_of_kin_contact").val(result[0].next_of_kin_contact);
    $("#entry_date").val(result[0].entry_date);
    $("#status").val(result[0].status).trigger('change');
    $("#nationality").val(result[0].nationality).trigger('change');
    $('#national_id').val(result[0].national_id);
    $('#denomination').val(result[0].denomination);
    $("#religion").val(result[0].religion).trigger('change');
    $("#education_level").val(result[0].education_level).trigger('change');
    $("#home_district").val(result[0].home_district).trigger('change');
    $("#home_ta").val(result[0].home_ta).trigger('change');
    $("#home_village").val(result[0].home_village).trigger('change');
    $("#res_district").val(result[0].residential_district).trigger('change');

    // $('#res_district').one('change', function() {
    //   var selectedDistrict = $(this).val();
    //   loadTAs($(this)).done(function() {
    //     // Once TAs are loaded, set the value of res_ta
    //     $("#res_ta").val(result[0].residential_ta).trigger('change');
    //     $("#res_village").val(result[0].residential_village).trigger('change');
    //   });
    // });
    // .then(function(){
    //   $("#res_ta").val(result[0].residential_ta).trigger('change');
    // });
    // $("#res_ta").val(result[0].residential_ta).trigger('change');
    $("#res_village").val(result[0].residential_village).trigger('change');
  });
}

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
        value: item.name,
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
        value: item.name,
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
        value: item.name,
        'data-id': item.district_id,
        text: item.name
      }));
    });
  });
}

function loadTAs(district){
  var districtId = district.find(':selected').attr('data-id');
  var selectId = ""
  if (district.attr('id') == "res_district"){
    selectId = "#res_ta"
  }else if(district.attr('id') == "home_district"){
    selectId = "#home_ta"
  }
  $(selectId).children().remove()
 
  return $.ajax({
    type: "POST",
	  url:'ajax.php?action=metadata',
    data: "get=traditional_authority&districtId=" + districtId,
    dataType: "json",
    success: function( result ) {
      $(selectId).append($('<option>', {
        selected: true,
        disabled: "disabled",
        text: "--Select Traditional Authority--"
      }));
      $.each(result, function(index, item) {
        $(selectId).append($('<option>', {
          value: item.name,
          'data-id': item.traditional_authority_id,
          text: item.name,
        }));
      });
    }
  });
}

function loadVillages(ta){
  var taId = ta.find(':selected').attr('data-id');
  console.log(taId);
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
        value: item.name,
        'data-id': item.village_id,
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
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('pid');

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
          if(id === null){
            setTimeout(function(){
              location.href = 'index.php?page=ART_history_at_entry&pid='+resp.data.id
            },2000)
          }else{
            setTimeout(function(){
              location.href = 'index.php?page=dashboard&pid='+resp.data.id
            },2000)
          }
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

