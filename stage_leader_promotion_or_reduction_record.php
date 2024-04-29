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

<script type="text/javascript">
$(document).ready(function() {

    // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
    $('.table-responsive-stack').find("th").each(function(i) {

        $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend(
            '<span class="table-responsive-stack-thead">' + $(this).text() + ':</span> ');
        $('.table-responsive-stack-thead').hide();
    });


    $('.table-responsive-stack').each(function() {
        var thCount = $(this).find("th").length;
        var rowGrow = 100 / thCount + '%';
        //console.log(rowGrow);
        $(this).find("th, td").css('flex-basis', rowGrow);
    });

    function flexTable() {
        if ($(window).width() < 768) {

            $(".table-responsive-stack").each(function(i) {
                $(this).find(".table-responsive-stack-thead").show();
                $(this).find('thead').hide();
            });

            // window is less than 768px   
        } else {

            $(".table-responsive-stack").each(function(i) {
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
                <input type="hidden" name="regions_id" id="regions_id"
                    value="<?php echo isset($regions_id) ? $regions_id : '' ?>">
                <input type="hidden" name="stations_id" id="stations_id"
                    value="<?php echo isset($stations_id) ? $stations_id : '' ?>">
                <input type="hidden" id="bmu" value="mybmu">

                <div class="row">
                    <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">

                        <tbody>
                            <tr>
                                <td width="100%" style="color:#CD853F;">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p style="color:#CD853F; text-align: center;">
                                                Prisoners Number</p>
                                            <select class="form-control form-control-sm select2" name="prisoners_no"
                                                required>
                                                <option></option>
                                                <?php 
                $prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
                while($row= $prisoners->fetch_assoc()):
                ?>
                                                <option value="<?php echo $row['prisoners_no'] ?>"
                                                    <?php echo isset($prisoners_no) && $prisoners_no == $prisoners_no ? "selected" : '' ?>>
                                                    <?php echo ucwords($row['pname']) ?></option>
                                                <?php endwhile; ?>
                                            </select>

                                        </div>

                                        <div class="col-md-3">
                                            <p style="color:#CD853F; text-align: center;">
                                                Date
                                            </p>
                                            <input type="date" name="date"
                                                value="<?php echo isset($date) ? date("Y-m-d",strtotime($date)) : '' ?>"
                                                required style="width:100%; border-radius:5px;">

                                        </div>

                                        <div class="col-md-3">
                                            <p style="color:#CD853F; text-align: center;">
                                                Stage
                                            </p>
                                            <select class="form-control form-control-sm select2" name="status" required>
                                                <option value="" disabled selected>--Select Stage Here--</option>
                                                <option>Promoted</option>
                                                <option>Demoted</option>

                                            </select>

                                        </div>

                                        <div class="col-md-3">
                                            <p style="color:#CD853F; text-align: center;">
                                                Rank
                                            </p>
                                            <select class="form-control form-control-sm select2" name="title" required>
                                                <option value="" disabled selected>--Select Rank Here--</option>
                                                <option>Ordinary Stage Leader</option>
                                                <option>First Stage Leader</option>
                                                <option>Second Stage Leader</option>
                                                <option>Third Stage Leader</option>
                                                <option>Special Stage Leader</option>
                                            </select>

                                        </div>


                                    </div>



                                </td>

                            </tr>


                            <tr>
                                <td width="100%" style="color:#CD853F;">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <p style="color:#CD853F; text-align: center;">
                                                Reason
                                            </p>
                                            <textarea name="reason"
                                                style="float: right; border-radius: 5px; border-bottom-color: #CD853F; width:100%;"
                                                required>
                                              <?php echo isset($reason) ? $reason : '' ?>
                                            </textarea>

                                        </div>


                                    </div>



                                </td>

                            </tr>

                        </tbody>
                    </table>

                </div>

            </form>
        </div>
        <div class="card-footer border-top border-secondary">
            <div class="d-flex w-100 justify-content-center align-items-center">

                <button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-project" onclick="foo()">Save
                </button>
                <button class="btn btn-flat bg-gradient-secondary mx-2" type="button"
                    onclick="location.href='index.php?page=home'">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
$('#manage-project').submit(function(e) {
    e.preventDefault()
    start_load()
    $.ajax({
        url: 'ajax.php?action=save_stage_leader',
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
                    location.href =
                        'index.php?page=stage_leader_promotion_or_reduction_record'
                }, 2000)
            }
        }
    })
})
</script>