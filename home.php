<script type="text/javascript" src="assets/dist/js/apexCharts.min.js"></script>
<?php include('db_connect.php') ?>
<?php $stations_id = $_SESSION['login_stations_id']; ?>

<div class="row">
  <div class="col-md-3">
    <div class="card card-outline card-secondary">
      <a href="./index.php?page=hts/reports/hts_appointments">
        <h3 style="color:#3c8dbc; text-align: center;">
          <?php echo $conn->query("SELECT id from hiv_test where app_date = current_date();")->num_rows; ?>
        </h3>
        <p style="color:grey; font-weight: bold; text-align: center;">Today's HTS Appointments</p> 
      </a>
    </div>
  </div> 
  <div class="col-md-3">
    <div class="card card-outline card-secondary">
      <a href="./index.php?page=tb/reports/tb_appointments">
        <h3 style="color:#3c8dbc; text-align: center;">
          <?php echo $conn->query("SELECT id from tb_test WHERE app_date = current_date();")->num_rows; ?>
        </h3>
        <p style="color:grey; font-weight: bold; text-align: center;">Today's TB Appointments</p>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-outline card-secondary">
      <a href="./index.php?page=total_remandees">
        <h3 style="color:#3c8dbc; text-align: center;">
          <?php echo $conn->query("SELECT id from prisoners WHERE stations_id = $stations_id AND status=2")->num_rows; ?>
        </h3>
        <p style="color:grey; font-weight: bold; text-align: center;">Total STI Appointments</p>
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-outline card-secondary">
      <a href="./index.php?page=total_discharged">
        <h3 style="color:#3c8dbc; text-align: center;">
          <?php echo $conn->query("SELECT id from prisoners WHERE stations_id = $stations_id AND status=3")->num_rows; ?>
        </h3>
        <p style="color:grey; font-weight: bold; text-align: center;">Total Discharged</p>
      </a>
    </div>
  </div>
</div>


      <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-secondary">
          <div class="card-header">
            <b style="text-align: center;">Quarterly visits</b>
          </div>
         
          <div class="card-body p-0">
            <div class="table-responsive">
            <div id="chart"></div>

<script>
  $(document).ready(function(){
    $('#home_data').dataTable({
        dom: 'lBfrtip',
         //dom: 'QlBfrtip',
        "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
            ,
            'colvis'
        ]
    } );
  })
  
</script>

<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>


      </div>

      <script>
$(document).ready(function() {
  $.ajax({
        type: 'POST',
        url: 'ajax.php?action=curr_visits',
        dataType: 'json',
        success: function(response) {
            // Prepare data for ApexCharts
            var series = [];
            var categories = [];
            $.each(response, function(program, data) {
                var programData = {
                    name: program,
                    data: []
                };
                $.each(data, function(index, item) {
                    programData.data.push(item.visit_count);
                    if ($.inArray(item.month, categories) === -1) {
                        categories.push(item.month);
                    }
                });
                series.push(programData);
            });

            // Render the chart using ApexCharts
            var options = {
                chart: {
                    type: 'bar',
                    height: 450
                },
                xaxis: {
                    categories: categories
                },
                yaxis: {
                    stepSize: 10
                },
                series: series
            };
            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        }
    });
});
</script>
