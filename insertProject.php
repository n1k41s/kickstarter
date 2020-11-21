<?php 
	$con = mysqli_connect("127.0.0.1","root","","kickstar");
	$text_zaprosa_vstavit = "INSERT INTO projects (img, title, description, place, goal, user)
	VALUES ('{$_GET["img"]}', '{$_GET["title"]}', '{$_GET["description"]}', '{$_GET["place"]}', '{$_GET["goal"]}', '{$_GET["user"]}')";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	header("location: index.php");
	exit;
	
?>