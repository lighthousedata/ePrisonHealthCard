<script type="text/javascript" src="includes/scanner.js"></script>


<script>
//the code below initiates a scan that will output images in jpg format
function scanToJpg() {
    scanner.scan(displayImagesOnPage, {
        "output_settings": [{
            "type": "return-base64",
            "format": "jpg"
        }]
    });
}


/** Processes the scan result */
function displayImagesOnPage(successful, mesg, response) {
    if (!successful) { // On error
        console.error('Failed: ' + mesg);
        return;
    }

    if (successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User canceled.
        console.info('User canceled');
        return;
    }

    var scannedImages = scanner.getScannedImage(response, true, false); // returns an array of ScannedImage
    for (var i = 0;
        (scannedImages instanceof Array) && i < scannedImages.length; i++) {
        var scannedImage = scannedImages[i];
        processScannedImage(scannedImage);
    }
}

/** Images scanned so far. */
var imagesScanned = [];

/** Processes a ScannedImage */
function processScannedImage(scannedImage) {
    imagesScanned.push(scannedImage);
    var elementImg = createDomElementFromModel({
        'name': 'img',
        'attributes': {
            'class': 'scanned',
            'src': scannedImage.src
        }
    });
    document.getElementById('images').appendChild(elementImg);
}
</script>

<style>
select[multiple],
select[size] {
    height: auto;
    width: 20px;
}

.pull-right {
    float: right;
    margin: 2px !important;
}

.map-container {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.map-container iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}

input[type=file] {
    border: 2px dotted #999;
    border-radius: 10px;
    margin-left: 9px;
    width: 231px !important;
}

#loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img1/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
    opacity: 1;
}

}
</style>

<script src="jquery.min.js"></script>
<script type="text/javascript">
$(window).on('load', function() {
    //you remove this timeout
    setTimeout(function() {
        $('#loader').fadeOut('slow');
    });
    //remove the timeout
    //$('#loader').fadeOut('slow'); 
});
</script>

<center>
    <div class="text-center col-md-5">
        <div class="card">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Upload File Form</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">

                <div class="container">
                    <div class="row"><br><br>
                        <form action="fileprocess.php" method="post" enctype="multipart/form-data">
                            <div class="col-md-11">
                                <div class="md-form mb-0">
                                    <input type="hidden" name="regions_id"
                                        value="<?php echo ucwords(htmlentities($_SESSION['login_regions_id'])); ?>"
                                        class="form-control">
                                    <input type="hidden" name="stations_id"
                                        value="<?php echo ucwords(htmlentities($_SESSION['login_stations_id'])); ?>"
                                        class="form-control">
                                    <input type="hidden" name="user_id"
                                        value="<?php echo ucwords(htmlentities($_SESSION['login_id'])); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <label for="" class="control-label">Prisoner Number</label>
                            <select class="form-control form-control-sm select2" name="prisoners_no" required>
                                <option></option>
                                <?php
                        include 'db_connect.php';
                        $stations_id = $_SESSION['login_stations_id'];
                        $prisoners = $conn->query("SELECT *, concat(fname,' ',lname, ' => ', prisoners_no) AS pname FROM prisoners WHERE stations_id = $stations_id ORDER BY prisoners_no ASC ");
                        while ($row = $prisoners->fetch_assoc()) :
                        ?>
                                <option value="<?php echo $row['prisoners_no'] ?>"
                                    <?php echo isset($prisoners_no) && $prisoners_no == $row['prisoners_no'] ? "selected" : '' ?>>
                                    <?php echo ucwords($row['pname']) ?></option>
                                <?php endwhile; ?>
                            </select>
                            <br>
                            <label for="subject" class="control-label">Upload File</label>
                            <input type="file" name="myfile" id="images" /> <button type="button" onclick="scanToJpg();"
                                style="border-radius:5px;" class="control-label">Scan</button>


                            <br>
                            <button type="submit" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                name="save" type="submit">UPLOAD</button>
                            <footer style="font-size: 10px"><b>File Type:</b>
                                <font color="red"><i>.docx .doc .pptx .ppt .xlsx .xls .pdf .odt .jpeg .png .gif .tiff
                                        .psd .eps .al .indd .raw</i></font>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Material form login -->
        <Br><br>
    </div>
    </div>
</center>

<!--Copyright-->
<hr>
</div>
<div class="footer-copyright py-3">

</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- Card -->
<!-- /Start your project here-->

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#dtable').dataTable({
        "aLengthMenu": [
            [5, 10, 15, 25, 50, 100, -1],
            [5, 10, 15, 25, 50, 100, "All"]
        ],
        "iDisplayLength": 10
    });
})
</script>
<!-- SCRIPTS -->
<!-- JQuery -->

<script type="text/javascript">
$("#Alert").on("click", function() {

    // userad();
    uservalidate();
    userfile();

    if (uservalidate() === true && userfile() === true) {

    };


});

//    function userad() {
// if ($('#orangeForm-name').val() == '') { 
//     $('#orangeForm-name').css('border-color', '#dc3545');
//  return false;
//   } else {
//    $('#orangeForm-name').css('border-color', '#28a745'); 
//     return true;
// }

function uservalidate() {
    if ($('#categ').val() == '') {
        $('#categ').css('border-color', '#dc3545');
        return false;
    } else {
        $('#categ').css('border-color', '#dc3545');
        return true;
    }

};

function userfile() {
    if ($('#file').val() == '') {
        $('#file').css('border-color', '#dc3545');
        return false;
    } else {
        $('#file').css('border-color', '#dc3545');
        return true;
    }

};
</script>