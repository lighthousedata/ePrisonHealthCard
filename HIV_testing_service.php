<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>


<?php 
if (isset($_POST['save'])) {
$name = $_POST['name'];
    $query=mysqli_query($conn,"SELECT * FROM hiv_test_type
         WHERE name = '$name'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                echo '
                <script type = "text/javascript">
                    alert("This Test Type is Already Taken!");
                    window.location = "index.php?page=HIV_testing_service";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO hiv_test_type (stations_id, regions_id,name) values ('$_POST[stations_id]','$_POST[regions_id]','$name')")) {
  echo '<script type="text/javascript">
                alert("New Type Successfully Added!");
                </script>';
   }
}

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

<script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test").removeAttr("disabled");
                    $("#HIV_test").focus();
                } else {
                    $("#HIV_test").attr("disabled", "disabled");
                }
            });
        });
    </script>

<script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test1").removeAttr("disabled");
                    $("#HIV_test1").focus();
                } else {
                    $("#HIV_test1").attr("disabled", "disabled");
                }
            });
        });
    </script>

<script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test2").removeAttr("disabled");
                    $("#HIV_test2").focus();
                } else {
                    $("#HIV_test2").attr("disabled", "disabled");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test3").removeAttr("disabled");
                    $("#HIV_test3").focus();
                } else {
                    $("#HIV_test3").attr("disabled", "disabled");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#HIV_test4").removeAttr("disabled");
                    $("#HIV_test4").focus();
                } else {
                    $("#HIV_test4").attr("disabled", "disabled");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $("input[name='eligible_for_test']").click(function () {
                if ($("#eligible_for_test").is(":checked")) {
                    $("#type_of_test").removeAttr("disabled");
                    $("#type_of_test").focus();
                } else {
                    $("#type_of_test").attr("disabled", "disabled");
                }
            });
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
                    <div class="col-md-12">
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
                    
                    

                </div>


                
        </td>

        <td width="33.33%" style="color:#CD853F;">
<div class="col-md-12">
                     <p style="color:#CD853F; text-align: center;">
            Visit Date: <br><br><br>
            <input type="date" value="<?php echo isset($visit_date) ? date("Y-m-d",strtotime($visit_date)) : '' ?>" name="visit_date" required style="width:100%; border-radius: 5px;">
            </p>  
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
                    <p  style="font-size: 12px;"><input name="resident_status" type="radio" id="Entry1" <?php if (isset($resident_status) && $resident_status=="Entry") echo "checked";?> value="Entry" required></p>
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
            
         </tr>
         
        <tr>
            <td width="33.33%">
               <table>
                   <tr>
                       <td style="text-align:center;color:#CD853F;">
                           HIV Testing Service
                       </td>
                   </tr>

                   <tr>
                       <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">Eligible For Test</p>
                           <table>
                            
                         
                 <tr style="height:40px;">
                <td>
                    <p class="vericaltext" style="font-size: 12px;">Yes</p>
                </td> 

                <td>
                    <p class="vericaltext" style="font-size: 12px;">No</p>
                </td>

                
               </tr>
                               <tr>
                                   <td>
                    <p  style="font-size: 12px;"><input name="eligible_for_test" type="radio" id="eligible_for_test" <?php if (isset($eligible_for_test) && $eligible_for_test=="Yes") echo "checked";?> value="Yes" required></p>
                </td>

                <td>
                    <p  style="font-size: 12px;"><input name="eligible_for_test" type="radio" id="eligible_for_test1" <?php if (isset($eligible_for_test) && $eligible_for_test=="No") echo "checked";?> value="No" required ></p>
                </td>
                               </tr>
                           </table>
                       </td>

                                  <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">Type of Test &nbsp;&nbsp; <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn" style="margin-left: 2px; font-size:8px;"><i class="fa fa-plus fa-fw"> </i></button>
                            <hr>
                        <select class="form-control form-control-sm select2" name="type_of_test" disabled="disabled" id="type_of_test" required>
                <option></option>
                <?php 
                $regimen = $conn->query("SELECT * FROM hiv_test_type ORDER BY name ASC ");
                while($row= $regimen->fetch_assoc()):
                ?>
                <option value="<?php echo $row['name'] ?>" <?php echo isset($type_of_test) && $type_of_test == $type_of_test ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                <?php endwhile; ?>
              </select></p>
                   
                       </td>

                       <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">HIV Test</p>
                           <table>
<tr>
                                   <td>
                    <p class="vericaltext" style="font-size: 12px;"> Negative</p>
                </td>

                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Positive</p>
                </td>

                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Inconclusive</p>
                </td>

                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Refused</p>
                </td>

                                <td>
                    <p class="vericaltext" style="font-size: 12px;"> Unknown</p>
                </td>
                               </tr>

                             

                <tr>
                    <td><input name="HIV_test" type="radio" id="HIV_test" <?php if (isset($HIV_test) && $HIV_test=="Negative") echo "checked";?> value="Negative" required disabled="disabled"></td>
                    <td><input name="HIV_test" type="radio" id="HIV_test1" <?php if (isset($HIV_test) && $HIV_test=="Positive") echo "checked";?> value="Positive" required disabled="disabled"></td>
                    <td><input name="HIV_test" type="radio" id="HIV_test2" <?php if (isset($HIV_test) && $HIV_test=="Inconclusive") echo "checked";?> value="Inconclusive" required disabled="disabled"></td>
                    <td><input name="HIV_test" type="radio" id="HIV_test3" <?php if (isset($HIV_test) && $HIV_test=="Refused") echo "checked";?> value="Refused" required disabled="disabled"></td>
                    <td><input name="HIV_test" type="radio" id="HIV_test4" <?php if (isset($HIV_test) && $HIV_test=="Unknown") echo "checked";?> value="Unknown" required disabled="disabled"></td>
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
function redirect() {
    var ask = window.confirm("Do you really want to Dismis?");
    if (ask) {
       // window.alert("You Have Been Successfully Redirected!");

        window.location.href = "./index.php?page=HIV_Testing_Service";

    }else {window.location.href = "./index.php?page=home"; }
}
</script>

<script>
    $('#manage-project').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_hiv_aids',
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
                        location.href = 'index.php?page=HIV_testing_service'
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


<div id="addIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title">Add Test Type</h4>
      </div>
      <div class="modal-body"> <form method="POST" enctype="multipart/form-data">
        <div style="width: 77%;margin: auto;">


<?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

 <input type="hidden" name="regions_id" id="regions_id" value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
 <input type="hidden" name="stations_id" id="stations_id" value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
           <div class="form-group">
            <label for="some" class="col-form-label" style="color:#CD853F;">Test Type</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>



