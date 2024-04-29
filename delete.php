
<?php

 require_once("db_connect.php");

$id = mysqli_real_escape_string($conn,$_GET['id']);


mysqli_query($conn,"DELETE FROM upload_files WHERE id ='$id'")or die(mysql_error());
echo "<script type='text/javascript'>alert('Deleted File!');document.location='index.php?page=add_document'</script>";
?>
