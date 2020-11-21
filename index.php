<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','kickstar');
		$query = mysqli_query($con, "SELECT * FROM projects");
	 ?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 style="color: green">Explore <?php echo mysqli_num_rows($query) ?> projects <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			for ($i=0;$i< mysqli_num_rows($query); $i++){
				$stroka = $query->fetch_assoc();
		 ?>

		 <div class="col-4" style="margin-top: 50px">
		 	<div style="height: 200px;background-image:url(<?php echo $stroka['img'] ?>);background-size: cover;background-position: center; ">
		 		
		 	</div>
		 	<h1>
		 		<?php 
		 			echo $stroka['title'];
		 		 ?>
		 	</h1>
		 	<p>
		 		<?php 
		 			echo $stroka['description'];
		 		 ?>
		 	</p>
		 	<p style="margin-top: 30px">
		 		<?php 
		 			echo $stroka['place'];
		 		 ?>
		 	</p>
		 	<p style="margin-top: 30px">
		 		<?php 
		 			echo $stroka['goal'] . "$" . "goal"
		 		 ?>
		 	</p>
		 	<p style="margin-top: 15px;color: green">
		 		<?php 
		 			echo $stroka['donated'] . "$" . "pledged"
		 		 ?>
		 	</p>
		 	<form method="GET" action="updateDonate.php">
		 		<input style="display: none" name="aidi" value='<?php echo $stroka["id"] ?>'>
		 		<button  name="donate" class="bg-success" style="color: white;border-radius: 3px;border: 0px">Back this project +10$</button>
		 	</form>
		 </div>

		 <?php 
		}
		  ?>
	</div>

</div>
</body>
</html>