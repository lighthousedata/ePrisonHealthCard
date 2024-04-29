
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
      
        <li><a href="./index.php?page=pharmacy" class="btn btn-default"><i class="fas fa-tachometer-alt" aria-hidden="true"></i>Pharmacy </a></li>
        <li class="btn btn-default active">Billing
</li>

    </ol>

    <?php echo $notice; ?>
    <div class="center">
      <span style="font-size: 16pt;color: #333333">Billing </span>
    </div>

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
    <table class="table table-hover table-striped table-bordered" style="width: 55%;margin: auto;">
    	<tr>
    		<th>#</th>
    		<th>Name</th>
    		<th>Per Unit Price</th>
        <th>Remove</th>
    		<th>Select Quantity</th>
    	</tr>
    <?php
    foreach ($_SESSION['bill'] as $row) 
    {
      $i++;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>$row[name]</td>";
      echo "<td>MWK. $row[price]</td>";
      echo "<td><a href='called.php?remove=$row[id]'><button class='btn btn-danger btn-xs'>Remove</button></a></td>";
      echo "<td> 
            <form method='POST'>
            <input type='hidden' value='$row[id]' name='id'>
            <input type='number' min='1' class='form-control input-sm pull-left' value ='$row[qty]' style='width:88px;' name='qty'>  <button type='submit' name='updateBill' style='margin-left:2px' class='btn btn-success btn-sm'>Update</button>
            </form>
            </td>";
      echo "</tr>";
      $total = $total + $row['price']*$row['qty'];
    }
  ?>
  <tr>
    <td colspan="2">Total Bill</td>
    <td colspan="2"><strong>MWK.<?php echo $total ?></strong></td>
    <td><button class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#billOut">View Bill</button></td>
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
        <h4 class="modal-title">Purchaser Information</h4>
      </div>
      <div class="modal-body"> <form method="POST" action="./index.php?page=billout">
        <div style="width: 77%;margin: auto;">
         
          <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">

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
        <button type="submit" class="btn btn-primary" name="billInfo">View Bill</button>
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

