<script>
$(document).ready(function() {
    setTimeout(function() {
        $.get("admin_class.php", function(data) {
            if (data == 0) window.location.href = "ajax.php?action=logout";
        });
    }, 1 * 60 * 1000);
});
</script>
<?php include'db_connect.php' ?>
<div class="col-lg-12">
    <div class="card card-outline card-secondary">
        <div class="card-body">


            <?php require "pharmacy/assets/function.php" ?>

            <?php require "pharmacy/assets/autoloader.php" ?>

            <?php 
if (isset($_GET['catId']))
{
  $catId = $_GET['catId'];
  $array = $conn->query("select * from categories where id='$catId'");
  $catArray =$array->fetch_assoc();
  $catName = $catArray['name'];
  $stockArray = $conn->query("select * from drugs where catId='$catArray[id]'");
 
}
else
{
  $catName = "All Drugs";
  $stockArray = $conn->query("select * from drugs");
}
  include 'pharmacy/assets/bill.php';
 ?>


            <div class="content">
                <ol class="breadcrumb ">

                    <li><a href="./index.php?page=pharmacy" class="btn btn-default" style="color:#CD853F;"><i
                                class="fas fa-tachometer-alt" aria-hidden="true"></i>Pharmacy </a></li>
                    <li class="active"><a class="btn btn-default" href="./index.php?page=all_drugs"
                            style="color:lightskyblue; font-weight: bold;"><?php echo $catName ?>

                        </a></li>
                    <li><a href="./index.php?page=new_drug" class="btn btn-default" style="color:#CD853F;"><i
                                class="fas fa-plus" aria-hidden="true"></i>Add New Drug </a></li>
                </ol>

                <div class="tableBox">
                    <table id="list" class="table table-bordered table-striped">
                        <thead>
                            <th style="color:#CD853F;">#</th>
                            <th style="color:#CD853F;">Code Number</th>
                            <th style="color:#CD853F;">Name</th>
                            <th style="color:#CD853F;">Quantity</th>
                            <th style="color:#CD853F;">Critical Amount</th>
                            <th style="color:#CD853F;">Unit</th>
                            <th style="color:#CD853F;">Discription</th>
                            <th style="color:#CD853F;">Action</th>

                        </thead>
                        <tbody>
                            <?php $i=0;
        while ($row = $stockArray->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['id'];
        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['code_number']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['critical_amount']; ?></td>
                                <td><?php echo $row['unit']; ?></td>
                                <td><?php echo $row['description']; ?></td>

                                <td class="text-center">
                                    <a class="dropdown-item refer_to_other_departments"
                                        data-id='<?php echo $row['id'] ?>' data-id='<?php echo $row['id'] ?>'
                                        data-prisoners_no='<?php echo ucwords($row['code_number']); echo(' :: '); echo ucwords($row['name']);?>'
                                        href="javascript:void(0)"><button class="btn btn-warning btn-sm pull-right"><i
                                                class="fa fa-plus">Add Stock</i></button></a>
                </div>
                </td>


                </tr>
                <?php
        }
       ?>
                </tbody>
                </table>
            </div>

        </div> <!-- ending tag for content -->

    </div> <!-- ending tag for margin left -->
</div>
</div>
</div>


<script type="text/javascript">
function addInBill(id, place) {
    var value = $("#counter").val();
    value++;
    var selection = 'selection' + place;
    $("#bill").fadeIn();
    $("#counter").val(value);
    $("#" + selection).html("selected");
    $.post('called.php?q=addtobill', {
        id: id
    });

}
$(document).ready(function() {
    $(".rightAccount").click(function() {
        $(".account").fadeToggle();
    });
    $("#dataTable").DataTable();

});
</script>

<script>
$(document).ready(function() {
    $('#list').dataTable({
        dom: 'Bfrtip',
        //dom: 'lQlBfrtip',
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
    $('.refer_to_other_departments').click(function() {
        uni_modal("<i class='fa fa-plus'></i> Quantity for: " + $(this).attr('data-name'),
            "manage_my_drugs.php?id=" + $(this).attr('data-id') + "&id=" + $(this).attr('data-id'),
            'large')
    })
})

function delete_project($id) {
    start_load()
    $.ajax({
        url: 'ajax.php?action=delete_project',
        method: 'POST',
        data: {
            id: $id
        },
        success: function(resp) {
            if (resp == 1) {
                alert_toast("Data successfully deleted", 'success')
                setTimeout(function() {
                    location.reload()
                }, 1500)

            }
        }
    })
}
</script>


<script type="text/javascript" src="data/pdfmake.min.js"></script>
<script type="text/javascript" src="data/vfs_fonts.js"></script>
<script type="text/javascript" src="data/datatables.min.js"></script>
<script type="text/javascript" src="data/moment.min.js"></script>
<script type="text/javascript" src="data/dataTables.dateTime.min.js"></script>
<script type="text/javascript" src="data/dataTables.searchBuilder.min.js"></script>
<script type="text/javascript" src="data/datetime-moment.js"></script>