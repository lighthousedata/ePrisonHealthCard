
<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-header">
			<div class="card-tools">
				<!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
			</div>
		</div>
		<div class="card-body">
			

<?php require "pharmacy/assets/function.php" ?>

  <?php require "pharmacy/assets/autoloader.php" ?>
  


  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "pharmacy/photo/".$_FILES["inPic"]["name"]);
    if ($conn->query("insert into categories (regions_id,stations_id,name,pic) value ('$_POST[regions_id]','$_POST[stations_id]','$_POST[name]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$conn->error."</div>";
  }

   ?>

  <div class="content2">
    <?php echo $notice; ?>
    <div>
      <span style="font-size: 16pt;color: #CD853F; float:left;">Categories </span>
      <b style="float: right;">
      <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i>Add New Category</button> 
      <a href="./index.php?page=manage_categories"><button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn"><i class="fa fa-cog"></i>Manage Categories</button></a>
      <a href="./index.php?page=all_drugs"><button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn"><i class="fa fa-cog"></i>Manage Drugs</button></a>
    </b>

    </div>
</div>
<hr>
<div class="card card-outline card-secondary">
   
    <div class="card-body">
  <?php 

      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 

    $array = $conn->query("SELECT * FROM categories WHERE stations_id = $stations_id AND regions_id = $regions_id");
    while ($row = $array->fetch_assoc()) 
    {
      $array2 = $conn->query("SELECT count(*) FROM drugs WHERE catId = '$row[id]' AND stations_id = $stations_id AND regions_id = $regions_id");
      $row2 = $array2->fetch_assoc();
  ?>
    <a href="./index.php?page=all_drugs&catId=<?php echo $row['id'] ?>" onmouseover="this.style.color='#aaaaaa'"
   onmouseout="this.style.backgroundColor='transparent';this.style.color='inherit'"><div class="box2 col-md-3" style="display:inline-table;">
     <div class="card card-outline card-primary">
    <div class="card-body"><img src="pharmacy/photo/<?php echo $row['pic'] ?>" style="width: 155px;height: 122px;" class='img-thumbnail'></div>
      <hr style="margin: 7px;">
      <span id="myspan" style="padding: 11px; float: left;"><strong style="font-size: 10pt">Name</strong><span id="myspan" class="pull-right" style="color:blue;margin-right: 11px; float: right;"><?php echo $row['name'] ?></span></span>
      <hr style="margin: 7px;">
      <span id="myspan" style="padding: 11px; float: left;"><strong style="font-size: 10pt">Available Qty</strong><span id="myspan" class="pull-right" style="color:blue;margin-right: 11px; float: right;"><?php echo $row2['count(*)']; ?></span></span>
    </div></div></a>
  <?php
    }
   ?>
  </div>
</div>
</div>


<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add New Category</h4>
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
            <label for="some" class="col-form-label" style="color:#CD853F;">Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="2" class="col-form-label" style="color:#CD853F;">Picture</label>
            <input type="file" name="inPic" class="form-control" id="2" required>
          </div>
          
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="safeIn">Save Category</button>
      </div>
    </form>
    </div>

  </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>
