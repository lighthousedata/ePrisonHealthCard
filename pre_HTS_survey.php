<?php if(!isset($conn)){ include 'db_connect.php'; } 
date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());

?>

<?php 
if (isset($_POST['not_tested'])) {
	$pid = $_POST['prisoners_no'];
  if($conn->query("INSERT INTO pre_hts_survey (regions_id, stations_id,prisoners_no, tested_for_hiv, service_date) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','No','$_POST[service_date]')")){
  echo '<script type="text/javascript">
                alert("Go for HIV Test!");
                window.location = "index.php?page=HIV_Testing_Services";
                </script>';
   }else{
   	     echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
}elseif (isset($_POST['not_diagnosed_with_hiv'])) {
	// code...
	//$pid = $_POST[prisoners_no];
	if($conn->query("INSERT INTO pre_hts_survey (regions_id, stations_id,prisoners_no, tested_for_hiv, diagnosed_with_hiv, service_date) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','Yes','No','$_POST[service_date]')")){
  echo '<script type="text/javascript">
                alert("Go for HIV Test!");
                window.location = "index.php?page=HIV_Testing_Services";
                </script>';
   }else{
   	     echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
}elseif (isset($_POST['documentation_not_available'])) {
	// code...
//$pid = $_POST[prisoners_no];
	if($conn->query("INSERT INTO pre_hts_survey (regions_id, stations_id,prisoners_no, tested_for_hiv, diagnosed_with_hiv, documentation_available, service_date) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','Yes','Yes', 'No', '$_POST[service_date]')")){
  echo '<script type="text/javascript">
                alert("Go for HIV Test!");
                window.location = "index.php?page=HIV_Testing_Services";
                </script>';
   }else{
   	     echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
 }

   elseif (isset($_POST['save'])) {
	// code...
   //	$pid = $_POST[prisoners_no];
    if (isset($_POST['on_ART'])) {
  $on_ART = "yes";
} else {
  $on_ART = "No";
}
  
	if($conn->query("INSERT INTO pre_hts_survey (regions_id, stations_id,prisoners_no, tested_for_hiv, diagnosed_with_hiv, documentation_available, on_ART, remarks, service_date) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','Yes','Yes', 'Yes', '$on_ART', '$_POST[remarks]', '$_POST[service_date]')")){

		$conn->query("INSERT INTO art_service(regions_id, stations_id,prisoners_no, ART_Number, service_date) VALUES ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$_POST[ART_Number]', '$_POST[service_date]')");

  echo '<script type="text/javascript">
                alert("Information Successfully Corrected and Saved, Now refer the Client to ART Service");
                window.location = "index.php?page=home";
                </script>';
   }else{
   	     echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
 }

 ?>
<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .Yes{ background: #5a3a34; }
    .No{ background: #5a3a34; }
    .with-hiv{ background: gray; }
    .not-with-hiv{ background: #5a3a34; }
    .blue{ background: #0000ff; }
    label{ margin-right: 0px; }
</style>
<script src="jss1/showing-other-div-using-radion-button.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>


<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form method="POST">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label">Prisoner Number</label>
					<select class="form-control form-control-sm select2" name="prisoners_no" required>
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['prisoners_no'] ?>" <?php echo isset($prisoners_no) && $prisoners_no == $row['prisoners_no'] ? "selected" : '' ?>><?php echo ucwords($row['pname']) ?></option>
              	<?php endwhile; ?>
              </select>
				</div>
			</div>


     <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Service Date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>">
            </div>
          </div>
		</div>
		<hr>
<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Tested For HIV and AIDs Before?</label>
  	<div>
        <label><input type="checkbox" id="myCheck" value="tested_hiv" name="tested_hiv[]" onclick="myFunction()">&nbsp;<b>Yes</b></label>
        <label><button type="submit" name="not_tested" class="btn btn-flat  bg-gradient-light mx-2"><b>No</b></button></label>
       <!--  <label><input type="radio" name="colorRadio" value="blue"> blue</label> -->
    </div>

        </div>
    </div>
    </div>


    <div id="text" style="display:none">
    	<div class="form-group">
					<label for="" class="control-label">Diagnosed with HIV?</label>
				</div>
  	<div>
         <label><input type="checkbox" id="myCheck1" value="diagnosed_with_hiv" name="diagnosed_with_hiv[]" onclick="myFunction1()">&nbsp;<b>Yes</b></label>
        <label><button type="submit" name="not_diagnosed_with_hiv" class="btn btn-flat  bg-gradient-light mx-2"><b>No</b></button></label>
    </div>
</div>

<div id="text1" style="display:none">
    	<div class="form-group">
					<label for="" class="control-label">Documentation Available?</label>
				</div>
  	<div>
         <label><input type="checkbox" id="myCheck2" value="diagnosed_with_hiv" name="documentation_available[]" onclick="myFunction2()">&nbsp;<b>Yes</b></label>
        <label><button type="submit" name="documentation_not_available" class="btn btn-flat  bg-gradient-light mx-2"><b>No</b></button></label>
    </div>
</div>


<div id="text2" style="display:none">
    	<div class="form-group">
        <label for="" class="control-label">ART Number Available?</label><br>
        <label><input type="checkbox" id="myCheck4" value="Yes" name="on_ART[]" onclick="myFunction4()">&nbsp;<b>Yes</b></label>
        <!--<label><input type="checkbox" id="myCheck4" value="No" name="on_ART[]">&nbsp;<b>No</b></label>-->
                    
                </div>


  <div id="text4" style="display:none">
      <div class="form-group">
          <label for="" class="control-label">ART Number</label>
                   <input type="text" class="form-control form-control-sm" name="ART_Number" placeholder="ART Number">
        </div>
  
</div>

  	<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Remarks</label>
					<textarea name="remarks" id="" cols="36" rows="10" class="summernote form-control" required>
						<?php echo isset($remarks) ? $remarks : '' ?>
					</textarea>
				</div>
			
			</div>
		</div>

		<div class="card-footer border-top border-secondary">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			
    			<button type="submit" name="save" class="btn btn-flat  bg-gradient-primary mx-2">Save </button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
    		</div>
    	</div>
</div>
        </form>
    	</div>
	</div>
</div>

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

<script>
function myFunction4() {
  var checkBox = document.getElementById("myCheck4");
  var text = document.getElementById("text4");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

<script>
function myFunction1() {
  var checkBox = document.getElementById("myCheck1");
  var text = document.getElementById("text1");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<script>
function myFunction2() {
  var checkBox = document.getElementById("myCheck2");
  var text = document.getElementById("text2");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

<script>
	$('#manage-project').submit(function(e){
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
					setTimeout(function(){
						location.href = 'index.php?page=covid_19_diagnosis'
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

