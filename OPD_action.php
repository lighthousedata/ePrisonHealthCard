<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());
?>


 <?php 
$notice="";
if (isset($_POST['type_test_button'])) {
if ($conn->query("INSERT INTO lab_test_type (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$_POST[name]')")) {
  $notice ="<div class='alert alert-success'>New Test Type Added Successfully</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is: Something Went Wrong!</div>";
}
}

 ?>

 <?php 
$notice="";
if (isset($_POST['diagnosis'])) {
if ($conn->query("INSERT INTO diagnosis (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$_POST[name]')")) {
  $notice ="<div class='alert alert-success'>Diagnosis Added Successfully</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is: Something Went Wrong!</div>";
}
}

 ?>

<?php 
$notice="";
if (isset($_POST['save'])) {

  
  //Getting post values
  //$prescription=$_POST["medicine_name"];
  $diagnosed_of=$_POST["diagnosed_of"];
  //$dosage_form=$_POST["dosage_form"];
  $quantity=$_POST["quantity"];
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
        }
  }

  if($_POST["test_type"] !=''){
    $notice="";
    $conn->query("INSERT INTO book_lab_test (regions_id, stations_id,prisoners_no, test_type, remarks, service_date) 
    values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$_POST[test_type]','$_POST[test_remarks]','$_POST[service_date]')");
  }

  if($_POST["hospital"] != ''){
    $conn->query("INSERT INTO hospitalisation_and_transfers (regions_id, stations_id,prisoners_no, referral_date, hospital, remarks) 
    values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[prisoners_no]','$_POST[service_date]','$_POST[hospital]','$_POST[refferal__remarks]')");

$notice ="<div class='alert alert-success'>Data Added Successfully</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error: Something Went Wrong!</div>";
}
}

 ?>


<?php echo $notice ?>

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
        <div class="col-sm-6">
            <div class="form-group">
          <label for="" class="control-label">Prisoner Number</label><hr>
          <input type="text" readonly class="form-control form-control-sm"  name="prisoners_no" value="<?php echo $_GET['pno']; ?>">
        </div>
        </div>
        
       <div class="col-sm-6">
          <div class="form-group">
           <label for="" class="control-label">Service Date</label><hr>
            <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>">
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
          <label for="" class="control-label">Diagnosed of: &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i></button></label>
<select class="form-control form-control-sm select2" name="diagnosed_of[]" required><option></option><?php 
                $prisoners = $conn->query("SELECT * FROM diagnosis ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?>
              </select>        </div>
      
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

<td><label for="" class="control-label">Duration(Days)</label><input type="number" class="form-control form-control-sm" name="duration[]" value="<?php echo isset($total_quantity) ? $total_quantity : '' ?>"></td>

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
    </div>
<hr>

</div>
<div id="text1" style="display:none">
 <p for="" class="control-label" style="text-align: left; font-weight: bold; font-weight: bold; font-size: 24px; letter-spacing: 8px;">Book LAB Test</p><hr>
  <div class="row">
 <div class="col-md-6">
  <div class="card card-outline card-secondary">
  <div class="card-body">
    <p style="font-weight:bold; color:#CD853F; text-align:center;">Type of Test &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i></button></p><hr>
<div class="form-group">
         <select class="form-control form-control-sm select2" name="test_type">
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
 </div>


 <div class="col-md-6">
  <div class="card card-outline card-secondary">
  <div class="card-body">
    <p style="font-weight:bold; color:#CD853F; text-align:center;">Remarks</p><hr>
<div class="form-group">
         <input type="text" class="form-control form-control-sm" name="test_remarks" value="<?php echo isset($test_remarks) ? $test_remarks : '' ?>" placeholder="Remarks">
        </div>
  </div>
  </div>
 </div>
</div>
    <hr>
  </div>


<div id="text2" style="display:none">
<p for="" class="control-label" style="text-align: left; font-weight: bold; font-weight: bold; font-size: 24px; letter-spacing: 8px;">Nearest Hospital</p>
  <hr>
  <div class="row">
  <div class="col-md-6">
  <div class="card card-outline card-secondary">
  <div class="card-body">
    <p style="font-weight:bold; color:#CD853F; text-align:center;">Hospital Name</p><hr>
<div class="form-group">
         <input type="text" class="form-control form-control-sm" name="hospital" value="<?php echo isset($hospital) ? $hospital : '' ?>" placeholder="Hospital Name">
        </div>
  </div>
  </div>
 </div>

    <div class="col-md-6">
  <div class="card card-outline card-secondary">
  <div class="card-body">
    <p style="font-weight:bold; color:#CD853F; text-align:center;">Remarks</p><hr>
<div class="form-group">
         <input type="text" class="form-control form-control-sm" name="refferal__remarks" value="<?php echo isset($refferal__remarks) ? $refferal__remarks : '' ?>" placeholder="Remarks">
        </div>
  </div>
  </div>
 </div>
    </div>
    <hr>
</div>

<div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
          
          <button type="submit" name="save" class="btn btn-flat  bg-gradient-primary mx-2">Save </button>
          <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
        </div>
      </div>
        </form>
      </div>
      
  </div>
</div>
<!-- 
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
</script> -->
<!-- 
<script>
function myFunction9() {
  var x = document.getElementsByClassName("anchors")[0].id;
  document.getElementById("demo").innerHTML = x;
}
</script> -->

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
        $('#dynamic_field').append('<tr id="row'+i+'"><td><label for="" class="control-label">Diagnosed of:</label><select class="form-control form-control-sm select2" name="diagnosed_of[]" required><option></option><?php 
                $prisoners = $conn->query("SELECT * FROM diagnosis ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?>
              </select></td><td><div class="form-group"><label for="" class="control-label">Prescription</label><select class="form-control form-control-sm select2" name="medicine_name[]" ><option></option><?php $prisoners = $conn->query("SELECT * FROM drugs WHERE stations_id = $stations_id ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):?><option value="<?php echo $row['id'] ?>" <?php echo isset($medicine_name) && $medicine_name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option><?php endwhile; ?></select></div></td><td><label for="" class="control-label">Duration(Days)</label><input type="number" class="form-control form-control-sm" name="duration[]" value="<?php echo isset($total_quantity) ? $total_quantity : '' ?>"></td><td><label for="" class="control-label">Quantity</label><input type="text" class="form-control form-control-sm" name="quantity[]" value="<?php echo isset($total_quantity) ? $total_quantity : '' ?>"></td><td><label for="" class="control-label">Available Quantity</label><p id="available_quantity"></p></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td> </tr>');
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
        <h4 class="modal-title">Add New Diagnosis</h4>
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
        <button type="submit" class="btn btn-primary" name="diagnosis">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>