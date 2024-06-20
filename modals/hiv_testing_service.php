<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>


<?php 
if (isset($_POST['save'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM hiv_test_type
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                echo '
                <script type = "text/javascript">
                    alert("This Test Type is Already Taken!");
                    window.location = "index.php?page=HIV_testing_service";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO hiv_test_type (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
                alert("New Type Successfully Added!");
                </script>';
   }
}

 ?>
 <script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test").removeAttr("disabled");
                    $("#HIV_test").focus();
                } else {
                    $("#HIV_test").attr("disabled", "disabled");
                }
            });
        });
    </script>

<script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#hiv_test_neg, #hiv_test_pos, #hiv_test_inc, #hiv_test_ref, #hiv_test_unk, #hts-test-type").removeAttr("disabled");
                    $("#hiv_test_neg").focus();
                } else {
                    $("#hiv_test_neg, #hiv_test_pos, #hiv_test_inc, #hiv_test_ref, #hiv_test_unk, #hts-test-type").attr("disabled", "disabled");
                }
            });
        });
    </script>

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>
      <div class="modal-header text-center">
        <h5 class="modal-title" id="htsModalLabel">HIV Testing Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row col-md-12">
      <form action="" id="hts-form">
        <input type="hidden" name="id" id="hiv-id" value="">
        <input type="hidden" name="prisoners_no" id="hts_prisoner_id" value="">
        <div class="form-group row">
          <label for="visit_date" class="col-md-5 col-form-label">Visit Date</label>
          <div class="col-md-7">
              <input type="date" class="form-control" value="" name="visit_date" id="hts_visit_date" required>
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
          <label for="eligible" class="col-md-5 col-form-label">Eligible For Test</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="eligible_for_test" id="eligible_for_test" value="Yes" required>
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="eligible_for_test" id="eligible_for_test1" value="No" required>
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="hts-test-type" class="col-md-5 col-form-label">
            Type of test
            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addTestType" style="margin-left: 2px; font-size:8px;">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
          </label>
          <div class="col-md-7">
            <select class="form-control" name="type_of_test" id="hts-test-type" required>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="hiv_test" class="col-md-5 col-form-label">HIV Test</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="hiv_test" id="hiv_test_neg" value="Negative" required>
              <label class="form-check-label" for="hiv_test_neg">Negative</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hiv_test" id="hiv_test_pos" value="Positive" required>
              <label class="form-check-label" for="hiv_test_pos">Positive</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="hiv_test" id="hiv_test_inc" value="Inconclusive" required>
              <label class="form-check-label" for="hiv_test_inc">Inconclusive</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hiv_test" id="hiv_test_ref" value="Refused" required>
              <label class="form-check-label" for="hiv_test_ref">Refused</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hiv_test" id="hiv_test_unk" value="Unknown" required>
              <label class="form-check-label" for="hiv_test_unk">Unknown</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="appoitment_date" class="col-md-5 col-form-label">Appointment date</label>
          <div class="col-md-7">
          <input type="date" name="app_date" id="appoitment_date" value="" class="form-control" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="comment" class="col-md-5 col-form-label">Comment</label>
          <div class="col-md-7">
            <textarea name="comment" class="form-control" id="hts-comment" row="3">
            </textarea>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" form="hts-form">Save </button>
        <button type="button" class="btn btn-secondary" id="hts-cancel" data-bs-dismiss="modal">Cancel</button>
      </div>
<!-- Modal for adding HIV test Type -->
<div id="addTestType" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Test Type</h4>
      </div>
      <div class="modal-body"> <form method="POST" enctype="multipart/form-data">
        <div style="width: 77%;margin: auto;">
<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
           <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Test Type</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>
<script>
  $('#hts-form').submit(function(e){
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
          clearFormInputs('hts-form');
          getHTS();
          setTimeout(function() {
            $('#htsModal').modal('hide');
            $("#preloader2").hide();
          },2000)
        }
      }
    })
})
</script>