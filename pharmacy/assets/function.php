<?php 


function siteTitle()
{	
	global $conn;
	$array = $conn->query("select * from site where id='1'");
	$row = $array->fetch_assoc();
	return $row['title'];
}
function siteName()
{	
	global $conn;
	
	$array = $conn->query("select * from site where id='1'");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function adminName()
{	
	global $conn;
	
	$array = $conn->query("select * from users where id='$_SESSION[userId]'");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function getAdminName($id)
{	
	global $conn;
	
	$array = $conn->query("select * from users where id='$id'");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function getAllCat()
{	
	global $conn;
	
	$array = $conn->query("select * from categories");
	while($row = $array->fetch_assoc())
	{
		echo "<option value='$row[id]'>$row[name]</option>";
	}
	
}

 ?>