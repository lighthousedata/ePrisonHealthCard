<?php
$regions_idArr = json_decode($_POST["regions_id"]);
$stations_idArr = json_decode($_POST["stations_id"]);
$prisoners_noArr = json_decode($_POST["prisoners_no"]);
$case_noArr = json_decode($_POST["case_no"]);
$idArr = json_decode($_POST["pid"]);
$nameArr = json_decode($_POST["name"]);
$sentenceArr = json_decode($_POST["sentence"]);
$typeArr = json_decode($_POST["type"]);
$con=mysqli_connect("localhost","root","","id2021_primis_2022");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
for ($i = 0; $i < count($nameArr); $i++) {
if(($nameArr[$i] != "")){ /*not allowing empty values and the row which has been removed.*/
$sql="INSERT INTO offences (prisoner_case_id, prisoners_no, case_no, stations_id, regions_id, name, sentence, type)
VALUES
('$idArr[$i]','$prisoners_noArr[$i]','$case_noArr[$i]','$stations_idArr[$i]','$regions_idArr[$i]','$nameArr[$i]','$sentenceArr[$i]','$typeArr[$i]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
else{
Print "Success";
mysqli_close($con);	
}
}
}

?>
