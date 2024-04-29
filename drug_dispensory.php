
<?php 
include 'db_connect.php';
if(isset($_GET['mid'])){
	$mid = $_GET['mid'];
	$qty = $_GET['qty'];
	$pid = $_GET['pid'];
	
	$qry = $conn->query("SELECT * FROM drugs where id = ".$_GET['mid'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>

<?php 
$notice="";
if (isset($_POST['save'])) {
$conn->query("insert into drug_dispensory (regions_id, stations_id,drug_id,prescription_id,user_id,dispensed_quantity, action) values ('$_POST[regions_id]','$_POST[stations_id]','$_POST[mid]','$_POST[pid]','$_POST[user_id]','$_POST[qty]','$_POST[action]')"); 
$conn->query("UPDATE drugs SET quantity = (quantity-$qty) WHERE id = $mid");
$conn->query("UPDATE prescriptions SET status = 0 WHERE id = $pid");
 echo '<script type="text/javascript">
                alert("Drugs Successfully Dispensed!");
                window.location = "index.php?page=prescriptions";
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

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
 <input type="hidden" name="user_id" id="user_id" value="<?php echo isset($user_id) ? $user_id : '' ?>">
 <input type="hidden" name="mid" id="mid" value="<?php echo isset($mid) ? $mid : '' ?>">
 <input type="hidden" name="qty" id="qty" value="<?php echo isset($qty) ? $qty : '' ?>">
 <input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
 <input type="hidden" name="pid" id="pid" value="<?php echo $pid; ?>">

		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-6">
		<p style="background-color:yellow;">Prescription Name : <b><?php echo $name; ?></b></p><br>
	</div>
	<div class="col-md-6">
		<p style="background-color:yellow;">Amount to be Dispensed : <b><?php echo $qty; ?></b></p>
	</div>
				</div>
			</div>
	
	<div class="card-footer border-top border-secondary">
        <div class="d-flex w-100 justify-content-center align-items-center">
        	<?php if($quantity >= $qty): ?>
            <button type="submit" name="save" class="btn btn-primary">Confirm</button>
            <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
            <?php endif; ?>

            <?php if($quantity < $qty): ?>
            <div class='alert alert-danger'>Error: You Cannot Dispense More Than What We have In Stock!</div>
            <?php endif; ?>
          </div>
        </div>	
	</form>
</div>



<script>

	function Calculate(){
var	available_quantity = document.getElementById("available_quantity").value;
var	quantity_input = document.getElementById("quantity_input").value;
var	new_quantity = (parseInt(available_quantity) + parseInt(quantity_input));
document.getElementById("output1").value = (new_quantity);

	}
</script>

<script>
	$(document).ready(function(){
	$('.summernote').summernote({
        height: 200,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })
     $('.select2').select2({
	    placeholder:"Please select here",
	    width: "100%"
	  });
     })
    $('#manage-referral').submit(function(e){
    	e.preventDefault()
    	start_load()
    	$.ajax({
    		url:'ajax.php?action=save_my_drugs',
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
						location.reload()
					},1500)
				}
			}
    	})
    })
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
