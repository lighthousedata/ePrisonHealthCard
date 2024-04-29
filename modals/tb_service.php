<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>


<?php 
if (isset($_POST['save'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM tb_test_type
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                alert_toast("This Test Type is Already Taken!");
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO tb_test_type (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
        alert_toast("New Test Type Added Successfully!");
                </script>';
   }
}

 ?>
<style type="text/css">
    .table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}

.vericaltext{
    writing-mode: vertical-lr; 
transform: rotate(360deg);
}
</style>

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

  <div class="modal-header">
    <h5 class="modal-title" id="tbModalLabel">TB Service</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body row col-md-12">
    <form action="" id="tb-form">
      <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
      <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
      <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
      <input type="hidden" name="prisoners_no" id="tb_prisoner_id" value="<?php echo isset($prisoners_no) ? $prisoners_no : '' ?>">
      <div class="form-group row">
        <label for="visit_date" class="col-md-5 col-form-label">Visit Date</label>
        <div class="col-md-7">
          <input type="date" class="form-control" value="<?php echo isset($visit_date) ? date("Y-m-d",strtotime($visit_date)) : '' ?>" name="visit_date" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="resident_status" class="col-md-5 col-form-label">Resident Status</label>
        <div class="col-md-7">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resident_status" id="entry" <?php if (isset($resident_status) && $resident_status=="Entry") echo "checked";?> value="Entry" required>
            <label class="form-check-label" for="entry">Entry</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resident_status" id="stay" <?php if (isset($resident_status) && $resident_status=="Stay") echo "checked";?> value="Stay" required>
            <label class="form-check-label" for="stay">Stay</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resident_status" id="exit" <?php if (isset($resident_status) && $resident_status=="Exit") echo "checked";?> value="Exit" required>
            <label class="form-check-label" for="exit">Exit</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="eligible" class="col-md-5 col-form-label">TB Screening</label>
        <div class="col-md-7">
          <div class="form-check form-check-inline">
            <input class="form-check-input vericaltext" type="radio" name="tb_screening" id="tb_screening_not_pre" <?php if (isset($tb_screening) && $tb_screening=="Not Presumptive") echo "checked";?> value="Not Presumptive" required>
            <label class="form-check-label" for="tb_screening_not_pre">Not Presumptive</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tb_screening" id="tb_screening_pre" <?php if (isset($tb_screening) && $tb_screening=="Presumptive") echo "checked";?> value="Presumptive" required>
            <label class="form-check-label" for="tb_screening_pre">Presumptive</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tb_screening" id="tb_screening_nd" <?php if (isset($tb_screening) && $tb_screening=="Not Done") echo "checked";?> value="Not Done" required>
            <label class="form-check-label" for="tb_screening_nd">Not Done</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="test_criteria" class="col-md-5 col-form-label">Test Criteria</label>
        <div class="col-md-7">
          <div class="form-check form-check-inline">
            <input class="form-check-input vericaltext" type="radio" name="test_criteria" id="test_criteria_new" <?php if (isset($test_criteria) && $test_criteria=="New Test") echo "checked";?> value="New Test" required>
            <label class="form-check-label" for="test_criteria_new">New Test</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="test_criteria" id="test_criteria_retest" <?php if (isset($test_criteria) && $test_criteria=="Re-Test") echo "checked";?> value="Re-Test"  required>
            <label class="form-check-label" for="test_criteria_retest">Re-Test</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tb_test" class="col-md-5 col-form-label">TB Testing</label>
        <div class="col-md-7">
          <div class="form-check form-check-inline">
            <input class="form-check-input vericaltext" type="radio" name="tb_test" id="tb_test_neg" <?php if (isset($tb_test) && $tb_test=="Negative") echo "checked";?> value="Negative" required>
            <label class="form-check-label" for="tb_test_neg">Negative</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tb_test" id="tb_test_pos" <?php if (isset($tb_test) && $tb_test=="Positive") echo "checked";?> value="Positive" required>
            <label class="form-check-label" for="tb_test_pos">Positive</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tb_test" id="tb_test_unk" <?php if (isset($tb_test) && $tb_test=="Unknown") echo "checked";?> value="Unknown" required>
            <label class="form-check-label" for="tb_test_unk">Unknown</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="type_of_test" class="col-md-5 col-form-label">
          Type of test
          <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addTBTestType" style="margin-left: 2px; font-size:8px;">
            <i class="fa fa-plus fa-fw"> </i>
          </button>
        </label>
        <div class="col-md-7">
          <select class="form-control" name="type_of_test" id="tb_type_of_test" required>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="appoitment_date" class="col-md-5 col-form-label">Appointment date</label>
        <div class="col-md-7">
          <input type="date" name="app_date" id="appoitment_date" value="<?php echo isset($app_date) ? date("Y-m-d",strtotime($visit_date)) : '' ?>" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="comment" class="col-md-5 col-form-label">Comment</label>
        <div class="col-md-7">
          <textarea name="comment" class="form-control" id="comment" row="3" required>
            <?php echo isset($comment) ? $comment : '' ?>
          </textarea>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" form="tb-form">Save </button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
  </div>

  <div id="addTBTestType" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add TB Test Type</h4>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
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


<script type="text/javascript">
  $(function () {
    $("input[name='tb_screening']").click(function () {
      if ($("#tb_screening_nd").is(":checked")) {
        console.log("Hello");
        $("#test_criteria_new, #test_criteria_retest, #tb_test_neg, #tb_test_pos, #tb_test_unk, #tb_type_of_test").attr("disabled", "disabled");
      }else if ($("#tb_screening_pre, #tb_screening_not_pre").is(":checked")){
        $("#test_criteria_new, #test_criteria_retest, #tb_test_neg, #tb_test_pos, #tb_test_unk, #tb_type_of_test").removeAttr("disabled");
      }
    });
  });

  $('#tb-form').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
      url:'ajax.php?action=save_tuberculosis',
      data: new FormData($(this)[0]),
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST',
      success:function(resp){
        if(resp == 1){
          alert_toast('Data successfully saved',"success");
          getTBObs();
          setTimeout(function() {
            $('#tbModal').modal('hide');
            $("#preloader2").hide();
          },2000)
        }
      }
    })
  });

  function loadTBTestTypes() {
    $.ajax({
      type: "POST",
      url: 'ajax.php?action=metadata',
      data: { get: 'tb_test_types' }, // Send data as an object
      dataType: "json",
    }).done(function(result) {
      $("#tb_type_of_test").empty();

      // Add a placeholder option
      $("#tb_type_of_test").append($('<option>', {
          value: '',
          text: 'Select type of test',
          selected: true,
          disabled: true // Disable the placeholder option
      }));
      $.each(result, function(index, item) {
        $("#tb_type_of_test").append($('<option>', {
          value: item.name,
          text: item.name
        }));
      });
    });
  }
</script>


