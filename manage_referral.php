<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM referral_department where id = ".$_GET['id'])->fetch_array();
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
			<div class="col-md-12">
                <div class="form-group">
                    <label for="" class="control-label">Results</label>
                   <select class="form-control form-control-sm select2" name="feedback" value="<?php echo isset($feedback) ? $feedback : '' ?>">
                <option selected="true" disabled="disabled">--Select Here--</option>
    <option <?php echo isset($feedback) && $feedback == '+ve' ? 'selected' : '' ?>>+ve</option>
    <option <?php echo isset($feedback) && $feedback == '-ve' ? 'selected' : '' ?>>-ve</option>
              </select>
                </div>
            </div>

				</div>
			</div>
		
	</form>
</div>

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
    		url:'ajax.php?action=save_referral',
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


<script>
	function foo () {
		var subject = $("#subject").val();
		var lead_id = $("#lead_id").val();
		var task_id = $("#task_id").val();
      $.ajax({
        url:"update_lead.php", //the page containing php script
        type: "POST", //request type
        data: { subject: subject, lead_id: lead_id, task_id: task_id},
           success:function(result){
         if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.reload()
					},1500)
				}
       }
     });
 }
</script>
