<style>
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

<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 style="color:#3c3838; text-align: center;">Filter</h3>
    <hr>
    <form id="filterForm" class="">
      <div class="row mb-3">
        <label for="start_date" class="col-sm-6 col-form-label">Registered between</label>
        <div class="col-sm-6">
          <input type="date" name="start_date" id="start_date" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="end_date" class="col-sm-6 col-form-label">and</label>
        <div class="col-sm-6">
          <input type="date" name="end_date" id="end_date" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="entry_type" class="col-sm-6 col-form-label">on</label>
        <div class="col-sm-6">
          <select name="entry_type" class="form-control">
            <option value="">Entry type</option>
            <option value="remandee">Remandee</option>
            <option value="convict">Convict</option>
            <option value="child">Child</option>
          </select>
        </div>
      </div>
      <button type="button" id="generateBtn" class="btn btn-primary mb-3">Generate report</button>
    </form>
  </div>
  <div class="card-body">
    <table class="table table-hover table-condensed" id="registrations">
      <thead>
        <tr>
          <th>PR-NO.</th>
          <th>PR-NAME</th>
          <th>DOB</th>
          <th>GENDER</th>
          <th>ENROLL-DATE</th>
          <th>CELL</th>
          <th>ENTRY-STATUS</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<style>
  table p {
    margin: unset !important;
  }
  table td {
    vertical-align: middle !important;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
  // Initialize the DataTable and store the reference in a variable
  var table = $('#registrations').DataTable({
    dom: 'lBfrtip',
    buttons: [
      {
        extend: 'collection',
        text: 'Export',
        buttons: ['copy', 'excel', 'csv', 'pdf', 'print']
      },
      'colvis'
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
        url: 'ajax.php?action=registrations',
        data: formData,
        dataType: 'json',
        success: function (response) {
          // Clear the DataTable data before adding new rows
          table.clear().draw();

          // Use DataTables row.add() method to add each row from the AJAX response
          $.each(response, function (index, row) {
            var action = "<a type='button' class='btn btn-default btn-sm btn-flat border-secondary wave-effect text-info' href='?page=dashboard&pid=" + row.id + "'>" +
                          "<i class='fas fa-eye'></i>" +
                          "</a>";
            
            // Add row data to DataTable
            table.row.add([
              row.prisoners_no,
              row.pname,
              row.dob,
              row.gender,
              row.entry_date,
              row.cell,
              row.status,
              action
            ]).draw();
          });
        }
      });
    }
  });
});

</script>
<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
<script type="text/javascript" src="data/moment.min.js"></script>
<script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
<script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
<script type="text/javascript" src="data/datetime-moment.js"></script>
