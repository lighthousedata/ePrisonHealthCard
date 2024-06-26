<?php
// connect to the database
require_once("db_connect.php");

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file

  $user_id = $_POST['user_id'];
  $regions_id = $_POST['regions_id'];
  $stations_id = $_POST['stations_id'];
  $prisoners_no = $_POST['prisoners_no'];

    $filename = $_FILES['myfile']['name'];

    // $Admin = $_FILES['admin']['name'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    if (!in_array($extension, ['pdf','docx','doc','pptx','ppt','xlsx','xls','odt','jpeg','png','gif','tiff','psd','eps','al','indd','raw'])) {
                echo '<script type = "text/javascript">
                            alert("You file extension must be:  .pdf");
                            window.location = "index.php?page=add_file";
                    </script>
                     ';
    } elseif ($_FILES['myfile']['size'] > 2000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else{


  $query=mysqli_query($conn,"SELECT * FROM `upload_files` WHERE `name` = '$filename' AND `prisoners_no` = '$prisoners_no'")or die(mysqli_error($conn));
           $counter=mysqli_num_rows($query);
            
            if ($counter == 1) 
              { 
                   echo '
                <script type = "text/javascript">
                    alert("Files already taken");
                    window.location = "index.php?page=add_file";
                </script>


               ';
              } 
      
        date_default_timezone_set("Africa/Blantyre");
         $time = date("M-d-Y h:i A",strtotime("+0 HOURS"));

        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO upload_files (regions_id, stations_id, prisoners_no, user_id, name, size, download, timers) VALUES ('$regions_id', '$stations_id', '$prisoners_no', '$user_id', '$filename', $size, 0, '$time')";
            if (mysqli_query($conn, $sql)) {
                   echo '
                     <script type = "text/javascript">
                    alert("File Upload");
                    window.location = "index.php?page=add_document";
                </script>';

            }
        } else {
             echo "Failed To Upload files!";
        }
    
  }
}
