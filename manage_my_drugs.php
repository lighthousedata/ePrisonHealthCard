<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM drugs where id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-referral">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		
		<div class="col-lg-12">
			<div class="row">
			<div class="col-md-4">
                <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Stock To Be Added</label>
            
            <input type="number" class="form-control"  min="0" step="1" oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)" id="quantity_input" required/>
          </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Available Stock</label>
            <input type="number" id="available_quantity" class="form-control" value="<?php echo $quantity;?>" oninput="Calculate();" readonly>
           
          </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">New Stock Will Be:</label>
            
            <input type="number" class="form-control" name="quantity" id="output1" readonly />
          </div>
            </div>

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


