<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>



<?php 
if (isset($_POST['save'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM hospital_name
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("This Hospital Name is Already Taken!");
                    window.location = "index.php?page=clinical_referral";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO hospital_name (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
                alert("New Hospital Name Added Successfully!");
                </script>';
   }
}

 ?>

<?php 

      $user_id = $_SESSION['login_id']; 
?>

<div class="modal-header">
        <h5 class="modal-title" id="referalModalLabel">Clinical Referal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row col-md-12">
      <form action="" id="referal-form">
        <input type="hidden" name="id" id="clinical-ref-id" value="">
        <input type="hidden" name="prisoners_no" id="referal_prisoner_id" value="">
        <div class="form-group row">
          <label for="visit_date" class="col-md-5 col-form-label">Visit Date</label>
          <div class="col-md-7">
              <input type="date" class="form-control" value="" name="visit_date" id="clinic_ref_visit_date" required>
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
          <label for="clinical_referral" class="col-md-5 col-form-label">Clinical Referal</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="clinical_referral" id="clinical_referral_yes" value="Yes" required>
              <label class="form-check-label" for="clinical_referral_yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="clinical_referral" id="clinical_referral_no" value="No"  required>
              <label class="form-check-label" for="clinical_referral_no">No</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="hospital_name" class="col-md-5 col-form-label">
            Facility
            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addFacility" style="margin-left: 2px; font-size:8px;">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
          </label>
          <div class="col-md-7">
            <select class="form-control form-control-sm select2insidemodal" name="hospital_name" id="hospital_name" required>
            </select>
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
        <button class="btn btn-primary" form="referal-form" onclick="foo()">Save </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
        </form>
        </div>
    </div>
</div>


<script type="text/javascript">
        
    </script>


        </div>
        
    </div>
</div>

<script>

  $(function () {
    $("input[name='clinical_referral']").click(function () {
      if ($("#clinical_referral_no").is(":checked")) {
        $("#hospital_name").attr("disabled", "disabled");
      }else if ($("#clinical_referral_yes").is(":checked")) {
        $("#hospital_name").removeAttr("disabled");
      }
    });
  });

    $('#referal-form').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_clinical_referral',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                if(resp == 1){
                    alert_toast('Data successfully saved',"success");
                    getReferalObs();
                    setTimeout(function(){
                      $('#referalModal').modal('hide');
                      $("#preloader2").hide();
                    },2000)
                }
            }
        })
    })


</script>

<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Hospital Name</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Hospital Name</label>
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