<?php include'db_connect.php' ?>
<div class="col-lg-12">
  <div class="card card-outline card-secondary">
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
  	<ol class="breadcrumb ">
      
        <li><a href="./index.php?page=pharmacy" class="btn btn-default" style="color:#CD853F;"><i class="fas fa-tachometer-alt" aria-hidden="true"></i>Pharmacy </a></li>
        <li class="active"><a class="btn btn-default" href="./index.php?page=manageCat" style="color:#CD853F;">Categories
  
</a></li>
<li class="active"><a class="btn btn-default" data-toggle="modal" data-target="#addIn" style="color:#CD853F;"><i class="fas fa-plus" aria-hidden="true"></i>New Category
</a></li>
    </ol>
    <?php echo $notice; ?>
  
  <?php 
  	$i=0;
    $array = $conn->query("select * from categories");
    ?>
    <br>
    <table class="table table-hover table-striped "  id="list">
    	<thead>
    		<th style="color:#CD853F;">#</th>
    		<th style="color:#CD853F;">Name</th>
    		<th style="color:#CD853F;">Available Quanitity</th>
    	<!--	<th style="color:#CD853F;">Action</th>-->
   </thead>

    <tbody>
    <?php
    while ($row = $array->fetch_assoc()) 
    {
    	$i++;
      $array2 = $conn->query("select count(*) as qty from drugs where catId = '$row[id]'");
      $row2 = $array2->fetch_assoc();
  ?>
    <tr>
    	<td><?php echo $i ?></td>
    	<td><?php echo $row['name']; ?></td>
    	<td><?php echo $row2['qty']; ?></td>
    <!--	<td><a href="deleteCategory.php?category=<?php echo $row['id'] ?>"><button class="btn btn-xs btn-danger">Delete</button></a></td>-->
    </tr>
    
  <?php
    }
     echo "</tbody>";
    echo "</table>";
   ?>
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


<script>
  $(document).ready(function(){
    $('#list').dataTable({
        dom: 'lBfrtip',
         //dom: 'QlBfrtip',
        "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
            ,
            'colvis'
        ]
    } );
  })
  
</script>


<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
  <script type="text/javascript" src="data/moment.min.js"></script>
 <script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
 <script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
  <script type="text/javascript" src="data/datetime-moment.js"></script>



