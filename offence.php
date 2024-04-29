<?php if(!isset($conn)){ include 'db_connect.php'; } 
?>

<script src="data/jquery_add_multiple.min.js"></script>
<div class="col-lg-12">
	<div class="card card-outline card-secondary">
		<div class="card-body">
			<form id="form1" name="form1" method="post">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
      $station_code = $_SESSION['login_station_code'];
?>


 <input type="hidden" name="regions_id" id="regions_id" class="form-control" value="<?php echo ($regions_id)?>">
 <input type="hidden" name="stations_id" id="stations_id" class="form-control" value="<?php echo ($stations_id)?>">

<div class="row">
	<div class="col-md-4">
				<div class="form-group">
          <label for="" class="control-label" style="font-size: 12px;">Prisoner Number</label>

          <?php
          $prisoners = $conn->query("SELECT *, id AS pid FROM prisoner_cases WHERE regions_id = $regions_id AND stations_id = $stations_id ORDER BY id DESC LIMIT 1");
              	while($row= $prisoners->fetch_assoc()):

          ?>
         <input type="text" class="form-control" name="prisoners_no" id="prisoners_no" value="<?php echo ($row['prisoners_no']); ?>" readonly required style="color: red; font-weight: bold;">
         
        </div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
          <label for="" class="control-label" style="font-size: 12px;">Case Number</label>
         <input type="text" class="form-control" name="case_no" id="case_no" value="<?php echo ($row['case_no']); ?>" readonly required style="color: red; font-weight: bold;">
         
        </div>
			</div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="" class="control-label" style="font-size: 12px;">Prisoner Case ID</label>
         <input type="text" class="form-control" name="pid" id="pid" value="<?php echo ($row['pid']); ?>" readonly required style="color: red; font-weight: bold;">
         <?php endwhile; ?>
        </div>
      </div>

</div>
		<div class="row">
			
          	<div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label" style="font-size: 12px;">Offence</label>
            <input type="text" name="name" class="form-control" id="name">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label" style="font-size: 12px;">Sentence in Month(s)</label>
             <input type="number" name="sentence" class="form-control" id="sentence" min="1"   oninput="validity.valid||(value='');" onpress="isNumber(event)">
            </div>
          </div>

           <div class="col-md-4">
            <div class="form-group">
              <label for="" class="control-label" style="font-size: 12px;">Sentence Type (1=Consecutive, 2=Concurrent)</label>
				<input type="number" name="type" class="form-control" id="type" min="1" max="2" oninput="validity.valid||(value='');" onpress="isNumber(event)">
            </div>
          </div>
		</div>
		<hr>
<input type="button" name="send" class="btn btn-light" value="ADD TO TABLE" id="butsend" style="color: green; font-weight: bold;">
<input type="button" name="save" class="btn btn-light" value="SUBMIT" id="butsave" style="color: blue; font-weight: bold;">
        
        </form>

<table id="table1" name="table1" class="table table-bordered">
<tbody>
<tr>
<th style="color: #CD853F;">ID</th>
<th style="color: #CD853F;">Region ID</th>
<th style="color: #CD853F;">Station ID</th>
<th style="color: #CD853F;">Prisoners #</th>
<th style="color: #CD853F;">Case #</th>
<th style="color: #CD853F;">Pr Case ID</th>
<th style="color: #CD853F;">Offence</th>
<th style="color: #CD853F;">Sentence in Month(s)</th>
<th style="color: #CD853F;">Sentence Type</th>
</tr>
</tbody>
</table>
</div>

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

<script>
$(document).ready(function() {
var id = 1; 
/*Assigning id and class for tr and td tags for separation.*/
$("#butsend").click(function() {
var newid = id++; 
$("#table1").append('<tr valign="top" id="'+newid+'">\n\
<td width="100px" >' + newid + '</td>\n\
<td width="100px" class="regions_id'+newid+'">' + $("#regions_id").val() + '</td>\n\
<td width="100px" class="stations_id'+newid+'">' + $("#stations_id").val() + '</td>\n\
<td width="100px" class="prisoners_no'+newid+'">' + $("#prisoners_no").val() + '</td>\n\
<td width="100px" class="case_no'+newid+'">' + $("#case_no").val() + '</td>\n\
<td width="100px" class="pid'+newid+'">' + $("#pid").val() + '</td>\n\
<td width="100px" class="name'+newid+'">' + $("#name").val() + '</td>\n\
<td width="100px" class="sentence'+newid+'">' + $("#sentence").val() + '</td>\n\
<td width="100px" class="type'+newid+'">' + $("#type").val() + '</td>\n\
<td width="100px"><a href="javascript:void(0);" class="remCF"><b class="btn btn-danger">X</b></a></td>\n\ </tr>');
});
$("#table1").on('click', '.remCF', function() {
$(this).parent().parent().remove();
});
/*crating new click event for save button*/
$("#butsave").click(function() {
var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
var regions_id = new Array(); 
var stations_id = new Array(); 
var prisoners_no = new Array(); 
var case_no = new Array(); 
var pid = new Array();
var name = new Array(); 
var sentence = new Array(); 
var type = new Array();
for ( var i = 1; i <= lastRowId; i++) {
	regions_id.push($("#"+i+" .regions_id"+i).html()); /*pushing all the names listed in the table*/
	stations_id.push($("#"+i+" .stations_id"+i).html()); /*pushing all the names listed in the table*/
	prisoners_no.push($("#"+i+" .prisoners_no"+i).html()); /*pushing all the names listed in the table*/
case_no.push($("#"+i+" .case_no"+i).html()); /*pushing all the names listed in the table*/
pid.push($("#"+i+" .pid"+i).html()); /*pushing all the names listed in the table*/
name.push($("#"+i+" .name"+i).html()); /*pushing all the names listed in the table*/
sentence.push($("#"+i+" .sentence"+i).html()); /*pushing all the names listed in the table*/
type.push($("#"+i+" .type"+i).html()); /*pushing all the emails listed in the table*/
}
var sendRegion = JSON.stringify(regions_id); 
var sendStation = JSON.stringify(stations_id);
var sendPrisonerNO = JSON.stringify(prisoners_no);
var sendCaseNO = JSON.stringify(case_no);
var sendId = JSON.stringify(pid);
var sendName = JSON.stringify(name);
var sendSentence = JSON.stringify(sentence);
var sendType = JSON.stringify(type);
$.ajax({
url: "save_offence.php",
type: "post",
data: {regions_id : sendRegion , stations_id : sendStation , prisoners_no : sendPrisonerNO , case_no : sendCaseNO , pid : sendId , name : sendName , sentence : sendSentence , type : sendType},
success : function(data){
alert(data); /* alerts the response from php.*/

          alert_toast('Data successfully saved',"success");
          setTimeout(function(){
            location.href = 'index.php?page=sentence'
          },2000)
        
}
});
});
});
</script>