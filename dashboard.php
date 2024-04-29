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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="">
  <div class="row">
  <div class="col-lg-12">
  <div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 style="color:#3c3838; text-align: center;">Prison Health Card</h3>
</div>
    <div class="card-body">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <h5 style="color:#3c3838; text-align: center;">Demographics</h5>
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
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h5 style="color:#3c3838; text-align: center;">Prison Entry Info</h5>
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
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <h5 style="color:#3c3838; text-align: center;">Clinical outcomes</h5>
                    <hr>
                </div>
                <div class="col-md-6">
                    <b>Outcome</b>:
                </div>
                <div class="col-md-6" id="outcome">
                </div>
                <div class="col-md-6">
                    <b>Outcome Date</b>:
                </div>
                <div class="col-md-6" id="outcome_date">
                </div></div>
                <div class="row">
                <div class="col-md-12">
                <hr>
                    <h6 style="color:#3c3838; text-align: center;">HIV Status</h6>
                    <hr>
                </div>
                <div class="col-md-6">
                    <b>HIV+</b>:
                </div>
                <div class="col-md-6" id="new_hiv_pos"> N/A
                </div>
                <div class="col-md-6">
                    <b>ART Number</b>:
                </div>
                <div class="col-md-6" id="new_art_num"> N/A
                </div>
                <div class="col-md-6">
                    <b>Regimen</b>:
                </div>
                <div class="col-md-6" id="new_regimen"> N/A
                </div>
            </div>
        </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12 mb-6">
      <div class="card">
        <div class="card-header">
            Clinical History at Entry
            <button type="button" id="editHxBtn" class="btn btn-primary btn-sm float-end">
              <i class="fa fa-edit fa-fw"> </i>
            </button>
        </div>
        <input type="hidden" name="clinic_at_entry_id" id="clinic_at_entry_id" value="">
        <div class="card-body">
          <div class="form-row">
            <div class="col-md-3 mb2">
              <label for="hiv_status" class="col-md-5 col-form-label">HIV Status:</label>
              <span id="hiv_status">N/A</span>
            </div>
          </div>
          <div class="form-row" id="prev_pos_info">
            <div class="col-md-3 mb2">
              <label for="hiv_status" class="col-md-5 col-form-label">On ART:</label>
              <span id="on_ART"></span>
            </div>
            <div class="col-md-3 mb2">
                <label for="init_Date" class="col-md-4 col-form-label">Init. Date:</label>
                <span id="init_Date"></span>
            </div>
            <div class="col-md-3 mb2">
              <label for="curr_ART_ID" class="col-md-4 col-form-label">ART #:</label>
              <span id="curr_ART_ID"></span>
            </div>
            <div class="col-md-3 mb2">
              <label for="curr_Regimen" class="col-md-4 col-form-label">Regimen:</label>
              <span id="curr_Regimen"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-3 mb2">
                <label for="dm" class="col-md-5 col-form-label">DM:</label>
                <span id="dm">N/A</span>
            </div>
            <div class="col-md-3 mb2">
              <label for="hx_tb" class="col-md-4 col-form-label">Hx of TB:</label>
              <span id="hx_tb">N/A</span>
            </div>
            <div class="col-md-3 mb2">
              <label for="hx_sti" class="col-md-4 col-form-label">Hx of STI:</label>
              <span id="hx_sti">N/A</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card">
        <div class="card-header">
            Vitals
            <button type="button" class="btn btn-primary btn-sm float-end" style="align: left;" data-bs-toggle="modal" data-bs-target="#vitalsModal">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
        </div>
        <div class="card-body">
            <div id="vitalList">
              <p class="card-text">No vitals observations found!</p>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card">
        <div class="card-header">
          HIV Testing Service
          <button type="button" class="btn btn-primary btn-sm float-end" id="htsModalTrigger" data-bs-toggle="modal" data-bs-target="#htsModal">
            <i class="fa fa-plus fa-fw"> </i>
          </button>
        </div>
        <div class="card-body">
            <div id="htsList">
              <p class="card-text">No HTS service observations found!</p>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card">
      <div class="card-header">
            TB Service
            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#tbModal">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
        </div>
        <div class="card-body">
          <div id="tbList">
            <p class="card-text">No TB service observations found!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card">
        <div class="card-header">
            STI Service
            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#STIModal">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
        </div>
        <div class="card-body">
          <div id="stiList">
            <p class="card-text">No STI service observations found!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card">
      <div class="card-header">
            COVID Service
            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#covidModal">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
        </div>
        <div class="card-body">
          <div id="covidList">
            <p class="card-text">No COVID service observations found!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card">
        <div class="card-header">
            Clinical Referal
            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#referalModal">
              <i class="fa fa-plus fa-fw"> </i>
            </button>
        </div>
        <div class="card-body">
          <div id="referalList">
            <p class="card-text">No referal observations found!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="button" class="btn btn-primary" name="finish" id="finish">Finish</button>
  </div>
</div>

<!-- Vitals Modal -->
<div class="modal fade" id="vitalsModal" tabindex="-1" aria-labelledby="vitalsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/vitals.php';
    ?>
    </div>
  </div>
</div>

<!-- HTS Modal -->
<div class="modal fade" id="htsModal" tabindex="-1" aria-labelledby="htsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/hiv_testing_service.php';
    ?>
    </div>
  </div>
</div>

<!-- TB Modal -->
<div class="modal fade" id="tbModal" tabindex="-1" aria-labelledby="tbModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/tb_service.php';
    ?>
    </div>
  </div>
</div>
<!-- STI Modal -->
<div class="modal fade" id="STIModal" tabindex="-1" aria-labelledby="STIModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/sti_service.php';
    ?>
    </div>
  </div>
</div> 
<!-- COVID Modal -->
<div class="modal fade" id="covidModal" tabindex="-1" aria-labelledby="covidModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/covid_service.php';
    ?>
    </div>
  </div>
</div> 
<!-- Clinical Referal Modal -->
<div class="modal fade" id="referalModal" tabindex="-1" aria-labelledby="referalModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <?php
        include 'modals/clinical_referal_service.php';
    ?>
    </div>
  </div>
</div> 
    </div>
</div>


<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

<script language="JavaScript">

$(document).ready(function() {
  var urlParams = new URLSearchParams(window.location.search);
  var prisoner_id = urlParams.get('pid');
  getPrisoner();
  $("#prev_pos_info").hide();
  getARTatEntry();
  getVitals();
  getHTS();
  getTBObs();
  getSTIObs();
  getCOVIDObs();
  getReferalObs();
  // $("#htsModalTrigger").click(function(){
  //   console.log("Hello");
  // });
  $('#htsModal, #tbModal, #vitalsModal, #STIModal, #covidModal, #referalModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id');
    
    var modalID = $(this).attr('id');
    if(modalID == "htsModal"){
      $("#hts_prisoner_id").val(prisoner_id);
      console.log(id);
      loadHTSTestTypes();
      if(typeof id !== "undefined"){
        $.ajax({
          type: "POST",
          url: 'ajax.php?action=fetch',
          data: { get: 'hiv_testing', id: id},
          dataType: "json",
        }).done(function(result) {
          console.log(id);
          $("#hiv-id").val(id);
          $('#visit_date').val(result[0].visit_date);
          $('input[name="resident_status"]').each(function() {
            if ($(this).val() === result[0].resident_status) {
              $(this).prop('checked', true);
            }
          });
          $('input[name="eligible_for_test"]').each(function() {
            if ($(this).val() === result[0].eligible_for_test) {
              $(this).prop('checked', true);
            }
          });
          if(result[0].eligible_for_test === "Yes"){
            $("#hiv_test_neg, #hiv_test_pos, #hiv_test_inc, #hiv_test_ref, #hiv_test_unk, #hts-test-type").removeAttr("disabled");
            $('#hts-test-type').val(result[0].type_of_test);
            $('input[name="hiv_test"]').each(function() {
            if ($(this).val() === result[0].HIV_test) {
              $(this).prop('checked', true);
            }
          });
          }
          $('#appoitment_date').val(result[0].app_date);
          $('#hts-comment').text(result[0].comment);
        });
      }
    }else if(modalID == "tbModal"){
      $("#tb_prisoner_id").val(prisoner_id);
      loadTBTestTypes();
    }else if(modalID == "vitalsModal"){
      $("#vitals_prisoner_id").val(prisoner_id);
      $("#id").val(id);
      if(typeof id !== "undefined"){
        console.log(id)
        $.ajax({
          type: "POST",
          url: 'ajax.php?action=fetch',
          data: { get: 'vitals', id: id},
          dataType: "json",
        }).done(function(result) {
          $('#vitals_prisoner_id').val(id);
          $('#visit_date').val(result[0].visit_date);
          $('#weight').val(result[0].weight);
          $('#height').val(result[0].height);
          $('#temperature').val(result[0].temperature);
          $('#systolic').val(result[0].systolic);
          $('#diastolic').val(result[0].diastolic);
          $('#comment').val(result[0].comment);
          $('#bmi_muac').val(result[0].bmi_muac);
          $('input[name="resident_status"]').each(function() {
              if ($(this).val() === result[0].resident_status) {
                $(this).prop('checked', true);
              }
            });
        });
      }
    }else if(modalID == "STIModal"){
      loadSTITestTypes();
      $("#sti_prisoner_id").val(prisoner_id);
    }else if(modalID == "covidModal"){
      loadSTITestTypes();
      $("#covid_prisoner_id").val(prisoner_id);
    }else if(modalID == "referalModal"){
      loadFacilities();
      $("#referal_prisoner_id").val(prisoner_id);
    }
  });
  $('#htsModal, #tbModal, #vitalsModal, #STIModal, #covidModal, #referalModal').on('hide.bs.modal', function (event) {
    console.log("Hellow");
    clearFormInputs();
  });

  // Show confirmation modal when delete button is clicked
  $("#deleteButton").click(function() {
    console.log('Here')
    $('#deleteConfirmationModal').modal('show');
  });

  // Handle delete action when confirmed
  $('#confirmDeleteButton').click(function() {
      // Perform deletion logic here (e.g., send AJAX request to delete record)
      console.log('Record deleted!'); // Replace with actual delete logic
      $('#deleteConfirmationModal').modal('hide');
  });

$('#editHxBtn').click(function() {
  var id = $("#clinic_at_entry_id").val();
  var urlParams = new URLSearchParams(window.location.search);
  var pid = urlParams.get('pid'); 

  location.href = "?page=ART_history_at_entry&pid="+pid+"&id="+id;
});

  $('#finish').on('click', function() {
    window.history.back();
  });
});

function loadFacilities() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'facilities' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#hospital_name").empty();

    // Add a placeholder option
    $("#hospital_name").append($('<option>', {
        value: '',
        text: 'Select facility',
        selected: true,
        disabled: true // Disable the placeholder option
    }));
    $.each(result, function(index, item) {
      $("#hospital_name").append($('<option>', {
        value: item.name,
        text: item.name
      }));
    });
  });
}

function loadSTITestTypes() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'sti_test_types' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#sti_type_of_test").empty();

    // Add a placeholder option
    $("#sti_type_of_test").append($('<option>', {
        value: '',
        text: 'Select type of test',
        selected: true,
        disabled: true // Disable the placeholder option
    }));
    $.each(result, function(index, item) {
      $("#sti_type_of_test").append($('<option>', {
        value: item.name,
        text: item.name
      }));
    });
  });
}
function loadHTSTestTypes() {
  $.ajax({
    type: "POST",
    url: 'ajax.php?action=metadata',
    data: { get: 'hts_test_types' }, // Send data as an object
    dataType: "json",
  }).done(function(result) {
    $("#type_of_test").empty();

    // Add a placeholder option
    $("#type_of_test").append($('<option>', {
        value: '',
        text: 'Select type of test',
        selected: true,
        disabled: true // Disable the placeholder option
    }));
    $.each(result, function(index, item) {
      $("#hts-test-type").append($('<option>', {
        value: item.name,
        text: item.name
      }));
    });
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
        });
    }

    function getCurrHIVStatus() {
        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('pid');

        $.ajax({
            type: "POST",
            url: 'ajax.php?action=get_current_HIV_status',
            data: { get: 'prisoner', id:  id}, // Send data as an object
            dataType: "json",
        }).done(function(result) {
            $("#new_hiv_pos").text(result[0].fname+" "+result[0].lname+" ("+result[0].alias+")");
            $("#new_art_num").text(result[0].prisoners_no);
            $("#new_regimen").text(result[0].gender);
        });
    }

    function getARTatEntry() {
        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('pid');

        $.ajax({
            type: "POST",
            url: 'ajax.php?action=fetch',
            data: { get: 'art_at_entry', pid: id}, // Send data as an object
            dataType: "json",
        }).done(function(result) {
            console.log(result[0].id);
            $('#clinic_at_entry_id').val(result[0].id);
            $("#hiv_status").text(result[0].HIV_status);
            if (result[0].HIV_status === "Prev Positive"){
              $("#prev_pos_info").show();
              $("#new_hiv_pos").text(result[0].HIV_status);
              $("#new_art_num").text(result[0].current_ART_ID);
              $("#new_regimen").text(result[0].current_Regimen);
            }else{
              $("#prev_pos_info").hide();
            }
            $("#on_ART").text(result[0].on_ART);
            $("#curr_ART_ID").text(result[0].current_ART_ID);
            $("#curr_Regimen").text(result[0].current_Regimen);
            $("#dm").text(result[0].DM);
            $("#hx_tb").text(result[0].Hx_of_TB);
            $("#hx_sti").text(result[0].Hx_of_STI);
        });
    }

function getVitals(id) {
    var urlParams = new URLSearchParams(window.location.search);
    var pid = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'vitals', pid:  pid},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-' + obj.id + '" aria-expanded="false" aria-controls="collapse-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="collapse-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>Temperature:</strong> ' + obj.temperature + '</p>';
        listHtml += '<p><strong>Height:</strong> ' + obj.height + '</p>';
        listHtml += '<p><strong>Weight:</strong> ' + obj.weight + '</p>';
        listHtml += '<p><strong>BMI:</strong> ' + obj.bmi_muac + '</p>';
        listHtml += '<p><strong>BP:</strong> ' + obj.systolic + '/' + obj.diastolic +'</p>';
        listHtml += '</div>';
        listHtml += '<div class="card-footer">';
        listHtml += '<button class="btn btn-sm btn-danger delete-btn" id="deleteButton" data-id="' + obj.id + '"><i class="fas fa-trash"></i> Delete</button>';
        listHtml += '<button class="btn btn-sm btn-primary edit-btn float-right"  data-bs-toggle="modal" data-bs-target="#vitalsModal"';
        listHtml += 'data-id="' + obj.id + '"><i class="fas fa-edit"></i> Edit</button>';
        listHtml += '</div>'
        listHtml += '</div>';
    });

    $('#vitalList').html(listHtml);
    });
}
function getHTS() {
    var urlParams = new URLSearchParams(window.location.search);
    var pid = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'hiv_testing', pid:  pid},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#hts-' + obj.id + '" aria-expanded="false" aria-controls="hts-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="hts-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>Eligible for test:</strong> ' + obj.eligible_for_test + '</p>';
        listHtml += '<p><strong>Type of Test:</strong> ' + obj.type_of_test + '</p>';
        listHtml += '<p><strong>HIV Test:</strong> ' + obj.HIV_test + '</p>';
        listHtml += '<p><strong>Appointment Date:</strong> ' + obj.app_date + '</p>';
        listHtml += '<p><strong>Comment:</strong> ' + obj.comment +'</p>';
        listHtml += '</div>';
        listHtml += '<div class="card-footer">';
        listHtml += '<button class="btn btn-sm btn-danger delete-btn" data-id="' + obj.id + '"><i class="fas fa-trash"></i> Delete</button>';
        listHtml += '<button class="btn btn-sm btn-primary edit-btn float-right"  data-bs-toggle="modal" data-bs-target="#htsModal"';
        listHtml += 'data-id="' + obj.id + '"><i class="fas fa-edit"></i> Edit</button>';
        listHtml += '</div>'
        listHtml += '</div>';
    });

    $('#htsList').html(listHtml);
    });
}
function getSTIObs() {
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'sti_service', id:  id},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#sti-' + obj.id + '" aria-expanded="false" aria-controls="sti-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="sti-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>STI Screening:</strong> ' + obj.sti_screening + '</p>';
        listHtml += '<p><strong>STI Test:</strong> ' + obj.sti_test + '</p>';
        listHtml += '<p><strong>Type of Test:</strong> ' + obj.type_of_test + '</p>';
        listHtml += '<p><strong>Appointment Date:</strong> ' + obj.app_date + '</p>';
        listHtml += '<p><strong>Comment:</strong> ' + obj.comment +'</p>';
        listHtml += '</div>';
        listHtml += '</div>';
    });

    $('#stiList').html(listHtml);
    });
}

function getCOVIDObs() {
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'covid_service', id:  id},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#covid-' + obj.id + '" aria-expanded="false" aria-controls="covid-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="covid-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>COVID19 Screening:</strong> ' + obj.covid19_screening + '</p>';
        listHtml += '<p><strong>COVID19 Test:</strong> ' + obj.covid19_test + '</p>';
        listHtml += '<p><strong>Type of Test:</strong> ' + obj.type_of_test + '</p>';
        listHtml += '<p><strong>Appointment Date:</strong> ' + obj.app_date + '</p>';
        listHtml += '<p><strong>Comment:</strong> ' + obj.comment +'</p>';
        listHtml += '</div>';
        listHtml += '</div>';
    });

    $('#covidList').html(listHtml);
    });
}

function getReferalObs() {
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'clinic_referal', id:  id},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#referal-' + obj.id + '" aria-expanded="false" aria-controls="referal-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="referal-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>Clinic Referal:</strong> ' + obj.clinical_referral + '</p>';
        listHtml += '<p><strong>Referred facility:</strong> ' + obj.hospital_name + '</p>';
        listHtml += '<p><strong>Outcome:</strong> ' + obj.outcome + '</p>';
        listHtml += '<p><strong>Outcome Date:</strong> ' + obj.outcome_date + '</p>';
        listHtml += '<p><strong>Comment:</strong> ' + obj.comment +'</p>';
        listHtml += '</div>';
        listHtml += '</div>';

        if (index === dataArray.length - 1) {
          $("#outcome").text(obj.outcome);
          $("#outcome_date").text(obj.outcome_date);
        }
    });

    $('#referalList').html(listHtml);
    });
}

function getTBObs() {
    var urlParams = new URLSearchParams(window.location.search);
    var id = urlParams.get('pid');

    $.ajax({
      type: "POST",
      url: 'ajax.php?action=fetch',
      data: { get: 'tb_service', id:  id},
      dataType: "json",
    }).done(function(result) {
      var dataArray = result;
      var listHtml = '';
      $.each(dataArray, function(index, obj) {
        listHtml += '<button class="btn btn-block btn-link collapsed" type="button" data-toggle="collapse" data-target="#tb-' + obj.id + '" aria-expanded="false" aria-controls="tb-' + obj.id + '">';
        listHtml += obj.visit_date;
        listHtml += '</button><br>';
        listHtml += '<div class="collapse" id="tb-' + obj.id + '">';
        listHtml += '<div class="card card-body">';
        listHtml += '<p><strong>TB Screening:</strong> ' + obj.tb_screening + '</p>';
        listHtml += '<p><strong>Test Criteria:</strong> ' + obj.test_criteria + '</p>';
        listHtml += '<p><strong>HIV Test:</strong> ' + obj.tb_test + '</p>';
        listHtml += '<p><strong>Type of Test:</strong> ' + obj.type_of_test + '</p>';
        listHtml += '<p><strong>Appointment Date:</strong> ' + obj.app_date + '</p>';
        listHtml += '<p><strong>Comment:</strong> ' + obj.comment +'</p>';
        listHtml += '</div>';
        listHtml += '</div>';
    });

    $('#tbList').html(listHtml);
    });
}

function clearFormInputs() {
        $('Form :input').each(function() {
            let elementType = this.type;
            // Reset the value based on the element type
            switch (elementType) {
                case 'text':
                case 'date':
                case 'textarea':
                case 'email':
                case 'password':
                case 'hidden':
                    $(this).val('');
                    break;
                case 'radio':
                case 'checkbox':
                    this.checked = false;
                    break;
                case 'select-one':
                case 'select-multiple':
                    $(this).val('');
                    break;
                default:
                    break;
            }
        });
}

</script>

<script>
$(function() {
    $('[data-toggle="toggle"]').tooltip()
})
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
