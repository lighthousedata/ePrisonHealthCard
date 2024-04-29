
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
transform: rotate(360deg);
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
    
      <tbody>
         <tr>
            <td width="33.33%" style="color:#CD853F;">
                <div class="row">
                    <div class="col-md-6">
 <p style="color:#CD853F; text-align: center;">
               Prisoners Number<br><br><br>
                    <select class="form-control form-control-sm select2" name="prisoners_no" required>
                <option></option>
                <?php 
                $prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                <option value="<?php echo $row['prisoners_no'] ?>" <?php echo isset($prisoners_no) && $prisoners_no == $prisoners_no ? "selected" : '' ?>><?php echo ucwords($row['pname']) ?></option>
                <?php endwhile; ?>
              </select>
                </p> 
                    </div>
                    
                    <div class="col-md-6">
                     <p style="color:#CD853F; text-align: center;">
            Visit Date: <br><br><br>
            <input type="date" name="visit_date" value="<?php echo isset($visit_date) ? date("Y-m-d",strtotime($visit_date)) : '' ?>" required>
            </p>   
                    </div>

                 

                </div>


                
        </td>

            <td width="33.33%" style="color:#CD853F;">
           <p style="color:#CD853F; text-align: center;">
            Resident Status
                       <table class="table table-bordered table-striped table-responsive-stack">
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
                    <p style="font-size: 12px;"><input name="resident_status" type="radio" id="Entry1" <?php if (isset($resident_status) && $resident_status=="Entry") echo "checked";?> value="Entry" required></p>
                </td> 

                <td>
                    <p  style="font-size: 12px;"><input name="resident_status" type="radio" id="Stay1" <?php if (isset($resident_status) && $resident_status=="Stay") echo "checked";?> value="Stay" required></p>
                </td>

                <td>
                    <p  style="font-size: 12px;"><input name="resident_status" type="radio" id="Exit1" <?php if (isset($resident_status) && $resident_status=="Exit") echo "checked";?> value="Exit" required></p>
                </td>
               </tr>
            </table>
            </p>
            </td>

            <td width="33.33%">
                

            </td>
            
         </tr>
         
        <tr>
            <td>
               <table>
                   <tr>
                       <td style="text-align:center;color:#CD853F;">
                           COVID 19 Service
                       </td>
                   </tr>

                   <tr>
                       <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">COVID 19 Screening</p>
                           <table>
                           
                 <tr>
                <td>
                    <p class="vericaltext" style="font-size: 12px;">Not Presumptive</p>
                </td>

                <td>
                    <p class="vericaltext" style="font-size: 12px;">Presumptive</p>
                </td> 

                <td>
                    <p class="vericaltext" style="font-size: 12px;">Not Done</p>
                </td>

                
               </tr>
                <tr>
                    <td><input name="covid19_screening" type="radio" id="covid19_screening1" <?php if (isset($covid19_screening) && $covid19_screening=="Not Presumptive") echo "checked";?> value="Not Presumptive" required></td>
                    <td><input name="covid19_screening" type="radio" id="covid19_screening1" <?php if (isset($covid19_screening) && $covid19_screening=="Presumptive") echo "checked";?> value="Presumptive" required></td>
                    <td><input name="covid19_screening" type="radio" id="covid19_screening1" <?php if (isset($covid19_screening) && $covid19_screening=="Not Done") echo "checked";?> value="Not Done" required></td>
                    
                </tr>
                           </table>
                       </td>


                   <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">Type of Test</p>
                           <table>
                           
                 <tr> 
                <td>
                    <p class="vericaltext" style="font-size: 12px;">New Test</p>
                </td> 

                <td>
                    <p class="vericaltext" style="font-size: 12px;">Re-Test</p>
                </td>

               </tr>
                <tr>
                    <td><input name="type_of_test" type="radio" id="type_of_test" <?php if (isset($type_of_test) && $type_of_test=="New Test") echo "checked";?> value="New Test" required></td>
                    <td><input name="type_of_test" type="radio" id="type_of_test" <?php if (isset($type_of_test) && $type_of_test=="Re-Test") echo "checked";?> value="Re-Test" required></td>
                    
                </tr>
                           </table>
                       </td>

                       <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">COVID 19 Testing</p>
                           <table>
<tr>
                                   <td>
                    <p class="vericaltext" style="font-size: 12px;"> Negative</p>
                </td>

                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Positive</p>
                </td>

            
                                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Not done</p>
                </td>
                               </tr>

                             

                <tr>
                    <td><input name="covid19_test" type="radio" id="covid19_test1" <?php if (isset($covid19_test) && $covid19_test=="Negative") echo "checked";?> value="Negative" required></td>
                    <td><input name="covid19_test" type="radio" id="covid19_test1" <?php if (isset($covid19_test) && $covid19_test=="Positive") echo "checked";?> value="Positive" required></td>
                    <td><input name="covid19_test" type="radio" id="covid19_test1" <?php if (isset($covid19_test) && $covid19_test=="Not Done") echo "checked";?> value="Not Done" required></td>
                    
                </tr>
                           </table>
                       </td>
                   </tr>
               </table> 
            </td>

            
         </tr>


    <tr>
       <td>
                                <p style="font-size:18px;color:#CD853F; font-weight: bold; text-align:center;" class="control-label">Comment</p>

                <textarea name="comment" style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;" required>
                    <?php echo isset($comment) ? $comment : '' ?>
                </textarea>
                   
        </td>
    </tr>

      </tbody>
   </table>

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
            url:'ajax.php?action=save_covid_19',
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
                        location.href = 'index.php?page=Covid_19_service'
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

