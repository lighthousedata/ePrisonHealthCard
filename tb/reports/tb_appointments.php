<?php include('db_connect.php') ?>

<!-- Info boxes -->

<?php $stations_id = $_SESSION['login_stations_id']; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <b style="text-align: center;">TB Appointments</b>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0 table-hover" id="home_data">
                        <thead>
                            <th style="color:#CD853F; font-size: 12px;"># <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>

                            <th style="color:#CD853F; font-size: 12px;">P-No. <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">NAME <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">GENDER <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">AGE <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">REGION <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">STATION <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">STATUS <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>
                            <th style="color:#CD853F; font-size: 12px;">ACTION <i class="fas fa-sort nav-icon"
                                    style="color:#CD853F; font-size:12px;"></i></th>


                        </thead>
                        <tbody>
                            <?php
                $i = 1;
                $stations_id = $_SESSION['login_stations_id'];
                $regions_id = $_SESSION['login_regions_id'];

                // if($_SESSION['login_type'] == 3 || $_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){

                 $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, r.name AS region_name, s.name AS station_name FROM prisoners p INNER JOIN tb_test t ON t.prisoners_no = p.id INNER JOIN regions r ON r.id = p.regions_id INNER JOIN stations s ON s.id = p.stations_id  where app_date = current_date() ORDER BY prisoners_no ASC;");
                  
                // }elseif($_SESSION['login_type'] == 5){

                //   $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, r.name AS region_name, s.name AS station_name FROM prisoners p INNER JOIN regions r ON r.id = p.regions_id INNER JOIN stations s ON s.id = p.stations_id  WHERE p.regions_id = $regions_id AND p.status = 1 AND  DATE(p.created_at) = CURDATE() ORDER BY prisoners_no ASC");

                // }elseif($_SESSION['login_type'] == 1){

                //  $qry = $conn->query("SELECT p.*, concat(p.fname, ' ', p.lname) AS pname, r.name AS region_name, s.name AS station_name FROM prisoners p INNER JOIN regions r ON r.id = p.regions_id INNER JOIN stations s ON s.id = p.stations_id  WHERE p.status = 1 AND  DATE(p.created_at) = CURDATE() ORDER BY prisoners_no ASC"); 
                // }
                
                  while($row= $qry->fetch_assoc()):
                 
                $userDob = $row['dob'];
                //Create a DateTime object using the user's date of birth.
                $dob = new DateTime($userDob);
                //We need to compare the user's date of birth with today's date.
                $now = new DateTime();
                //Calculate the time difference between the two dates.
                $difference = $now->diff($dob);
                //Get the difference in years, as we are looking for the user's age.
                $age = $difference->y;
                  ?>

                            <tr>
                                <td>
                                    <?php echo $i++ ?>
                                </td>
                                <td>
                                    <a>
                                        <?php echo ucwords($row['prisoners_no']) ?>
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <?php echo ucwords($row['pname']) ?>
                                    </a>

                                </td>
                                <td>
                                    <a>
                                        <?php echo ucwords($row['gender']) ?>
                                    </a>

                                </td>
                                <td>
                                    <a>
                                        <?php echo ($age) ?>
                                    </a>

                                </td>

                                <td>
                                    <a>
                                        <?php echo ucwords($row['region_name']) ?>
                                    </a>

                                </td>
                                <td>
                                    <a>
                                        <?php echo ucwords($row['station_name']) ?>
                                    </a>

                                </td>


                                <td><?php $stats=$row['status'];
                      if($stats==1){
                      ?>
                                    <span style="color: #CD853F;">CONVICT</span>
                                    <?php } if($stats==2)  { ?>
                                    <span style="color: #CD853F;">REMANDEE</span>
                                    <?php } ?>
                                </td>

                                <td class="text-center">
                                    <a type="button"
                                        class="btn btn-default btn-sm btn-flat border-secondary wave-effect text-info"
                                        href="?page=dashboard&pid=<?php echo $row['id'] ?>">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- div class="dropdown-menu" style="">
                                        <a class="dropdown-item view_health_data"
                                            href="#&id=< ?php echo $row['prisoners_no'] ?>"
                                            data-id="< ?php echo $row['id'] ?>">Prisoner Information</a>
                                        <div class="dropdown-divider"></div>
                                        < ?php if($_SESSION['login_type'] == 4 || $_SESSION['login_type'] == 1 || $_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 5): ?>
                                        <a class="dropdown-item view_prison_data" href="?page=dashboard&pid=< ?php echo $row['id'] ?>"
                                            data-id="< ?php echo $row['id'] ?>">Medical History</a>
                                        <div class="dropdown-divider"></div>
                                          <a class="dropdown-item delete_list" href="javascript:void(0)" data-id="< ?php //echo $row['id'] ?>">Delete</a>
                                        < ? php endif; ?>
                                    </div -->
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#home_data').dataTable({
            dom: 'lBfrtip',
            //dom: 'QlBfrtip',
            "buttons": [{
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                },
                'colvis'
            ]
        });
    })
    </script>

    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

    <script type="text/javascript" src="data/pdfmake.min.js"></script>
    <script type="text/javascript" src="data/vfs_fonts.js"></script>
    <script type="text/javascript" src="data/datatables.min.js"></script>


</div>