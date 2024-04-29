
<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
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

<script type="text/javascript">
    $(document).ready(function() {
 
   // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
   $('.table-responsive-stack').find("th").each(function (i) {
      
      $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+ $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
   });

  
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
      
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });     
    
   // window is less than 768px   
   } else {    
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
 
   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
// document ready  
});

</script>

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

<div class="modal-header">
        <h5 class="modal-title" id="covidModalLabel">COVID19 Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row col-md-12">
      <form action="" id="covid-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
        <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
        <input type="hidden" name="prisoners_no" id="covid_prisoner_id" value="<?php echo isset($prisoners_no) ? $prisoners_no : '' ?>">

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
          <label for="sti_screening" class="col-md-5 col-form-label">COVID 19 Screening</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="covid19_screening" id="covid19_screening_not_pre" <?php if (isset($covid19_screening) && $covid19_screening=="Not Presumptive") echo "checked";?> value="Not Presumptive" required>
              <label class="form-check-label" for="covid19_screening_not_pre">Not Presumptive</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="covid19_screening" id="covid19_screening_pre" <?php if (isset($covid19_screening) && $covid19_screening=="Presumptive") echo "checked";?> value="Presumptive" required>
              <label class="form-check-label" for="scovid19_screening_pre">Presumptive</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="covid19_screening" id="covid19_screening_nd" <?php if (isset($covid19_screening) && $covid19_screening=="Not Done") echo "checked";?> value="Not Done" required>
              <label class="form-check-label" for="covid19_screening_nd">Not Done</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="type_of_test" class="col-md-5 col-form-label">Type of Test</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="type_of_test" id="type_of_test_new" <?php if (isset($type_of_test) && $type_of_test=="New Test") echo "checked";?> value="New Test" required>
              <label class="form-check-label" for="type_of_test_new">New Test</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type_of_test" id="type_of_test_retest" <?php if (isset($type_of_test) && $type_of_test=="Re-Test") echo "checked";?> value="Re-Test" required>
              <label class="form-check-label" for="type_of_test_retest">Re-Test</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="covid19_test" class="col-md-5 col-form-label">COVID19 Testing</label>
          <div class="col-md-7">
            <div class="form-check form-check-inline">
              <input class="form-check-input vericaltext" type="radio" name="covid19_test" id="covid19_test_neg" <?php if (isset($covid19_test) && $covid19_test=="Negative") echo "checked";?> value="Negative" required>
              <label class="form-check-label" for="covid19_test_neg">Negative</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="covid19_test" id="covid19_test_pos" <?php if (isset($covid19_test) && $covid19_test=="Positive") echo "checked";?> value="Positive" required>
              <label class="form-check-label" for="covid19_test_pos">Positive</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="covid19_test" id="covid19_test_unk" <?php if (isset($covid19_test) && $covid19_test=="Not Done") echo "checked";?> value="Not Done" required>
              <label class="form-check-label" for="covid19_test_unk">Unknown</label>
            </div>
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
        <button class="btn btn-primary" form="covid-form">Save </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
        </form>
        </div>
    </div>
</div>

<script>
  $('#covid-form').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
      url:'ajax.php?action=save_covid_19',
      data: new FormData($(this)[0]),
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST',
      success:function(resp){
        if(resp == 1){
          alert_toast('Data successfully saved',"success");
          getCOVIDObs();
          setTimeout(function() {
            $('#STIModal').modal('hide');
            $("#preloader2").hide();
          },2000)
        }
      }
    })
  });
</script>

