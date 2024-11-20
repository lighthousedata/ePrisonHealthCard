<div class="container-fluid">
  <form id="filterForm">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="" class="control-label">Report</label><hr>
          <select class="form-control form-control-sm select2" name="report" required>
            <option></option>
            <option>HTS</option>
            <option>TB</option>
            <option>STI</option>
            <option>COVID19</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="" class="control-label">From</label><hr>
          <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="" class="control-label">To</label><hr>
          <input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date" required>
        </div>
      </div>
    </div>
    <br>
    <div class="card-footer border-top border-secondary">
      <div class="d-flex w-100 justify-content-center align-items-center">
        <button type="submit" id="generateBtn" name="fetch" class="btn btn-secondary">
          Generate Report
        </button>
      </div>
    </div>  
  </form>
</div>

<div class="col-lg-12">
  <div class="card card-outline card-secondary">
	<div class="card-header">
	  <div class="card-tools">
        <!--<a class="btn btn-block btn-sm btn-default btn-flat border-warning" href="./index.php?page=new_project"><i class="fa fa-plus"></i> Add New Lead</a>-->
	  </div>
	</div>

	<div class="card-body">
      <table id="disaggregationTable" class="display nowrap" style="width:100%">
        <thead>
          <tr>
            <th rowspan="2">INDICATOR</th>
            <th colspan="2">10yr-14yr</th>
            <th colspan="2">15yr-19yr</th>
            <th colspan="2">20yr-24yr</th>
            <th colspan="2">25yr-29yr</th>
            <th colspan="2">30yr-34yr</th>
            <th colspan="2">35yr-39yr</th>
            <th colspan="2">40yr-44yr</th>
            <th colspan="2">45yr-49yr</th>
            <th colspan="2">50+yr</th>
          </tr>
          <tr>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
            <th>M</th><th>F</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Total prison population for the reporting period (quarter)</td>
            <td id="pop_male_10_14">0</td><td id="pop_female_10_14">0</td>
            <td id="pop_male_15_19">0</td><td id="pop_female_15_19">0</td>
            <td id="pop_male_20_24">0</td><td id="pop_female_20_24">0</td>
            <td id="pop_male_24_29">0</td><td id="pop_female_24_29">0</td>
            <td id="pop_male_30_34">0</td><td id="pop_female_30_34">0</td>
            <td id="pop_male_35_39">0</td><td id="pop_female_35_39">0</td>
            <td id="pop_male_40_44">0</td><td id="pop_female_40_44">0</td>
            <td id="pop_male_45_49">0</td><td id="pop_female_45_49">0</td>
            <td id="pop_male_50+">0</td><td id="pop_female_50+">0</td>
          </tr>
          <tr>
            <td>Number Previously HIV+</td>
            <td id="prev_pos_male_10_14">0</td><td id="prev_pos_female_10_14">0</td>
            <td id="prev_pos_male_15_19">0</td><td id="prev_pos_female_15_19">0</td>
            <td id="prev_pos_male_20_24">0</td><td id="prev_pos_female_20_24">0</td>
            <td id="prev_pos_male_24_29">0</td><td id="prev_pos_female_24_29">0</td>
            <td id="prev_pos_male_30_34">0</td><td id="prev_pos_female_30_34">0</td>
            <td id="prev_pos_male_35_39">0</td><td id="prev_pos_female_35_39">0</td>
            <td id="prev_pos_male_40_44">0</td><td id="prev_pos_female_40_44">0</td>
            <td id="prev_pos_male_45_49">0</td><td id="prev_pos_female_45_49">0</td>
            <td id="prev_pos_male_50+">0</td><td id="prev_pos_female_50+">0</td>
          </tr>
          <tr>
            <td>Number previously HIV+ on ART</td>
            <td id="on_art_male_10_14">0</td><td id="on_art_female_10_14">0</td>
            <td id="on_art_male_15_19">0</td><td id="on_art_female_15_19">0</td>
            <td id="on_art_male_20_24">0</td><td id="on_art_female_20_24">0</td>
            <td id="on_art_male_24_29">0</td><td id="on_art_female_24_29">0</td>
            <td id="on_art_male_30_34">0</td><td id="on_art_female_30_34">0</td>
            <td id="on_art_male_35_39">0</td><td id="on_art_female_35_39">0</td>
            <td id="on_art_male_40_44">0</td><td id="on_art_female_40_44">0</td>
            <td id="on_art_male_45_49">0</td><td id="on_art_female_45_49">0</td>
            <td id="on_art_male_50+">0</td><td id="on_art_female_50+">0</td>
          </tr>
          <tr>
            <td>Number previously HIV+ not on ART</td>
            <td id="not_on_art_male_10_14">0</td><td id="not_on_art_female_10_14">0</td>
            <td id="not_on_art_male_15_19">0</td><td id="not_on_art_female_15_19">0</td>
            <td id="not_on_art_male_20_24">0</td><td id="not_on_art_female_20_24">0</td>
            <td id="not_on_art_male_24_29">0</td><td id="not_on_art_female_24_29">0</td>
            <td id="not_on_art_male_30_34">0</td><td id="not_on_art_female_30_34">0</td>
            <td id="not_on_art_male_35_39">0</td><td id="not_on_art_female_35_39">0</td>
            <td id="not_on_art_male_40_44">0</td><td id="not_on_art_female_40_44">0</td>
            <td id="not_on_art_male_45_49">0</td><td id="not_on_art_female_45_49">0</td>
            <td id="not_on_art_male_50+">0</td><td id="not_on_art_female_50+">0</td>
          </tr>
          <tr>
            <td>Number eligible for HTS (a-b)</td>
            <td id="eligible_male_10_14">0</td><td id="eligible_female_10_14">0</td>
            <td id="eligible_male_15_19">0</td><td id="eligible_female_15_19">0</td>
            <td id="eligible_male_20_24">0</td><td id="eligible_female_20_24">0</td>
            <td id="eligible_male_24_29">0</td><td id="eligible_female_24_29">0</td>
            <td id="eligible_male_30_34">0</td><td id="eligible_female_30_34">0</td>
            <td id="eligible_male_35_39">0</td><td id="eligible_female_35_39">0</td>
            <td id="eligible_male_40_44">0</td><td id="eligible_female_40_44">0</td>
            <td id="eligible_male_45_49">0</td><td id="eligible_female_45_49">0</td>
            <td id="eligible_male_50+">0</td><td id="eligible_female_50+">0</td>
          </tr>
          <tr>
            <td>Number tested for HIV</td>
            <td id="tested_male_10_14">0</td><td id="tested_female_10_14">0</td>
            <td id="tested_male_15_19">0</td><td id="tested_female_15_19">0</td>
            <td id="tested_male_20_24">0</td><td id="tested_female_20_24">0</td>
            <td id="tested_male_24_29">0</td><td id="tested_female_24_29">0</td>
            <td id="tested_male_30_34">0</td><td id="tested_female_30_34">0</td>
            <td id="tested_male_35_39">0</td><td id="tested_female_35_39">0</td>
            <td id="tested_male_40_44">0</td><td id="tested_female_40_44">0</td>
            <td id="tested_male_45_49">0</td><td id="tested_female_45_49">0</td>
            <td id="tested_male_50+">0</td><td id="tested_female_50+">0</td>
          </tr>
          <tr>
            <td>Number newly tested HIV+</td>
            <td id="tested_pos_male_10_14">0</td><td id="tested_pos_female_10_14">0</td>
            <td id="tested_pos_male_15_19">0</td><td id="tested_pos_female_15_19">0</td>
            <td id="tested_pos_male_20_24">0</td><td id="tested_pos_female_20_24">0</td>
            <td id="tested_pos_male_24_29">0</td><td id="tested_pos_female_24_29">0</td>
            <td id="tested_pos_male_30_34">0</td><td id="tested_pos_female_30_34">0</td>
            <td id="tested_pos_male_35_39">0</td><td id="tested_pos_female_35_39">0</td>
            <td id="tested_pos_male_40_44">0</td><td id="tested_pos_female_40_44">0</td>
            <td id="tested_pos_male_45_49">0</td><td id="tested_pos_female_45_49">0</td>
            <td id="tested_pos_male_50+">0</td><td id="tested_pos_female_50+">0</td>
          </tr>
          <tr>
            <td>Number newly tested HIV+ initiated on ART</td>
            <td id="tested_pos_on_art_male_10_14">0</td><td id="tested_pos_on_art_female_10_14">0</td>
            <td id="tested_pos_on_art_male_15_19">0</td><td id="tested_pos_on_art_female_15_19">0</td>
            <td id="tested_pos_on_art_male_20_24">0</td><td id="tested_pos_on_art_female_20_24">0</td>
            <td id="tested_pos_on_art_male_24_29">0</td><td id="tested_pos_on_art_female_24_29">0</td>
            <td id="tested_pos_on_art_male_30_34">0</td><td id="tested_pos_on_art_female_30_34">0</td>
            <td id="tested_pos_on_art_male_35_39">0</td><td id="tested_pos_on_art_female_35_39">0</td>
            <td id="tested_pos_on_art_male_40_44">0</td><td id="tested_pos_on_art_female_40_44">0</td>
            <td id="tested_pos_on_art_male_45_49">0</td><td id="tested_pos_on_art_female_45_49">0</td>
            <td id="tested_pos_on_art_male_50+">0</td><td id="tested_pos_on_art_female_50+">0</td>
          </tr>
          <tr>
            <td>Number previously HIV+ (not on ART) initiated on ART</td>
            <td id="prev_pos_new_on_art_male_10_14">0</td><td id="prev_pos_new_on_art_female_10_14">0</td>
            <td id="prev_pos_new_on_art_male_15_19">0</td><td id="prev_pos_new_on_art_female_15_19">0</td>
            <td id="prev_pos_new_on_art_male_20_24">0</td><td id="prev_pos_new_on_art_female_20_24">0</td>
            <td id="prev_pos_new_on_art_male_24_29">0</td><td id="prev_pos_new_on_art_female_24_29">0</td>
            <td id="prev_pos_new_on_art_male_30_34">0</td><td id="prev_pos_new_on_art_female_30_34">0</td>
            <td id="prev_pos_new_on_art_male_35_39">0</td><td id="prev_pos_new_on_art_female_35_39">0</td>
            <td id="prev_pos_new_on_art_male_40_44">0</td><td id="prev_pos_new_on_art_female_40_44">0</td>
            <td id="prev_pos_new_on_art_male_45_49">0</td><td id="prev_pos_new_on_art_female_45_49">0</td>
            <td id="prev_pos_new_on_art_male_50+">0</td><td id="prev_pos_new_on_art_female_50+">0</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<style>
    table p{
        margin: unset !important;
    }
    table td{
        vertical-align: middle !important
    }
</style>

<script>
    
$(document).ready(function() {
  $('#disaggregationTable').DataTable({
    scrollX: true,
    paging: false,
    searching: false,
    ordering: false,
    dom: 'QlBfrtip',
    "buttons": [
      {
        text: 'Export',
        buttons: [
          'copy',
          'excel',
          'csv',
          'pdf',
          'print'
        ]
      }
    ]
    });

    $('#generateBtn').on('click', function (event) {
    event.preventDefault();
    const startDate = $('#start_date').val();
    const endDate = $('#end_date').val();

    if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
      alert("Start date should not be greater than end date.");
    } else {
      var formData = $('#filterForm').serialize();

      $.ajax({
        type: 'POST',
        url: 'ajax.php?action=hts_cascade',
        data: formData,
        dataType: 'json',
        success: function (response) {
            
          $.each(response, function (index, row) {
            $('#'+row.label).html(row.value);
          });

          $('#disaggregationTable').DataTable().draw();
        }
      });
    }
  });
  })
  
</script>


<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
  <script type="text/javascript" src="data/moment.min.js"></script>
 <script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
 <script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
  <script type="text/javascript" src="data/datetime-moment.js"></script>


<script>
  $(function () {
  $('[data-toggle="mytoggle"]').tooltip()
})
</script>

