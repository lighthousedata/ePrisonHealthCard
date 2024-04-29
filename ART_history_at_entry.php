<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>


<?php 
if (isset($_POST['save'])) {
   $regimen = $_POST['regimen'];
    $query=mysqli_query($conn,"SELECT * FROM new_regimen
         WHERE regimen = '$regimen'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("This Regimen is Already Taken!");
                    window.location = "index.php?page=ART_history_at_entry";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO new_regimen (stations_id, regions_id,regimen) values ('$_POST[stations_id]','$_POST[regions_id]','$regimen')")) {
  echo '<script type="text/javascript">
                alert("New Regimen Successfully Added!");
                </script>';
   }
}

 ?>

<script type="text/javascript" src="disablebuttonjquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $("input[name='HIV_status']").click(function() {
        if ($("#HIV_status_prev_pos").is(":checked")) {
            $("#on_ART_yes, #on_ART_no").removeAttr("disabled");
        } else {
            $("#on_ART_yes, #on_ART_no, #current_ART_ID, #init_date, #current_Regimen").attr("disabled", true);
            $('#current_ART_ID, #init_date, #current_Regimen').val('');
            $('#current_Regimen').text('');
            $('input[name="on_ART"]').prop('checked', false);
        }
    });
});

$(function() {
    $("input[name='on_ART']").click(function() {
        if ($("#on_ART_yes").is(":checked")) {
            $("#current_ART_ID, #init_date, #current_Regimen").removeAttr("disabled");
        } else {
            $("#current_ART_ID, #init_date, #current_Regimen").attr("disabled", "disabled");
        }
    });
});


function Clear() {
    clearRadioGroup("on_ART");
    // clearRadioGroup("Options2");
}

function clearRadioGroup(GroupName) {
    var ele = document.getElementsByName(GroupName);
    for (var i = 0; i < ele.length; i++)
        ele[i].checked = false;
}
</script>
<div class="col-lg-12">
  <div class="card card-outline card-secondary">
    <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color:#3c3838; text-align: center;">Demographics</h4>
                    <hr>
                </div>
                <div class="col-md-6">
                    <b>Prisoner Name</b>:
                </div>
                <div class="col-md-6" id="prisoner_name">
                </div>
                <div class="col-md-6">
                    <b>Address</b>:
                </div>
                <div class="col-md-6" id="address">
                </div>
                <div class="col-md-6">
                    <b>Next of Kin phone</b>:
                </div>
                <div class="col-md-6" id="next_of_kin">
                </div>
                <div class="col-md-6">
                    <b>Sex</b>:
                </div>
                <div class="col-md-6" id="sex">
                </div>
                <div class="col-md-6">
                    <b>Date of Birth</b>:
                </div>
                <div class="col-md-6" id="dob">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color:#3c3838; text-align: center;">Prison Entry Info</h4>
                    <hr>
                </div>
                <div class="col-md-6">
                    <b>Prisoner Number</b>:
                </div>
                <div class="col-md-6" id="prisoner_num">
                </div>
                <div class="col-md-6">
                    <b>Cell Number</b>:
                </div>
                <div class="col-md-6" id="cell_num">
                </div>
                <div class="col-md-6">
                    <b>Entry Date</b>:
                </div>
                <div class="col-md-6" id="entry_d">
                </div>
                <div class="col-md-6">
                    <b>Status</b>:
                </div>
                <div class="col-md-6" id="entry_s">
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 style="color:#3c3838; text-align: center;">Clinical History at Entry</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
    <form action="" id="manage-project">
<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>
        <input type="hidden" name="prisoners_no" id="prison_id" value="<?php echo isset($id) ? $id : '' ?>">
        <input type="hidden" name="id" id="id" >
        <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
        <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

        <div class="row">
            <label class="form-label col-md-2" for="hiv_status">HIV Status:</label>
            <div class="col-md-4"> 
              <input name="HIV_status" type="radio" id="HIV_status_never_tested" value="Never Tested" required>
                Never Tested 
              <input name="HIV_status" type="radio" id="HIV_status_prev_neg" value="Prev Negative" required>
                Prev Negative 
              <input name="HIV_status" type="radio" id="HIV_status_prev_pos" value="Prev Positive" required>
                Prev Positive 
            </div>
            <label class="form-label col-md-2" for="art">Is the inimate on ART?:</label>
            <div class="col-md-4"> 
              <input name="on_ART" type="radio" id="on_ART_yes" value="Yes" disabled="disabled" required>
                Yes 
              <input name="on_ART" type="radio" id="on_ART_no" disabled="disabled" value="No" required>
                No 
              <input type="button" value="x" onclick="Clear();" style="background-color:red; border-radius: 5px; padding-left: 5px; padding-right: 5px;">
                Clear 
            </div>
        </div>
        <br>
        <div class="form-row">
            <label class="form-label col-md-2" for="init_date">Date started ART:</label>
            <div class="col-md-4"> 
                <input type="date" class="form-control" id="init_date" name="ART_init_Date" disabled="disabled"> 
            </div> 
            <label class="form-label col-md-2" for="current_art_id">Current ART ID:</label>
            <div class="col-md-4">
                <input type="text" id="current_ART_ID" name="current_ART_ID" placeholder="Current ART ID" class="form-control" disabled="disabled" >
          </div>
        </div>
        <br>
        <div class="form-row">
            <label class="form-label col-md-2" for="current_art_id">Regimen: 
                <button  class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px; font-size:8px;">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
            </label>
            <div class="col-md-4">
                <select class="form-control select2" name="current_Regimen" disabled="disabled" id="current_Regimen" >
                </select>
            </div>
        </div>
        <hr>
        <div class="row col-md-12">
            <label class="form-label col-md-2" for="dm">DM:</label>
            <div class="col-md-2">
              <input name="DM" type="radio" id="dm_yes" <?php if (isset($DM) && $DM=="Yes") echo "checked";?> value="Yes" required> Yes
              <input name="DM" type="radio" id="dm_no" <?php if (isset($DM) && $DM=="No") echo "checked";?> value="No" required> No
            </div>
            <label class="form-label col-md-2" for="Hx_of_TB"> Hx of TB:</label>
            <div class="col-md-2">
              <input name="Hx_of_TB" type="radio" id="Hx_of_TB_yes" <?php if (isset($Hx_of_TB) && $Hx_of_TB=="Yes") echo "checked";?> value="Yes" required> Yes
              <input name="Hx_of_TB" type="radio" id="Hx_of_TB_no" <?php if (isset($Hx_of_TB) && $Hx_of_TB=="No") echo "checked";?> value="No" required> No
            </div>
            <label class="form-label col-md-2" for="Hx_of_STI">Hx of STI(past 3 m):</label>
            <div class="col-md-2">
              <input name="Hx_of_STI" type="radio" id="Hx_of_STI" <?php if (isset($Hx_of_STI) && $Hx_of_STI=="Yes") echo "checked";?> value="Yes" required> Yes
              <input name="Hx_of_STI" type="radio" id="Hx_of_STI1" <?php if (isset($Hx_of_STI) && $Hx_of_STI=="No") echo "checked";?> value="No" required> No
            </div>
        </div>
        <hr>
        <div class="form-row">
            <label class="form-label col-md-2" for="comment">Comment</label>
            <div class="col-md-4">
                <textarea name="comment" id="comment" class="form-control" row="3">
                </textarea>
          </div>
        </div>
      </form>
    </div>
</div>
</div>
    <div class="card-footer border-top border-secondary">
      <div class="d-flex w-100 justify-content-center align-items-center">
        <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project">Save </button>
        <button class="btn btn-flat bg-gradient-secondary mx-2" type="button"
          onclick="location.href='index.php?page=home'">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
$('#manage-project').submit(function(e) {
    var formData = new FormData($(this)[0]);
    var pid = "";
    for (var pair of formData.entries()) {
        if (pair[0] === "prisoners_no"){
            pid = pair[1];
            break;
        }
    }
    e.preventDefault();
	start_load();
    $.ajax({
	  url:'ajax.php?action=save_ART_history_at_entry',
	  data: new FormData($(this)[0]),
      cache: false,
	  contentType: false,
	  processData: false,
	  method: 'POST',
	  type: 'POST',
	  dataType: "json",
      success:function(resp){
		if (resp == 1) {
          alert_toast('Data successfully saved', "success");
          setTimeout(function() {
            location.href = 'index.php?page=dashboard&pid='+pid
          }, 2000)
        }
	  },
      error: function(xhr, status, error) {
        console.error("AJAX Error:", error);
      }
    });
})
</script>

<script>
  $(document).ready(function(){
    getPrisoner();
    loadRegimen();
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('id');

    if (id !== null){
        getClinicAtEntryObs(id);
    }
  });

  function getClinicAtEntryObs(id){
    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'art_at_entry', id:  id}, // Send data as an object
      dataType: "json",
      }).done(function(result) {
        $("#id").val(result[0].id);
        $('input[name="HIV_status"]').each(function() {
          if ($(this).val() === result[0].HIV_status) {
            $(this).prop('checked', true);
            }
        });
        if (result[0].HIV_status === "Prev Positive"){
          $('input[name="on_ART"]').each(function() {
            if ($(this).val() === result[0].on_ART) {
              $(this).prop('checked', true);
            }
          });
          if(result[0].on_ART == "Yes"){
            $("#current_ART_ID").removeAttr("disabled");
            $("#current_ART_ID").val(result[0].current_ART_ID);
            $("#init_date").val(result[0].ART_init_Date);
            $("#current_Regimen").removeAttr("disabled");
            $("#current_Regimen").val(result[0].current_Regimen);
          }
        }
        $('input[name="DM"]').each(function() {
            if ($(this).val() === result[0].DM) {
              $(this).prop('checked', true);
            }
          });
          $('input[name="Hx_of_TB"]').each(function() {
            if ($(this).val() === result[0].Hx_of_TB) {
              $(this).prop('checked', true);
            }
          });
          $('input[name="Hx_of_STI"]').each(function() {
            if ($(this).val() === result[0].Hx_of_STI) {
              $(this).prop('checked', true);
            }
          });
          $("#comment").text(result[0].comment);
      });
  }
    function getPrisoner() {
        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('pid');

        $.ajax({
            type: "POST",
            url: 'ajax.php?action=fetch',
            data: { get: 'prisoner', id:  id}, // Send data as an object
            dataType: "json",
        }).done(function(result) {
            $("#prisoner_name").text(result[0].fname+" "+result[0].lname+" ("+result[0].alias+")");
            $("#prisoner_num").text(result[0].prisoners_no);
            $("#sex").text(result[0].gender);
            $("#dob").text(result[0].dob);
            $("#next_of_kin").text(result[0].next_of_kin_contact);
            $("#cell_num").text(result[0].cell);
            $("#entry_s").text(result[0].status);
            $("#entry_d").text(result[0].entry_date);
            $("#resident_status").val(result[0].status);
            $("#prison_id").val(result[0].id);
        });
    }

function loadRegimen() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'regimen' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#current_Regimen").empty();

    // Add a placeholder option
    $("#current_Regimen").append($('<option>', {
        value: '',
        text: 'Select current regimen',
        selected: true,
        disabled: true // Disable the placeholder option
    }));
    $.each(result, function(index, item) {
      $("#current_Regimen").append($('<option>', {
        value: item.regimen,
        text: item.regimen
      }));
    });
  });
}

$(function() {
    $('[data-toggle="toggle"]').tooltip()
});
</script>



<div id="addIn" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
                <h4 class="modal-title">Add New Regimen</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div style="width: 77%;margin: auto;">


                        <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

                        <input type="hidden" name="regions_id" id="regions_id"
                            value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
                        <input type="hidden" name="stations_id" id="stations_id"
                            value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
                        <div class="form-group">
                            <label for="some" class="col-form-label" style="color:#CD853F;">Regimen</label>
                            <input type="text" name="regimen" class="form-control" id="some" required>
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