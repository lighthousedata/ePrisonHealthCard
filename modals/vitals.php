<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>

<?php 
    $regions_id = $_SESSION['login_regions_id'];
    $stations_id = $_SESSION['login_stations_id'];
    $user_id = $_SESSION['login_id']; 
?>
<div class="modal-header">
        <h5 class="modal-title text-center" id="tbModalLabel">Vitals</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body col-md-12">
      <form action="" id="vitals-form">
        <input type="hidden" name="id" id="id" value="">
        <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
        <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
        <input type="hidden" name="prisoners_no" id="vitals_prisoner_id" value="">
        <input type="hidden" id="bmu" value="mybmu">

        <div class="form-group row">
          <label for="visit_date" class="col-md-5 col-form-label">Visit Date</label>
          <div class="col-md-7">
              <input type="date" class="form-control" value="" name="visit_date" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="resident_status" class="col-md-5 col-form-label">Resident Status</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="resident_status" id="entry" value="Entry" required>
              <label class="form-check-label" for="entry">Entry</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="resident_status" id="stay" value="Stay" required>
              <label class="form-check-label" for="stay">Stay</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="resident_status" id="exit" value="Exit" required>
              <label class="form-check-label" for="exit">Exit</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="temperature" class="col-md-5 col-form-label">
            <i class="fas fa-temperature-high nav-icon"></i>
            Temperature
          </label>
          <div class="col-md-7">
            <input type="number" min="0" max="200" step="0.1" name="temperature" id="temperature" min="0" step="0.01" max="100" oninput="validity.valid||(value='');"
              onpress="isNumber(event)" value="" required class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="weight" class="col-md-5 col-form-label">
            Weight (kg)
          </label>
          <div class="col-md-7">
            <input type="number" id="weight" min="0" max="500" step="0.1" name="weight" class="form-control" oninput="validity.valid||(value=''); Calculate();" 
              onpress="isNumber(event)" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="height" class="col-md-5 col-form-label">Height (cm)</label>
          <div class="col-md-7">
          <input type="number" name="height" id="height" min="1" max="500" step="1" class="form-control" oninput="validity.valid||(value=''); Calculate();" 
            onpress="isNumber(event)" value="" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="bmi_muac" class="col-md-5 col-form-label">BMI/MUAC</label>
          <div class="col-md-7">
            <input type="number" name="bmi_muac" id="bmi_muac" value="" class="form-control" required readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="systolic" class="col-md-5 col-form-label">Systolic BP</label>
          <div class="col-md-7">
          <input type="number" name="systolic" id="systolic" min="0" max="500" step="1" placeholder="Systolic" value="" 
            oninput="validity.valid||(value='');" onpress="isNumber(event)" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="diastolic" class="col-md-5 col-form-label">Diastolic BP</label>
          <div class="col-md-7">
          <input type="number" min="0" max="500" step="1" name="diastolic" id="diastolic" placeholder="Diastolic" oninput="validity.valid||(value='');" onpress="isNumber(event)"
            value="<?php echo isset($diastolic) ? $diastolic : '' ?>" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="comment" class="col-md-5 col-form-label">Comment</label>
          <div class="col-md-7">
            <textarea name="comment" class="form-control" id="comment" row="3">
            </textarea>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" form="vitals-form" >Save </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

<script>

function Calculate() {
    kgs = $("#weight").val();
    cm = $("#height").val();

    if (kgs !== "" && cm !== "") {
      m = cm / 100;
      ms = m * m;
      $("#bmi_muac, #bmu").val((kgs / ms).toFixed(2));
      // document.getElementById("bmu").value = (kgs / ms).toFixed(2);
    }
}
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
};

$('#vitals-cancel').click(function(){
    clearFormInputs('vitals-form');
  });

$('#vitals-form').submit(function(e) {
    e.preventDefault()
    start_load()
    $.ajax({
        url: 'ajax.php?action=save_vitals',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success: function(resp) {
          if (resp == 1) {
            alert_toast('Data successfully saved', "success");
            clearFormInputs('vitals-form');
            getVitals();
            setTimeout(function() {
              $('#vitalsModal').modal('hide');
              $("#preloader2").hide();
            }, 2000)
          }
        }
    })
})
</script>
