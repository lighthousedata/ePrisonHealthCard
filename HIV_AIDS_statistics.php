<?php include'db_connect.php' ?>
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
 #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('img1/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
#loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('img1/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
  </style>
<div class="row">
      <div class="col-md-12">

               <!--TABLE FOR HIV AIDS-->
  <script src="jsCharts/jquery.min.js"></script>
<script type="text/javascript">
  $(window).on('load', function(){
    //you remove this timeout
    setTimeout(function(){
          $('#loader').fadeOut('slow');  
      });
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
  });
</script>

     <div class="row">
        <div class="col-md-7">
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <?php
                  $stations_id = $_SESSION['login_stations_id'];
                    $regions_id = $_SESSION['login_regions_id'];

                    if($_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){

                    $query = "SELECT stations.name AS stations, count(*) as number FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() hiv_test.stations_id = $stations_id GROUP BY stations.name";
                    }
                    elseif($_SESSION['login_type'] == 5){

                      $query = "SELECT stations.name AS stations, count(*) as number FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() AND hiv_test.regions_id = $regions_id GROUP BY stations.name";
                    }
                    elseif($_SESSION['login_type'] == 1){

                      $query = "SELECT stations.name AS stations, count(*) as number FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() GROUP BY stations.name";
                    }
                             $result = mysqli_query($conn,$query);
                             $chart_data="";
                             while ($row = mysqli_fetch_array($result)) { 
                     
                                $name[]  = $row['stations']  ;
                                $counts[] = $row['number'];
                            }
                     
                     
                     
             
                     
                    ?>
                <CENTER><h6 class="page-header" >HIV AIDS Tested Positive Per Station as of Today</h6></CENTER>  
      

              <canvas id="myChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>

       <div class="col-md-5">
        <div class="card">

            <!--Card content-->
            <div class="card-body">
            <div class="card-header text-center">
              
              <CENTER><h6 class="page-header" >HIV AIDS Tested Positive Per Station as of Today (Pie Chart)</h6></CENTER> 
            </div>

            <!--Card content-->
            <div class="card-body">

<?php  
if($_SESSION['login_type'] == 2 || $_SESSION['login_type'] == 4){

                    $query = "SELECT stations.name AS station_pie, count(*) as number_pie FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() hiv_test.stations_id = $stations_id GROUP BY stations.name";
                    }
                    elseif($_SESSION['login_type'] == 5){

                      $query = "SELECT stations.name AS station_pie, count(*) as number_pie FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() AND hiv_test.regions_id = $regions_id GROUP BY stations.name";
                    }
                    elseif($_SESSION['login_type'] == 1){

                      $query = "SELECT stations.name AS station_pie, count(*) as number_pie FROM stations JOIN hiv_test ON stations.id = hiv_test.stations_id WHERE hiv_test.testing = 'Positive' AND DATE(hiv_test.service_date) = CURDATE() GROUP BY stations.name";
                    } 
 $result = mysqli_query($conn, $query);

 ?> 
<script type="text/javascript" src="jsCharts/pie_chart_loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['station_pie', 'number_pie'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["station_pie"]."', ".$row["number_pie"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     // title: 'Percentage of Male and Female Employee',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
 
                <div id="piechart" style="width: 100%; height: 100%;"></div>  
               

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="jsCharts/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="jsCharts/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="jsCharts/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="jsCharts/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
     data: {
            labels:<?php echo json_encode($name); ?>,
            datasets: [{
                      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360", "#6ae27e", "#dc69e2", "#687be2", "#e28868", "#6c68e2", "#ab68e2", "#e268b7"],
                      // hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],
                data:<?php echo json_encode($counts); ?>,
            }]
        },
      options: {
          legend: {
            display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]

        }
      }
    });



    //pie
    var ctxP = document.getElementById("piechart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });
  </script>

</div>
</div>
</div>
</div>
 </div>
 