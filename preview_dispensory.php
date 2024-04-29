
<?php include'db_connect.php' ?>
<div class="col-lg-12">
  <div class="card card-outline card-secondary">
    <div class="card-body">
      

<?php require "pharmacy/assets/function.php" ?>

  <?php require "pharmacy/assets/autoloader.php" ?>



  <div class="content2">
  	<div class="well well-sm" style="width: 77%;margin:auto;margin-top: 33px;">
      <div class="well well-sm center"><h3 style="text-align:center;"><?php echo $_SESSION['login_station_name']; ?></h3></div> 
    </div>
    <br>
    <div class="well well-sm" style="width: 77%;margin: auto;">
      <table class="table table-bordered table-striped">
        <tr>
          <th>Name of Purchaser</th>
          <td><?php echo $_POST['name'] ?></th>
          <th>Contact Number</th>
          <td><?php echo $_POST['contact'] ?></th>
        </tr>
        <tr>
          <th>Bill Generated At:</th>
          <td><?php echo date("Y-m-d h:i:sa"); ?></td>
          <th>Transaction made by</th>
          <td><?php echo $_SESSION['login_region_name']; ?></td>
        </tr>
        <tr>
          <th colspan="4" class="center"><h3>Prescription Details</h3></th>
        </tr>
          <tr>
        <th>#</th>
        <th>Medicine Name</th>
        <th>Per Unit Price</th>
        <th>Quantity</th>
      </tr>
        <?php
        $i=$total=0;
    foreach ($_SESSION['bill'] as $row) 
    {
      $i++;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>$row[name]</td>";
      echo "<td>MWK. $row[price]</td>";
      echo "<td>$row[qty]</td>";
      echo "</tr>";
      $total = $total + $row['price']*$row['qty'];
    }
  ?>
  <tr>
    <td colspan="3" style="text-align: right;">Gross Total</td><th><?php echo $total; ?></th>
  </tr>
  <tr>
    <td colspan="3" style="text-align: right;">Discournt</td><th style="border-bottom: 1px solid blue;"><?php echo $_POST['discount']; ?></th>
  </tr>
  <tr>
    <td colspan="3" style="text-align: right;border-right: 1px solid blue">Gross Total</td><th style="border: 1px solid blue;"><?php echo $total-$_POST['discount']; ?></th>
  </tr>
  <tr>
    <td class="center" colspan="4"><button class="btn btn-primary" onclick="window.print()">Print</button> <a href="./index.php?page=all_drugs"><button class="btn btn-success">Go Back</button></a></td>
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
      <div class="modal-body"> <form method="POST" action="billout.php">
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
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="safeIn">View Bill</button>
      </div>
    </form>
    </div>

  </div>
</div>

</div>
</div>
</div>
<?php 
$total = $total-$_POST['discount'];
    if (!$conn->query("insert into sold (regions_id,stations_id,name,contact,discount,amount,item,userId) values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[name]','$_POST[contact]','$_POST[discount]','$total','$i','$user_id')")) 
    {
      echo "Error is:".$conn->error;
    }
 if (isset($_POST['billInfo'])) 
  {
   
    unset($_SESSION['bill']);
    $_SESSION['bill'] = array();
  }
 ?>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>

 