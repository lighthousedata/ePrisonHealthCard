<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>

<style type="text/css">
    .table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}

.vericaltext{
    writing-mode: vertical-lr; 
transform: rotate(180deg);
}
</style>

<script type="text/javascript">
    $(document).ready(function() {
 
   // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
   $('.table-responsive-stack').find("th").each(function (i) {
      
      $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+ $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
   });

  
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
      
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });     
    
   // window is less than 768px   
   } else {    
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
 
   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
// document ready  
});

</script>
<div class="col-lg-12">
    <div class="card card-outline card-secondary">
        <div class="card-body">
            <form action="" id="manage-project">

<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
 <input type="hidden" id="bmu" value="mybmu">

<div class="row">
 <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
      <thead>
         <tr>
            <th colspan="3" style="background-color:#5a3a34; color:white; text-align: center; font-weight: bold; font-size:18px;">Prison Health Card</th>
            
         </tr>
      </thead>
      <tbody>
         <tr>
            <td style="font-size: 12px;">Prison Name: <input type="text" name="prison_name" style="float: right;"></td>
            <td style="font-size: 12px;">Prisoner ID: <input type="text" name="prisoners_no" style="float: right;"></td>
            <td style="font-size: 12px;" colspan="2">Prisoner Cell #: <input type="text" name="cell" style="float: right;"></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;color:#CD853F;">Demographics Info</td>
            <td style="text-align: center;color:#CD853F;">Prison Entry Info</td>
            <td style="text-align: center;color:#CD853F;" colspan="2">Clinical History at Entry </td>
            <td></td>
         </tr>
         <tr>
            <td><p style="font-size: 12px;">Prisoner Name: <input type="text" name="prisoner_name" style="float: right;"></p>
            	<p style="font-size: 12px;">Home Village Address: <input type="text" name="prisoner_name" style="float: right;"></p>
            	<p style="font-size: 12px;">Next of Kin Phone #: <input type="text" name="prisoner_name" style="float: right;"></p>
            	<p style="font-size: 12px;">Sex: <input type="text" name="prisoner_name" style="float: right;"></p>
            	<p style="font-size: 12px;">Date of Birth: <input type="date" name="prisoner_name" style="float: right;"></p>
            </td>


            <td><p style="font-size: 12px;">Entry Date: <input type="date" name="prisoner_name" style="float: right;"></p>
                <p style="font-size: 12px;"><input name="status" type="radio" id="status1" <?php if (isset($status) && $status=="Convict") echo "checked";?> value="Convict" required> Convict</p>

                <p style="font-size: 12px;"><input name="status" type="radio" id="status2" <?php if (isset($status) && $status=="Remandee") echo "checked";?> value="Remande" required>Remanded</p>
				        </td>


            <td><p style="color:#CD853F;">HIV Status</p>
            	<p style="font-size: 12px;"><input name="HIV_status" type="radio" id="HIV_status1" <?php if (isset($HIV_status) && $HIV_status=="Never Tested") echo "checked";?> value="Never Tested" required>&nbsp;Never Tested</p>

            
            	<p style="font-size: 12px;"><input name="HIV_status" type="radio" id="HIV_status1" <?php if (isset($HIV_status) && $HIV_status=="Prev Negative") echo "checked";?> value="Prev Negative" required>&nbsp;Prev Negative</p>

            	
            	<p style="font-size: 12px;"><input name="HIV_status" type="radio" id="HIV_status1" <?php if (isset($HIV_status) && $HIV_status=="Prev Positive") echo "checked";?> value="Prev Positive" required>&nbsp;Prev Positive</p>

            	<p style="font-size: 12px;">If Prev Pos, is Inimate on ART? &nbsp;<input name="ART_status" type="radio" id="ART_status1" <?php if (isset($HIV_status) && $HIV_status=="Yes") echo "checked";?> value="Yes" required> &nbsp; Yes

            		<input name="ART_status" type="radio" id="ART_status1" <?php if (isset($HIV_status) && $HIV_status=="No") echo "checked";?> value="No" required> &nbsp; No

            	</p>

            	<p style="color:#CD853F;">If already on ART:</p>
            	<p style="font-size: 12px;">Current ART ID: <input type="text" name="ART_ID" style="float: right;"></p>
            	<p style="font-size: 12px;">Regimen: <input type="text" name="Regimen" style="float: right;"></p>

            	
            </td>

            <td>
                <p style="color:#CD853F;">If Newly diagnosed of HIV Positive</p>
            	<p style="font-size: 12px;">ART Number: <input type="text" name="ART_ID" style="float: right;"></p>
            	<p style="font-size: 12px;">Regimen: <input type="text" name="Regimen" style="float: right;"></p>


            </td>
         </tr>

         <tr><td></td><td><p style="font-size: 12px;"><b style="color:#CD853F;">DM:</b>&nbsp;<input name="DM" type="radio" id="DM1" <?php if (isset($DM) && $DM=="Yes") echo "checked";?> value="Yes" required> &nbsp; Yes

            		<input name="DM" type="radio" id="DM1" <?php if (isset($DM) && $HIV_status=="No") echo "checked";?> value="No" required> &nbsp; No 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            		<b style="color:#CD853F;"> Hx of TB:</b>&nbsp;<input name="Hx_of_TB" type="radio" id="Hx_of_TB1" <?php if (isset($HHx_of_TB) && $Hx_of_TB=="Yes") echo "checked";?> value="Yes" required> &nbsp; Yes

            		<input name="Hx_of_TB" type="radio" id="Hx_of_TB" <?php if (isset($Hx_of_TB) && $Hx_of_TB=="No") echo "checked";?> value="No" required> &nbsp; No 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            		<b style="color:#CD853F;">Hx of STI(past 3 m):</b>&nbsp;<input name="Hx_of_STI" type="radio" id="Hx_of_STI1" <?php if (isset($Hx_of_STI) && $HIV_statusHx_of_STI=="Yes") echo "checked";?> value="Yes" required> &nbsp; Yes

            		<input name="Hx_of_STI" type="radio" id="Hx_of_STI1" <?php if (isset($Hx_of_STI) && $Hx_of_STI=="No") echo "checked";?> value="No" required> &nbsp; No

            	</p></td></tr>


         <tr>
           <td>
           	<p style="font-size: 12px; text-align: center;">
           	Visit Date: <br><br><br><br><br><br>
           	<input type="date" name="prisoner_name">
            </p>
           </td>
           <td>
           	<p style="font-size: 12px; text-align: center;">
           	Resident<br>
           	Status
           	<br>            <table class="table table-bordered table-striped table-responsive-stack">
               <tr style="height:40px;">
               	<td>
               		<p class="vericaltext" style="font-size: 12px;">Entry</p>
               	</td> 

               	<td>
               		<p class="vericaltext" style="font-size: 12px;">Stay</p>
               	</td>

               	<td>
               		<p class="vericaltext" style="font-size: 12px;">Exit</p>
               	</td>
               </tr>

               <tr style="height:35px;">
               	<td>
               		<p class="vericaltext" style="font-size: 12px;"><input name="DM" type="radio" id="DM1" <?php if (isset($DM) && $DM=="Yes") echo "checked";?> value="Yes" required> &nbsp; EN</p>
               	</td> 

               	<td>
               		<p class="vericaltext" style="font-size: 12px;"><input name="DM" type="radio" id="DM1" <?php if (isset($DM) && $DM=="Yes") echo "checked";?> value="Yes" required> &nbsp; ST</p>
               	</td>

               	<td>
               		<p class="vericaltext" style="font-size: 12px;"><input name="DM" type="radio" id="DM1" <?php if (isset($DM) && $DM=="Yes") echo "checked";?> value="Yes" required> &nbsp; EX</p>
               	</td>
               </tr>
            </table>
            </p>
           </td>

           <td>
           	<p style="font-size: 12px; text-align: center;">
           	Weight
           	 <br><br><br><br><br>
           	 (kg)<br>
           	 <input type="number" name="prisoner_name" style="float: right;">
            </p>
           </td>

           <td>
           	<p style="font-size: 12px; text-align: center;">
           	Height
<br><br><br><br><br>  
           	 (CM)
           	 <br>
           	 <input type="number" name="prisoner_name" style="float: right;">
            </p>
           </td>

           <td>
           	<p style="font-size: 12px; text-align: center;">
           	BMI/MUAC
           <br><br><br><br><br><br>
           	 <input type="number" name="prisoner_name" style="float: right;">

            </p>
           </td>

           <td>
           	<p style="font-size: 12px; text-align: center;">
           	Blood <br>
           	Pressure<br>
           	(Systolic/Di<br>
           	astolic(S/D))
           	<br><br><br>
           	 <input type="text" name="prisoner_name" style="float: right;">
            </p>
           </td>
</tr>
      </tbody>
   </table>

    </div>



<div class="row">
 <div class="col-md-12">
 
        <div class="form-group">
                    <p style="font-size:18px;color:#CD853F; font-weight: bold; text-align:center;" class="control-label">Comment</p>
                    <textarea name="remarks" id="" cols="36" rows="10" class="summernote form-control" required>
                        <?php echo isset($remarks) ? $remarks : '' ?>
                    </textarea>
                </div>
 </div>
</div>

        </form>
        </div>
        <div class="card-footer border-top border-secondary">
            <div class="d-flex w-100 justify-content-center align-items-center">
                
                <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project" onclick="foo()">Save </button>
                <button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=home'">Cancel</button>
            </div>
        </div>
    </div>
</div>



<script>
    function BMU(){
        y = document.getElementById("bmu").value;
        return y;
    }
    
    function Calculate(){
        y = BMU();
        
        kgs = document.getElementById("KGS").value;
        cm = document.getElementById("CM").value;
        m = cm/100;
        ms = m*m;
        
        if(kgs == ""){
            document.getElementById("value2").value = "";
        }else{
            switch(y){
                case "mybmu":
                    document.getElementById("value2").value = (kgs/ms).toFixed(2);
                break;
                
            }
        }
    }
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

<script>
    $('#manage-project').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_vitals',
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
                        location.href = 'index.php?page=home'
                    },2000)
                }
            }
        })
    })


</script>

<script>
    // function foo1 () {
    //  var regions_id = $("#regions_id").val();
    //  var lead_name_id = $("#lead_name_id").val();
        
 //      $.ajax({
 //        url:"email.php", //the page containing php script
 //        type: "POST", //request type
 //        data: { regions_id: regions_id, lead_name_id: lead_name_id},
 //           success:function(result){
 //         if(resp == 1){
    //              alert_toast('Data successfully saved',"success");
    //              setTimeout(function(){
    //                  location.href = 'index.php?page=lead_list'
    //              },2000)
    //          }
 //       }
 //     });
 // }
</script>

