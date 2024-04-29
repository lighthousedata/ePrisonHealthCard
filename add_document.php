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

<!-- Heading -->
<div class="">
    <!--   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalRegisterForm">Add File</button> -->
    <a href="./index.php?page=add_file"><button type="button" class="btn btn-secondary"><i
                class="fas fa-file-medical"></i> Add File</button></a>
</div>

<hr>

<div class="col-md-12">

    <table id="dtable" class="table table-striped">
        <thead>

            <th style="color: #CD853F; font-size: 12px;">Filename <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">FileSize <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Prisoner No. <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Prisoner Name <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Station <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Region <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Uploader <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>

            <th style="color: #CD853F; font-size: 12px;">Date/Time Upload <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Downloads <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>
            <th style="color: #CD853F; font-size: 12px;">Action <i class="fas fa-sort nav-icon"
                    style="color:#CD853F; font-size:12px;"></i></th>

        </thead>
        <tbody>


            <tr>
                <?php 
        require_once("db_connect.php");
$regions_id = $_SESSION['login_regions_id'];
$stations_id = $_SESSION['login_stations_id'];
      $query = mysqli_query($conn,"SELECT up.id, up.regions_id, up.stations_id, up.prisoners_no, up.name, up.size, up.download, up.timers, concat(us.firstname,' ',us.lastname) as user_name, concat(pr.fname,' ',pr.lname) AS pname, regions.name AS region_name, stations.name AS station_name FROM upload_files up INNER JOIN users us ON up.user_id = us.id INNER JOIN prisoners pr ON pr.prisoners_no = up.prisoners_no INNER JOIN regions ON regions.id = up.regions_id INNER JOIN stations ON stations.id = up.stations_id WHERE up.regions_id = $regions_id AND up.stations_id = $stations_id GROUP BY up.name DESC") or die (mysqli_error($conn));
      while($file=mysqli_fetch_array($query)){
         $id =  $file['id'];
         $name =  $file['name'];
         $size =  $file['size'];
         $uploads =  $file['user_name'];
        
         $time =  $file['timers'];
         $download =  $file['download'];
         $pname =  $file['pname'];
         $prisoners_no =  $file['prisoners_no'];
         $pname =  $file['pname'];
         $pname =  $file['pname'];
         $station_name =  $file['station_name'];
         $region_name =  $file['region_name'];
    
      ?>

                <td width="20%"><?php echo  $name; ?></td>
                <td><?php echo floor($size / 1000) . ' KB'; ?></td>
                <td><?php echo $prisoners_no; ?></td>
                <td><?php echo $pname; ?></td>

                <td><?php echo $station_name; ?></td>
                <td><?php echo $region_name; ?></td>
                <td><?php echo $uploads; ?></td>

                <td><?php echo $time; ?></td>
                <td><?php echo $download; ?></td>


                <td><a href='downloads.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-primary"><i
                            class="fa fa-download"></i></a>
                    <a href="uploads/<?php echo  $name; ?>"><button class='btn btn-info' value=''><i
                                class="fas fa-eye"></i></button></a>
                    <a href='delete.php?id=<?php echo $id; ?>' class="btn btn-sm btn-outline-danger"><i
                            class="fa fa-trash"></i></a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!--Copyright-->
<hr>
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
        //"destroy":true;
    });
})
</script>
<!-- SCRIPTS -->
<!-- JQuery -->

<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
<script type="text/javascript" src="data/moment.min.js"></script>
<script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
<script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
<script type="text/javascript" src="data/datetime-moment.js"></script>