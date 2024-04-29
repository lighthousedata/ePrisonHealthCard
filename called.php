
<?php 
session_start();
include 'pharmacy/assets/bill.php';
include 'db_connect.php';
if (isset($_REQUEST['q'])) 
{
	if ($_REQUEST['q'] == 'addtobill') 
	{
		$id = $_REQUEST['id'];
		
		$array = $conn->query("select * from inventeries where id = '$id'");
    	$row = $array->fetch_assoc();
		$code_number = $row['code_number'];
		$name = $row['name'];
		$description = $row['description'];
		
		$qty = '1';
		$item = array(
			'id' => $id,
			'code_number' => $code_number,
			'name' => $name,
			'description' => $description,
			'qty' => $qty

		);

		array_push($_SESSION['bill'],$item);
	}
}
if (isset($_GET['remove'])) 
{
	$id = $_GET['remove'];
    foreach ($_SESSION['bill'] as $key => $value) 
    {
      if($_SESSION['bill'][$key]['id'] == $id){
      	unset($_SESSION['bill'][$key]);
      	break;
      } 
    }
    header("location:./index.php?page=dispensory");
}
echo $_SESSION['bill'][2]['id'];
echo "<pre>";
print_r($_SESSION['bill']);
 ?>
