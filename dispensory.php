
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
        <li class="btn btn-default active" style="color:#CD853F;">Dispensory
</li>

    </ol>

    <?php echo $notice; ?>
   
  <?php 
  if (isset($_POST['updateBill'])) 
  {
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    foreach ($_SESSION['bill'] as $key => $value) 
    {
      if($_SESSION['bill'][$key]['id'] == $id) $_SESSION['bill'][$key]['qty'] = $qty;
    }
  }
  	$i=0;$total = 0;
    ?>
    <br>
    <table class="table table-hover table-striped table-bordered" style="width: 75%;margin: auto;">
    	<tr>
    		<th style="color:#CD853F;">#</th>
        <th style="color:#CD853F;">Code Number</th>
    		<th style="color:#CD853F;">Name</th>
    		<th style="color:#CD853F;">Description</th>
        <th style="color:#CD853F;">Remove</th>
    		<th style="color:#CD853F;">Select Quantity</th>
    	</tr>
    <?php
    foreach ($_SESSION['bill'] as $row) 
    {
      $i++;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>$row[code_number]</td>";
      echo "<td>$row[name]</td>";
      echo "<td>$row[description]</td>";
      
      echo "<td><a href='called.php?remove=$row[id]'><button class='btn btn-danger btn-xs'>Remove</button></a></td>";
      echo "<td> 
            <form method='POST'>
            <input type='hidden' value='$row[id]' name='id'>
            <input type='number' min='1' class='form-control input-sm pull-left' value ='$row[qty]' style='width:88px;' name='qty'>  <button type='submit' name='updateBill' style='margin-left:2px' class='btn btn-success btn-sm'>Update</button>
            </form>
            </td>";
      echo "</tr>";
     // $total = $total + $row['price']*$row['qty'];
    }
  ?>
  <tr>
   
    <td colspan="4"><strong><?php //echo $total ?></strong></td>
    <td><button class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#billOut">View Cat</button></td>
  </tr>
</table>
  </div>
</div>

<div id="billOut" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Dispensory Information</h4>
      </div>
      <div class="modal-body"> <form method="POST" action="./index.php?page=preview_dispensory">
        <div style="width: 77%;margin: auto;">
         
          <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
 <input type="hidden" name="user_id" id="user_id" value="<?php echo isset($user_id) ? $user_id : '' ?>">

          <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Contact</label>
            <input type="text" name="contact" class="form-control" id="some" required>
          </div>
           <div class="form-group">
            <label for="some" class="col-form-label">Discount</label>
            <input type="text" name="discount" value="0" min="1" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="billInfo">Preview Dispensory</button>
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

