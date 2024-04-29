<?php 
$_SESSION['bill'] = array();
if (sizeOf($_SESSION['bill']) == '0') 
{
	$display = 'display:none';
}else
$display ='';
 ?>


<div class="well well-sm" id="bill" style="position: absolute;right: 111px;top: 55px;width: 255px;<?php echo $display ?>">
	
	<span class="badge"><input type="text" id="counter" value="<?php echo sizeOf($_SESSION['bill']); ?>" readonly style='width: 33px;color: black;padding:2px;border-radius: 5px;'></span> selected <a href="./index.php?page=dispensory"><button class="btn btn-primary btn-xs">View Cat</button></a>
<a href='clear.php'><button class="btn btn-danger btn-xs">Clear</button></a>
</div>