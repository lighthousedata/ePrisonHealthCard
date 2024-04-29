
<?php 
include 'db_connect.php';
date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d', time());


if(isset($_GET['ART_id'])){
	$ART_id = $_GET['ART_id'];
	$pname = $_GET['pname'];
	
	$qry = $conn->query("SELECT * FROM art_service where id = ".$_GET['ART_id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>

<?php 
$notice="";
if (isset($_POST['save'])) {
	$ART_Number = $_POST['ART_Number'];
$conn->query("UPDATE art_service SET ART_Number = '$ART_Number', service_date = '$my_date'  WHERE id = $ART_id");
 echo '<script type="text/javascript">
                alert("Data Saved Successfully");
                window.location = "index.php?page=ART_service";
                </script>';
}
//else{
 // $notice ="<div class='alert alert-danger'>Error is:".$conn->error."</div>";
//}
 ?>
 
    <?php echo $notice; ?>


<div class="container-fluid">
	<form method="POST">


		<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id'];
      $action = "Has Dispensed Drugs at: "; 
?>
	<div class="col-lg-12">
			<div class="row">
				<div class="col-md-6">
		<label class="form-group control-label">Prisoner Name</label>
		<input type="text" class="form-control form-control-sm" value="<?php echo $pname; ?>" readonly>
	</div>
	<div class="col-md-6">
		<label class="form-group control-label">ART Number</label>
		<input type="text" class="form-control form-control-sm" name="ART_Number" value="<?php echo $ART_Number; ?>">
	</div>
				</div>
			</div>
	<br>
	<div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
        	
            <button type="submit" name="save" class="btn btn-primary">Save</button>
            <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=ART_service'">Cancel</button>
          </div>
        </div>	
	</form>
</div>
