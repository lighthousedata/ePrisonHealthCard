<?php if(!isset($conn)){ include 'db_connect.php'; } 

date_default_timezone_set('Africa/Blantyre');
$my_date = date('Y-m-d h:i:s', time());
?>


<?php 
if (isset($_POST['save'])) {
   $regimen = $_POST['regimen'];
    $query=mysqli_query($conn,"SELECT * FROM new_regimen
         WHERE regimen = '$regimen'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("This Regimen is Already Taken!");
                    window.location = "index.php?page=ART_history_at_entry";
                </script>


               ';
              } 

elseif ($conn->query("INSERT INTO new_regimen (stations_id, regions_id,regimen) values ('$_POST[stations_id]','$_POST[regions_id]','$regimen')")) {
  echo '<script type="text/javascript">
                alert("New Regimen Successfully Added!");
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
    display: block;
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
        display: block;

    }

    /*  IE9 FIX   */
    .table-responsive-stack td {
        float: left\9;
        width: 100%;
    }
}

.vericaltext {
    writing-mode: vertical-lr;
    transform: rotate(360deg);
}
</style>


<script type="text/javascript" src="disablebuttonjquery.min.js"></script>
<!-- <script type="text/javascript">
        $(function () {
            $("input[name='chkPassPort']").click(function () {
                if ($("#chkYes").is(":checked")) {
                    $("#txtPassportNumber").removeAttr("disabled");
                    $("#txtPassportNumber").focus();
                } else {
                    $("#txtPassportNumber").attr("disabled", "disabled");
                }
            });
        });
    </script>
 -->
<script type="text/javascript">
$(function() {
    $("input[name='HIV_status']").click(function() {
        if ($("#checkyes").is(":checked")) {
            $("#checkyes1").removeAttr("disabled");
            $("#checkyes1").focus();
        } else {
            $("#checkyes1").attr("disabled", "disabled");
        }
    });
});
</script>

<script type="text/javascript">
$(function() {
    $("input[name='HIV_status']").click(function() {
        if ($("#checkyes").is(":checked")) {
            $("#checkyes2").removeAttr("disabled");
            $("#checkyes2").focus();
        } else {
            $("#checkyes2").attr("disabled", "disabled");
        }
    });
});
</script>


<script type="text/javascript">
$(function() {
    $("input[name='on_ART']").click(function() {
        if ($("#checkyes1").is(":checked")) {
            $("#current_ART_ID").removeAttr("disabled");
            $("#current_ART_ID").focus();
        } else {
            $("#current_ART_ID").attr("disabled", "disabled");
        }
    });
});
</script>

<script type="text/javascript">
$(function() {
    $("input[name='on_ART']").click(function() {
        if ($("#checkyes1").is(":checked")) {
            $("#current_Regimen").removeAttr("disabled");
            $("#current_Regimen").focus();
        } else {
            $("#current_Regimen").attr("disabled", "disabled");
        }
    });
});
</script>

<script type="text/javascript">
$(function() {
    $("input[name='HIV_status']").click(function() {
        if ($("#checkno").is(":checked")) {
            $("#current_Regimen").attr("disabled", "disabled");
            $("#current_ART_ID").attr("disabled", "disabled");
        }
    });
});
</script>

<script type="text/javascript">
$(function() {
    $("input[name='HIV_status']").click(function() {
        if ($("#checkno1").is(":checked")) {
            $("#current_Regimen").attr("disabled", "disabled");
            $("#current_ART_ID").attr("disabled", "disabled");
        }
    });
});
</script>


<!--  <script type="text/javascript">
        $(function () {
            $("input[name='HIV_status']").click(function () {
                if ($("#checkyes").is(":checked")) {
                    $("#on_ART2").removeAttr("disabled");
                    $("#on_ART2").focus();
                } else {
                    $("#on_ART2").attr("disabled", "disabled");
                }
            });
        });
    </script> -->



<!--  <span>Do you have Passport?</span>
    <label for="chkYes">
        <input type="radio" id="chkYes" name="chkPassPort" />
        Yes
    </label>
    <label for="chkNo">
        <input type="radio" id="chkNo" name="chkPassPort" />
        No
    </label>
    <hr />
    Passport Number:
    <input type="text" id="txtPassportNumber" disabled="disabled" /> -->

<script>
function Clear() {
    clearRadioGroup("on_ART");
    // clearRadioGroup("Options2");
}

function clearRadioGroup(GroupName) {
    var ele = document.getElementsByName(GroupName);
    for (var i = 0; i < ele.length; i++)
        ele[i].checked = false;
}
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
                <input type="hidden" name="regions_id" id="regions_id"
                    value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
                <input type="hidden" name="stations_id" id="stations_id"
                    value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
                <input type="hidden" id="bmu" value="mybmu">

                <div class="row">
                    <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
                        

                        <tbody>
                             <?php
    
                                            $prisoner_name ="Harry Banda";
                                            $prison_num ="p4458";
                                            $cell_num ="12";
                                            $address ="Lilongwe, Malawi. Postal Address: PO Box 106, Lilongwe, Malawi";
                                            $next_of_kin ="Pachawo";
                                            $sex ="Male";
                                            $dob ="15/March/1940";
                                            $prison_entry_date ="15/March/2014";
                                            $prison_status ="Convict";
                       
                                        ?>
                            
                            <tr>
                                <td width="34.33%" style="color:#CD853F;"> <h2 style="color:#3c3838; text-align: center;">Prison Health Card</h2></td></tr>
                            <tr>
                                <td width="34.33%" style="color:#CD853F;">
                                    <div class="row">
                                        <div class="col-md-12">
                                             <h4 style="color:#3c3838; text-align: center;">Demographics</h4>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Prisoners Name</b>: <?php echo $prisoner_name; ?>
                                            </p>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Home Village Address</b>: <?php echo $address; ?>
                                            </p>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Next of Kin Phone#</b>: <?php echo $next_of_kin; ?>
                                            </p>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Sex:</b>: <?php echo $sex; ?>
                                            </p>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Date of Birth</b>: <?php echo $dob; ?>
                                            </p>
                                        </div>



                                    </div>
                                </td>


                                <td width="40.33%" style="color:#CD853F;">
                                     <h4 style="color:#3c3838; text-align: center;">
                                        Prison Entry Info
                                    </h4>
                                    <p style="color:#CD853F; text-align: left;">
                                                <b>Prisoners Number</b>: <?php echo $prison_num; ?>
                                            </p>
                                             <p style="color:#CD853F; text-align: left;">
                                                <b>Cell Number</b>: <?php echo $cell_num; ?>
                                            </p>
                                    <p style="color:#CD853F; text-align: left;">
                                                <b>Entry Date</b>: <?php echo $prison_entry_date; ?>
                                            </p>
                                            <p style="color:#CD853F; text-align: left;">
                                                <b>Status</b>:<?php echo $prison_status; ?>
                                            </p>

                                </td>

                            </tr>

                            

                            <tr>
                                <td width="99.33%" style="color:#CD853F;">
                                     <h4 style="color:#3c3838; text-align: center;">
                                        Clinical History at Entry
                                    </h4>
                                    
                                    <?php
    
                                            $HIV_status ="344b-jjd";
                                            $DM ="None";
                                            $Hx_of_TB ="No";
                                            $Hx_of_STI ="Yes";
                       
                                        ?>
                                </td>
                            </tr>
                            <tr>
                            <td width="23.33%" style="color:#CD853F;">
                                    <p style="color:#CD853F;"><b>HIV Status : </b><?php echo $HIV_status; ?></p>
                                </td>
                            
                                <td width="23.33%" style="color:#CD853F;">
                                    <p style="color:#CD853F;"><b>DM : </b><?php echo $DM; ?></p>  
                                </td>
                                <td width="23.33%" style="color:#CD853F;">
                                    <p style="color:#CD853F;"><b>Hx of TB : </b><?php echo $Hx_of_TB; ?></p>  
                                </td>
                                <td width="23.33%" style="color:#CD853F;">
                                    <p style="color:#CD853F;"><b>Hx of STI(past 3 m) : </b><?php echo $Hx_of_STI; ?></p>  
                                </td>
                                
                            </tr>

                        </tbody>
                    </table>

                </div>

            </form>
        </div>
        <div class="card-footer border-top border-secondary">
            <div class="d-flex w-100 justify-content-center align-items-center">
                <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project">Edit Info </button>
                
            </div>
        </div>
    </div>
</div>


<!--- to page 2-->

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
                <input type="hidden" name="regions_id" id="regions_id"
                    value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
                <input type="hidden" name="stations_id" id="stations_id"
                    value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
                <input type="hidden" id="bmu" value="mybmu">

                <div class="row">
                    <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">

                        <tbody>
                             <tr>
                                 <td>
                                      <h4 style="color:#3c3838; text-align: center;">Visits</h4>
                                 </td>
                            </tr>
                            <tr>
                             <td width="33.33%" style="color:#CD853F;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="color:#CD853F; text-align: center;">
                                                <b>Visit Date:</b> <br><br><br>
                                                <input type="date"
                                                    value="<?php echo isset($visit_date) ? date("Y-m-d",strtotime($visit_date)) : '' ?>"
                                                    name="visit_date" required style="width:100%; border-radius:5px;">
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td width="33.33%" style="color:#CD853F;">
                                    <p style="color:#CD853F; text-align: center;">
                                        <b>Resident Status</b>
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
                                                <input name="resident_status" type="radio" id="Entry1"
                                                    <?php if (isset($resident_status) && $resident_status=="Entry") echo "checked";?>
                                                    value="Entry" required>
                                            </td>

                                            <td>
                                                <input name="resident_status" type="radio" id="Stay1"
                                                    <?php if (isset($resident_status) && $resident_status=="Stay") echo "checked";?>
                                                    value="Stay" required>
                                            </td>

                                            <td>
                                                <input name="resident_status" type="radio" id="Exit1"
                                                    <?php if (isset($resident_status) && $resident_status=="Exit") echo "checked";?>
                                                    value="Exit" required>
                                            </td>
                                        </tr>
                                    </table>
                                 

                            <tr>
                                <td>
                                    <p style="font-size: 12px; text-align: center;color:#CD853F;">
                                        <i class="fas fa-temperature-high nav-icon"
                                            style="color:#CD853F; font-size:14px;"></i>
                                        <b>Temperature</b>
                                        <br><br><br><br>
                                        (<sup>o</sup>C)<br>
                                        <input type="number" min="0" max="200" step="0.1" name="temperature"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            min="0" step="0.01" max="100" oninput="validity.valid||(value='');"
                                            onpress="isNumber(event)"
                                            value="<?php echo isset($temperature) ? $temperature : '' ?>" required>
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size: 12px; text-align: center;color:#CD853F;">
                                        <b>Weight</b>
                                        <br><br><br><br>
                                        (kg)<br>
                                        <input type="number" id="kgs" min="0" max="500" step="0.1" name="weight"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"
                                            value="<?php echo isset($weight) ? $weight : '' ?>" required>
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size: 12px; text-align: center;color:#CD853F;">
                                        <b>Height</b>
                                        <br><br><br><br>
                                        (CM)
                                        <br>
                                        <input type="number" name="height" id="cm" min="1" max="500" step="1"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            oninput="validity.valid||(value=''); Calculate();" onpress="isNumber(event)"
                                            value="<?php echo isset($height) ? $height : '' ?>" required>
                                    </p>
                                </td>

                                <td>
                                    <p style="font-size: 12px; text-align: center;color:#CD853F;">
                                        <b>BMI/MUAC</b>
                                        <br><br><br><br><br>
                                        <input type="number" name="bmi_muac" id="value2"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            value="<?php echo isset($bmi_muac) ? $bmi_muac : '' ?>" required readonly>

                                    </p>
                                </td>

                                <td>
                                    <p style="font-size: 12px; text-align: center;color:#CD853F;">
                                        <b> Blood <br>
                                            Pressure<br>
                                            (Systolic/Di<br>
                                            astolic(S/D))</b>
                                        <br>

                                    <div class="d-flex w-100 justify-content-center align-items-center">

                                        <input type="number" name="systolic" min="0" max="500" step="1"
                                            placeholder="Systolic"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            value="<?php echo isset($systolic) ? $systolic : '' ?>" required
                                            oninput="validity.valid||(value='');" onpress="isNumber(event)">
                                        &nbsp;&nbsp;
                                        <input type="number" min="0" max="500" step="1" name="diastolic"
                                            placeholder="Diastolic"
                                            style="border-radius: 5px; border-bottom-color: #CD853F; width:100%; height: 33px;"
                                            oninput="validity.valid||(value='');" onpress="isNumber(event)"
                                            value="<?php echo isset($diastolic) ? $diastolic : '' ?>" required>
                                    </div>
                                </td>
                                    </tr>
                                </td>
                            </tr>
                        </tbody>
    
    </table>
    </div>
            </form>
        </div>
    </div>
        
         <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">

                        <tbody>
                             <tr>
                                 <td>
                                      <h4 style="color:#3c3838; text-align: center;">HIV Testing Service</h4>
                                 </td>
                            </tr>
        
        
        <tr>
            <td width="33.33%">
               <table>

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
            </tr>
                <tr>

                       <td width="33.33%">
                           <p style="text-align:center;color:#CD853F;">HIV Test</p>
                           <table>

                               
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

                        </tbody>
                    </table>


<!-- Page 3 -->

<table class="table table-bordered table-striped table-responsive-stack" id="tableOne">

                        <tbody>
                             <tr>
                                 <td>
                                      <h4 style="color:#3c3838; text-align: center;">Visits</h4>
                                 </td>
                            </tr>
        
        <tr>
            
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

                <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project">Save </button>
                <button class="btn btn-flat bg-gradient-secondary mx-2" type="button"
                    onclick="location.href='index.php?page=home'">Cancel</button>
            </div>
        </div>
    </div>
</div>



<script>
function BMU() {
    y = document.getElementById("bmu").value;
    return y;
}

function Calculate() {
    y = BMU();

    kgs = document.getElementById("KGS").value;
    cm = document.getElementById("CM").value;
    m = cm / 100;
    ms = m * m;

    if (kgs == "") {
        document.getElementById("value2").value = "";
    } else {
        switch (y) {
            case "mybmu":
                document.getElementById("value2").value = (kgs / ms).toFixed(2);
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
$('#manage-project').submit(function(e) {
    e.preventDefault()
    start_load()
    $.ajax({
        url: 'ajax.php?action=save_ART_history_at_entry',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success: function(resp) {
            if (resp == 1) {
                alert_toast('Data successfully saved', "success");
                setTimeout(function() {
                    location.href = 'index.php?page=ART_history_at_entry'
                }, 2000)
            }
        }
    })
})
</script>

<script>
function redirect() {
    var ask = window.confirm("Do you really want to be redirected to HTS?");
    if (ask) {
        // window.alert("You Have Been Successfully Redirected!");

        window.location.href = "./index.php?page=HIV_Testing_Service";

    } else {
        window.location.href = "./index.php?page=home";
    }
}
</script>



<script>
$(function() {
    $('[data-toggle="toggle"]').tooltip()
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
                <h4 class="modal-title">Add New Regimen</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div style="width: 77%;margin: auto;">


                        <?php 
      $regions_id = $_SESSION['login_regions_id'];
      $stations_id = $_SESSION['login_stations_id'];
      $user_id = $_SESSION['login_id']; 
?>

                        <input type="hidden" name="regions_id" id="regions_id"
                            value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
                        <input type="hidden" name="stations_id" id="stations_id"
                            value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
                        <div class="form-group">
                            <label for="some" class="col-form-label" style="color:#CD853F;">Regimen</label>
                            <input type="text" name="regimen" class="form-control" id="some" required>
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