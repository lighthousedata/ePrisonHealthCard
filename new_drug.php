<?php include'db_connect.php' ?>
<div class="col-lg-12">
  <div class="card card-outline card-secondary">
    <div class="card-body">
      

<?php require "pharmacy/assets/function.php" ?>

  <?php require "pharmacy/assets/autoloader.php" ?>

<?php 
$notice1="";
if (isset($_POST['save'])) {
if ($conn->query("INSERT INTO unit_list (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$_POST[name]')")) {
  $notice1 ="<div class='alert alert-success'>Unit Added To The List Successfully</div>";
}
else{
  $notice1 ="<div class='alert alert-danger'>Error is:".$conn->error."</div>";
}
}

 ?>


<?php 
$notice="";
if (isset($_POST['saveProduct'])) {
if ($conn->query("INSERT INTO drugs (user_id,regions_id, stations_id,catId,code_number,name, quantity, critical_amount,unit,description) VALUES ('$_POST[user_id]','$_POST[regions_id]','$_POST[stations_id]','$_POST[catId]','$_POST[code_number]','$_POST[name]','$_POST[quantity]' ,'$_POST[critical_amount]','$_POST[unit]','$_POST[discription]')")) {
  echo '<script type="text/javascript">
                alert("Drugs Added Successfully!");
                window.location = "index.php?page=all_drugs";
                </script>';
}
else{
  $notice ="<div class='alert alert-danger'>Error: Something Went Wrong!</div>";
}
}

 ?>
 <div class="content2">
    <ol class="breadcrumb ">
      
        <li><a href="./index.php?page=pharmacy" class="btn btn-default" style="color:#CD853F;"><i class="fas fa-tachometer-alt" aria-hidden="true"></i>Pharmacy </a></li>
        <li class="active"><a class="btn btn-default" href="./index.php?page=new_drug" style="color:#CD853F;">New Drug
</a></li>
 <li class="active"><a class="btn btn-default" href="./index.php?page=all_drugs" style="color:#CD853F;">View All Drugs
</a></li>

    </ol>

    <?php echo $notice ?>
    <?php echo $notice1 ?>
    <div class="well well-sm center">

      <h4>Add New Drug</h4><hr>
      <form method="POST">

        <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
 <input type="hidden" name="user_id" id="user_id" value="<?php echo isset($user_id) ? $user_id : '' ?>">

<div class="row">
  <div class="col-md-3">
          <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Select Category</label>
            <select class="form-control" required name="catId">
              <option selected disabled value="" style="color:#CD853F;">Please Select Category</option>
            <?php getAllCat(); ?>
              
            </select>
          </div>
        </div>


<div class="col-md-3">
          <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Code Number</label>
            <input type="text" name="code_number"  class="form-control" id="some" required>
          </div>
        </div>


<div class="col-md-3">
         <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Item Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
        </div>

        <div class="col-md-3">
         <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Quantity</label>
            
            <input type="number" class="form-control" name="quantity"  min="0" step="1" oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"  required/>
          </div>
        </div>
      </div>

<div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <p style="font-weight:bold; color:#CD853F; text-align:center;">Unit &nbsp;&nbsp; <button class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px; font-size:8px;"><i class="fa fa-plus fa-fw"> </i></button></p>
            
            <select class="form-control select2" name="unit" id="some" required>
                <option></option>
                <?php 
                $prisoners = $conn->query("SELECT * FROM unit_list WHERE stations_id = $stations_id ORDER BY name ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($name) && $name == $row['name'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                <?php endwhile; ?>
              </select>
          </div>
        </div>
          
         
          <div class="col-md-6">
           <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Critical Amount</label>
            
            <input type="number" class="form-control" name="critical_amount"  min="0" step="1" oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"  required/>
          </div>
        </div>
      </div>

      <div class="row">
 <div class="col-md-12">
  <div class="card card-outline card-warning">
  <div class="card-body">
    <div class="form-group">
          <label for="some" class="col-form-label" style="color:#CD853F;">Discription</label>
          
            <textarea name="discription"  cols="36" rows="10" class="summernote form-control" required>
          </textarea>
        </div>
  </div>
  </div>
 </div>
</div>

      
 <div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
          </div>
        </div>
      
        </form>
    </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>


<script language="JavaScript">

  // this prevents from typing non-number text, including "e".
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
      evt.preventDefault();
    } else {
      return true;
    }
  }
</script>




<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Unit</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Unit Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save Unit</button>
      </div>
    </form>
    </div>

  </div>
</div>