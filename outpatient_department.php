<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());
?>

<?php 
if (isset($_POST['save_diagnosis'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM diagnosis
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                echo '
                <script type = "text/javascript">
                    alert("This Diagnosis is Already Taken!");
                    window.location = "index.php?page=outpatient_department";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO diagnosis (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
                alert("New Diagnosis Added Successfully!");
                </script>';
   }
}

 ?>

<?php 
$medical_history="";
if (isset($_POST['medical_history'])) {
  $prisoners_no = $_POST['prisoners_no'];
$stockArray = $conn->query("SELECT * FROM medical_history WHERE prisoners_no = '$prisoners_no'");
if($stockArray){
  while ($row = $stockArray->fetch_assoc()) 
        { 
  $pno = $row['prisoners_no'];
  $one = $row['currently_ill'];
  $two = $row['fainted'];
  $three = $row['live_with_someone_have_deficiency_of_immune'];
  $four = $row['deficincy_of_immune'];
  $five = $row['pregnant_posibility'];
  $six = $row['currently_fever'];
  $seven = $row['anticoagulation_medications'];
  $eight = $row['thymus_disorder'];
  $nine = $row['blood_transfusion_or_Immune_globulin'];
  $ten = $row['surgical_procedure'];
  $eleven =  $row['allergy'];

  $medical_history ="
  <div id='dialog' title='Medical History'>
  <div class='alert1'>
 <div class='fixTableHead'>
  <table class='table table-bordered table-striped'>
  <thead>
    <tr>
    <th></th>
    <th></th>
    </tr>
  </thead>
  <tbody>
          <tr>
           <td>PRISONER NUMBER </td> <td> $pno</td>
           </tr>
            <tr>
            <td>Are you currently ill (fever, headache, fatigue, nausea, vomiting, or diarrhea)?</td> <td>  $one</td>
            </tr>
            <tr>
            <td>Have you ever fainted from having your blood drawn or from an injection? </td> <td>  $two</td>
            </tr>
            <tr>
            <td>Do you live (or work closely) with anyone who has a deficiency of the immune system? </td> <td> $three</td>
            </tr>
            <tr>
            <td>Do you have any deficiency of the immune system, or are you taking steroids, Yes No chemotherapy?</td> <td>  $four</td>
            </tr>
            <tr>
            <td>Is there a possibility you may be pregnant?</td> <td>  $five</td>
            </tr>
            <tr>
            <td>Do you currently have a fever over 101 degrees orally or an acute illness?</td> <td>  $six</td>
            </tr>
            <tr>
            <td>Are you on any anticoagulation medications or blood thinners? </td> <td> $seven</td>
            </tr>
            <tr>
            <td>Do you have a thymus disorder (thymomas, myasthenia gravis, thymectomy)? </td> <td>  $eight</td>
            </tr>
            <tr>
            <td>Have you had a blood transfusion or Immune globulin in the past 6 months?</td> <td>  $nine</td>
            </tr>
            <tr>
            <td>Have you had any surgical procedure in the past 6 months? </td> <td>  $ten</td>
            </tr>
            <tr>
            <td>Do you have an allergy to egg, chicken protein, or gelatin?</td> <td>  $eleven</td>
          </tr>  
          </tbody>
    </table>
   </div>
  </div>
  </div>";

}}
else{
  echo '<script type="text/javascript">
                alert("Sorry! Data Not Available...");
                
                </script>';
}}

 ?>

<?php 
$previous_visits="";
if (isset($_POST['previous_visits'])) {
  $prisoners_no = $_POST['prisoners_no'];
$stockArray = $conn->query("SELECT patient_narration, diagnosis_action, service_date AS opd_date FROM outpatient_department
WHERE service_date IN (SELECT max(service_date) FROM outpatient_department) AND prisoners_no = '$prisoners_no'");
if($stockArray){
  while ($row = $stockArray->fetch_assoc()) 
        { 
  $patient_narration = $row['patient_narration'];
  $diagnosis_action = $row['diagnosis_action'];
    $opd_date = $row['opd_date'];
  }
}

$stockArray1 = $conn->query("SELECT test_type, results, service_date AS lab_date FROM lab_tests
WHERE service_date IN (SELECT max(service_date) FROM lab_tests) AND prisoners_no = '$prisoners_no'");
if($stockArray1){
  while ($row1 = $stockArray1->fetch_assoc()) 
        { 
  $test_type = $row1['test_type'];
  $results = $row1['results'];
  $lab_date = $row1['lab_date'];
  }}

$stockArray2 = $conn->query("SELECT  hospital, referral_date FROM hospitalisation_and_transfers
WHERE referral_date IN (SELECT max(referral_date) FROM hospitalisation_and_transfers) AND prisoners_no = '$prisoners_no'");
if($stockArray2){
  while ($row2 = $stockArray2->fetch_assoc()) 
        { 
  $hospital = $row2['hospital'];
  $referral_date = $row2['referral_date'];
  }}
  $previous_visits ="
  <div id='dialog1' title='Medical History'>
  <div class='alert1'>
 <div class='fixTableHead'>
  <table class='table table-bordered table-striped'>
  <thead>
    <tr>
    <th></th>
    <th></th>
    </tr>
  </thead>
  <tbody>
            <tr>
            <td colspan = '3' style ='font-weight:bold; background-color:black; text-align:center;'>OPD Visit</td>
            </tr>
            <tr style ='font-weight:bold; background-color:black;'>
            <td>Patient Narration</td> <td> Diagnosis Action</td> <td>Date</td>
            </tr>
            
            <tr>
            <td colspan = '3' style ='font-weight:bold; background-color:black; text-align:center;'>LAB Visit</td>
            </tr>
            <tr style ='font-weight:bold; background-color:black;'>
            <td>Test Type</td> <td>Results</td> <td>Date</td>
            </tr>
            
             <tr>
            <td colspan = '3' style ='font-weight:bold; background-color:black; text-align:center;'>REFFERAL</td>
            </tr>
            <tr style ='font-weight:bold; background-color:black;'>
            <td>Hospital</td> <td></td> <td>Date</td>
            </tr>
            
          </tbody>
    </table>
   </div>
  </div>
  </div>";

}


 ?>


 <?php 
if (isset($_POST['type_test_button'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM lab_test_type
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                echo '
                <script type = "text/javascript">
                    alert("This Type of test is Already Taken!");
                    window.location = "index.php?page=outpatient_department";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO lab_test_type (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
                alert("New Test type Added Successfully!");
                </script>';
   }
}

 ?>


<?php 
$notice="";
if (isset($_POST['save'])) {

	$diagnosed_of=$_POST["diagnosed_of"];
	$quantity=$_POST["quantity"];
  $duration=$_POST["duration"];
	$medicine_name=$_POST["medicine_name"];

	if($_POST["medicine_name"] != ''){
		 //Count number od prescription array object
	$count = count($_POST["medicine_name"]);

	   if($count > 0){
          for($i=0; $i<$count; $i++){
             if(trim($_POST["diagnosed_of"][$i] != '') && trim($_POST['medicine_name'][$i] != '') && trim($_POST['quantity'][$i] != '') && trim($_POST['duration'][$i] != '')){
                $conn->query("INSERT INTO prescriptions (regions_id, stations_id,prisoners_no, diagnosed_of, medicine_name, duration, quantity, service_date) 
                values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$diagnosed_of[$i]','$medicine_name[$i]','$duration[$i]','$quantity[$i]','$_POST[service_date]')");

                
              }
              
          }
       echo '<script type="text/javascript">
                alert("Prescription Added Successfully!");
                </script>';
                 }
   }else{
         echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
}

	
if(isset($_POST['save_lab'])){
    $test_type=$_POST["test_type"];
  $test_remarks=$_POST["test_remarks"];

  $count1 = count($_POST["test_type"]);

  if($count1 > 0){
          for($i=0; $i<$count1; $i++){
             if(trim($_POST["test_type"][$i] != '') && trim($_POST['test_remarks'][$i] != '')){
    $conn->query("INSERT INTO book_lab_test (regions_id, stations_id,prisoners_no, test_type, remarks, service_date) 
    values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$test_type[$i]','$test_remarks[$i]','$_POST[service_date]')");

    
  }
     }
 echo '<script type="text/javascript">
                alert("LAB Test Booked Successfully!");
                </script>';  }
 }

 ?>
<link rel="stylesheet" href="css1/jquery-ui.css" />
  
<script src="css1/jquery-1.9.1.js"></script>
  <script src="css1/jquery-ui.js"></script>
 <!--  <link rel="stylesheet" href="/resources/demos/style.css" /> -->
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
  <script>
  $(function() {
    $( "#dialog1" ).dialog();
  });
  </script>
<style>
.alert1 {
  padding: 0px;
  background-color:grey;
  color: white;
}


.fixTableHead {
  overflow-y: auto;
  height: 500px;
  }
  .fixTableHead thead th {
  position: sticky;
  top: 0;
  }
  table {
  border-collapse: collapse;    
  width: 100%;

  }
  th,
  td {
  padding: 2px 4px;
  border: 2px solid #529432;
  }
  th {
  background: #ABDD93;
  }
</style>

<?php echo $notice ?>
<?php echo $medical_history ?>
<?php echo $previous_visits ?>

<script>
$( document ).click(function() {
  $( "#dialog" ).effect( "size", {
    to: { width: 200, height: 60 }
  }, 1000 );
});
</script>

<script>
$( document ).click(function() {
  $( "#dialog1" ).effect( "size", {
    to: { width: 200, height: 60 }
  }, 1000 );
});
</script>

<?php echo $notice; ?>
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
			<div class="col-md-12">
            <div class="card card-outline card-secondary">
	<div class="card-body">
		 <div class="row">
     <div class="col-md-12">
        <div class="form-group">
          <div id="display">
      <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
					<label for="" class="control-label">Prisoner Number</label><hr>
					<select class="form-control form-control-sm select2" name="prisoners_no" id="theSelect" required>
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
        
       <div class="col-sm-4">
       	  <div class="form-group">
           <label for="" class="control-label">Service Date</label><hr>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>">
          </div>
       </div>


        <div class="col-sm-4">
         <div class="card-footer border-top border-light">
          <p style="font-weight:bold; color:#CD853F; text-align:center;">History Overview</p><hr>
        <div class="d-flex w-100 justify-content-center align-items-center">
          
          <button type="submit" name="medical_history" class="btn btn-flat  bg-gradient-primary mx-2">medical History</button>
          
          <button type="submit" name="previous_visits" class="btn btn-flat  bg-gradient-primary mx-2">Previous Visits</button>
        </div>
        
      </div>
       </div>
      </div>
        </div>  
        </div>
      </div>
</div>
</div>
	</div>
          </div>


          </div>


		<hr>

	

		<div class="row">
			<div class="col-md-12">
            <div class="form-group">
             <label for="" class="control-label">Diagnosis Action(s)</label><br>
              <label for="myCheck" class="control-label">Prescription:</label> 
							<input type="checkbox" id="myCheck" value="Prescription" name="action[]" onclick="myFunction()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label for="myCheck" class="control-label">Book LAB Test:</label>
							<input type="checkbox" id="myCheck1" value="Book LAB Test" name="action[]" onclick="myFunction1()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
							<label for="myCheck" class="control-label">Referral:</label>
							<input type="checkbox" id="myCheck2" value="Referral" name="action[]" onclick="myFunction2()">

            </div>
          </div>
		</div>

<div class="row">
			<div class="col-md-12">
			<div class="form-group">
		
<div id="text" style="display:none">
<p for="" class="control-label" style="text-align: left; font-weight: bold; font-size: 24px; letter-spacing: 8px;">Prescription</p><hr>
    <table class="table table-bordered" id="dynamic_field">
	<div class="row">
		<tr>

      <td>
    
        <div class="form-group">
          <label for="" class="control-label">Diagnosed of: &nbsp;&nbsp; <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px; font-size:8px;"><i class="fa fa-plus fa-fw"> </i></button></label>
       <select class="form-control form-control-sm select2" name="diagnosed_of[]"><option></option><?php 
                $prisoners = $conn->query("SELECT * FROM diagnosis ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?>
              </select>
</div>
      
      </td>

			<td>
	
        <div class="form-group">
          <label for="" class="control-label">Prescription</label>
        <select class="form-control form-control-sm select2" name="medicine_name[]">
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT * FROM drugs WHERE stations_id = $stations_id ORDER BY name ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['id'] ?>" <?php echo isset($medicine_name) && $medicine_name == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
              </select>
        </div>
		
</td>

<td><label for="" class="control-label">Duration(Days)</label><input type="number" class="form-control form-control-sm" name="duration[]"></td>

<td>
		


       
         <div class="form-group">
          <label for="" class="control-label">Quantity</label>
        <input type="number" class="form-control form-control-sm" name="quantity[]" value="<?php echo isset($quantity) ? $quantity : '' ?>" min="0" step="1" oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"/>

      </div>
		
		</td>

<td>
		
        <div class="form-group">
          <label for="" class="control-label">Available Quantity</label>
        <p id="available_quantity"></p>
        </div>
      
      </td>

      <td>
      	<button type="button" name="add" id="add" class="btn btn-info">Add</button>
      </td>
    
    </tr>
    </table>

<div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
          
          <button type="submit" name="save" class="btn btn-flat  bg-gradient-primary mx-2">Save </button>
          <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
        </div>
      </div>
	  </div>
<hr>

</div>
<div id="text1" style="display:none">
 <p for="" class="control-label" style="text-align: left; font-weight: bold; font-weight: bold; font-size: 24px; letter-spacing: 8px;">Book LAB Test</p><hr>
	<div class="row">
    <table class="table table-bordered" id="dynamic_field1">

    <tr>

      <td>
 
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Type of Test &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn1" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i></button></p><hr>
<div class="form-group">

  

         <select class="form-control form-control-sm select2" name="test_type[]">
              	<option></option>
              	<?php 
              	$prisoners = $conn->query("SELECT * FROM lab_test_type ORDER BY name ASC ");
              	while($row= $prisoners->fetch_assoc()):
              	?>
              	<option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
              	<?php endwhile; ?>
              </select>
        </div>
	
  </div>
 </div>
</td>

<td>
 
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Remarks</p><hr>
<div class="form-group">
         <textarea name="test_remarks[]" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;" ></textarea>
        </div>
	</div>
  </div>

</td>

<td>
        <button type="button" name="add1" id="add1" class="btn btn-info">Add</button>
      </td>

      </tr>

    </table>
</div>
    <hr>

<div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
          
          <button type="submit" name="save_lab" class="btn btn-flat  bg-gradient-primary mx-2">Save </button>
          <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
        </div>
      </div>
  </div>


<div id="text2" style="display:none">
<p for="" class="control-label" style="text-align: left; font-weight: bold; font-weight: bold; font-size: 24px; letter-spacing: 8px;">Nearest Hospital</p>
	<hr>
	<div class="row">
	<div class="col-md-12">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=clinical_referral'">Click Here!</button><hr>
	</div>
  </div>
 </div>

		</div>
		<hr>
</div>

        </form>
    	</div>
    	
	</div>
</div>

<script>
$(function() {
    $('#theSelect').on('change' , function() {
        var $anchor = $('#link')
        var currVal = $(this).find('option:selected').val();
       // alert('Old href is : ' + $anchor.attr('href'));
        $anchor.attr('href' , './index.php?page=outpatient_department?id=' + currVal);
       // alert('New href is : ' + $anchor.attr('href'));
        
    })
});
</script>

<script>
function myFunction9() {
  var x = document.getElementsByClassName("anchors")[0].id;
  document.getElementById("demo").innerHTML = x;
}
</script>

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

</div>
			</div>
			</div>



<script type='text/javascript' src='assets/bootstrap.bundle.min.js'></script>
<!--SCRIPTS FOR SHOWING AND HIDING OR REMOVING INPUT TEXT BOX-->
<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><label for="" class="control-label">Diagnosed of:</label><select class="form-control form-control-sm select2" name="diagnosed_of[]" ><option></option><?php 
                $prisoners = $conn->query("SELECT * FROM diagnosis ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?>
              </select></td><td><div class="form-group"><label for="" class="control-label">Prescription</label><select class="form-control form-control-sm select2" name="medicine_name[]" ><option></option><?php $prisoners = $conn->query("SELECT * FROM drugs WHERE stations_id = $stations_id ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):?><option value="<?php echo $row['id'] ?>" <?php echo isset($medicine_name) && $medicine_name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?></select></div></td><td><label for="" class="control-label">Duration(Days)</label><input type="number" class="form-control form-control-sm" name="duration[]"></td><td><label for="" class="control-label">Quantity</label><input type="text" class="form-control form-control-sm" name="quantity[]" value="<?php echo isset($total_quantity) ? $total_quantity : '' ?>"></td><td><label for="" class="control-label">Available Quantity</label><p id="available_quantity"></p></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td> </tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
});
</script>


<script>
$(document).ready(function(){
    var i=1;
    $('#add1').click(function(){
        i++;
        $('#dynamic_field1').append('<tr id="row'+i+'"><td><p style="text-align:center" class="control-label">Type of Test of:</p><select class="form-control form-control-sm select2" name="test_type[]"><option></option><?php 
                $prisoners = $conn->query("SELECT * FROM lab_test_type ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?><option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?>
              </select></td><td><div class="form-group"><p style="text-align:center" class="control-label">Remarks</p><textarea name="test_remarks[]" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;" ></textarea></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td> </tr>');
    });
    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
});
</script>
                                              
<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Diagnosis Name</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Diagnosis Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save_diagnosis">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>




                                              
<div id="addIn1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add New Test</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Test Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="type_test_button">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>

