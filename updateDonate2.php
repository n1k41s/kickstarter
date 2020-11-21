<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kickstar');
	$query = mysqli_query($con, "SELECT * FROM projects WHERE id = '{$_GET['aidi']}' ");
	for ($i=0;$i< mysqli_num_rows($query); $i++){
		$stroka = $query->fetch_assoc();
	}
	$wut = $stroka['donated'] + 10;
	mysqli_query($con, "UPDATE projects SET donated='{$wut}' WHERE id='{$_GET["aidi"]}'");
	header('Location: acc.php');
 ?>
