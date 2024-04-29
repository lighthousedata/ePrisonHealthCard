<?php if(!isset($conn)){ include 'db_connect.php'; } 
date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());

?>


 <?php 
 $notice = "";
if (isset($_POST['save'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM lab_test_type
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                echo '
                <script type = "text/javascript">
                    alert("This Type of test is Already Taken!");
                    window.location = "index.php?page=new_tests";
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
 if (isset($_POST['new_test'])) {
  // code...
    //$pid = $_POST[prisoners_no];
  if($conn->query("INSERT INTO lab_tests (prisoners_no, stations_id, regions_id,  screening, test_type, results, remarks, service_date) VALUES ('$_POST[prisoners_no]','$_POST[stations_id]','$_POST[regions_id]','$_POST[screening]','$_POST[test_type]', '$_POST[results]', '$_POST[remarks]', '$_POST[service_date]')")){


  echo '<script type="text/javascript">
                alert("Data Saved Successfully!");
                window.location = "index.php?page=new_tests";
                </script>';
   }else{
         echo '<script type="text/javascript">
                alert("Error: Something went wrong!");
                </script>';
   }
 }
 ?>


 <?php echo $notice ?>


<div class="col-lg-12">
	<div class="card card-outline card-warning">
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
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Prisoner Number And Name</p><hr>
		<label for="" style="font-size:12px;color:#CD853F;">Prisoner Name/Number</label>
		<div class="form-group">
					<select class="form-control form-control-sm select2" name="prisoners_no" id="get_history" required>
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
  </div>
 </div>

 <div class="col-md-6">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Service Date</p><hr>
		<label for="" style="font-size:12px; color:#CD853F;">Date</label>
		<div class="form-group">
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="service_date" value="<?php echo $my_date; ?>">
            </div>
	</div>
  </div>
 </div>
 </div>



<div class="row">
 <div class="col-md-4">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Type of Test &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i></button></p><hr>
<div class="form-group">
         <select class="form-control form-control-sm select2" name="test_type" required>
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


 <div class="col-md-4">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Screening</p><hr>
<div class="form-group">
         <select class="form-control form-control-sm select2" name="screening" value="<?php echo isset($screening) ? $screening : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($screening) && $screening == 'Presumptive' ? 'selected' : '' ?>>Presumptive</option>
    <option <?php echo isset($screening) && $screening == 'Not Presumptive' ? 'selected' : '' ?>>Not Presumptive</option>
    <option <?php echo isset($screening) && $screening == 'Not Done' ? 'selected' : '' ?>>Not Done</option>
    <option <?php echo isset($screening) && $screening == 'Not Applicable' ? 'selected' : '' ?>>Not Applicable</option>
    
              </select>
        </div>
	</div>
  </div>
 </div>



 <div class="col-md-4">
  <div class="card card-outline card-secondary">
	<div class="card-body">
		<p style="font-weight:bold; color:#CD853F; text-align:center;">Test Results</p><hr>
<div class="form-group">
       <select class="form-control form-control-sm select2" name="results" value="<?php echo isset($results) ? $results : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($results) && $results == 'Negative' ? 'selected' : '' ?>>Negative</option>
    <option <?php echo isset($results) && $results == 'Positive' ? 'selected' : '' ?>>Positive</option>
    <option <?php echo isset($results) && $results == 'Recovered' ? 'selected' : '' ?>>Inconclusive</option>
    
              </select>
        </div>
	</div>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
  <div class="card card-outline card-warning">
	<div class="card-body">
		<div class="form-group">
					<p style="font-size:14px;color:#CD853F; font-weight: bold; text-align:center;" class="control-label">General Remarks</p>
					<textarea name="remarks"class="form-control" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;"  required>
						<?php echo isset($remarks) ? $remarks : '' ?>
					</textarea>
          
				</div>
	</div>
  </div>
 </div>
</div>
<div class="d-flex w-100 justify-content-center align-items-center">
          
          <button type="submit" name="new_test" class="btn btn-flat  bg-gradient-primary mx-2"><b>Save</b></button>
          <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
        </div>
        </form>
        
    	</div>
    	
	</div>
</div>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_lab_tests',
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
						location.href = 'index.php?page=new_tests'
					},2000)
				}
			}
		})
	})


</script>

<script>
	// function foo1 () {
	// 	var regions_id = $("#regions_id").val();
	// 	var lead_name_id = $("#lead_name_id").val();
		
 //      $.ajax({
 //        url:"email.php", //the page containing php script
 //        type: "POST", //request type
 //        data: { regions_id: regions_id, lead_name_id: lead_name_id},
 //           success:function(result){
 //         if(resp == 1){
	// 				alert_toast('Data successfully saved',"success");
	// 				setTimeout(function(){
	// 					location.href = 'index.php?page=lead_list'
	// 				},2000)
	// 			}
 //       }
 //     });
 // }
</script>


<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add New Test Type</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Type Name</label>
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