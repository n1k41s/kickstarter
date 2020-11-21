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
		$query = mysqli_query($con, "SELECT * FROM projects WHERE user='Jon Keller'");
	 ?>
	<div class="mx-auto" style="width: 400px">
			<h1 style="font-size: 20px">ДОБАВЛЕНИЕ НОВОГО ПРОЕКТА</h1>
			<form action="insertProject.php">
            <div>
                <input type="" name="user"  placeholder="User">
            </div>
			<div>
				<input type="" name="img"  placeholder="IMG">
			</div>
       		<div>
       			<input type="" name="title"  placeholder="Заглавие">
       		</div>
       		<div>
       			<input type="" name="description"  placeholder="Описание">
       		</div>
            <div>
                <input type="" name="place"  placeholder="Место">
            </div>
            <div>
                <input type="" name="goal"  placeholder="Цель">
            </div>
       		<button style="background-color: green;height: 30px;border-radius: 5px;border: 0px">
       		 	<p style="color: white">
       				Добавить проект
       			</h1>
       		</button>
       		</form>
       		<a href="index.php">
       		<button style="background-color: red;height: 30px;border-radius: 5px;border: 0px">
       			<p style="color: white">
       				НАЗАД
       			</p>
       		</button>
       		</a>
		</div>
		<div class="mt-5 mx-auto" style="width: 1500px">

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
		 	<form method="GET" action="delete.php">
		 		<button style="background-color: orange;height: 30px;border-radius: 5px;border: 0px;color: white" name="" value=""></a>Редактировать</button>
		 		<button style="background-color: red;height: 30px;border-radius: 5px;border: 0px;color: white" name="AIDI" value='<?php echo $stroka["id"] ?>'></a>Удалить</button>
		 	</form>	
		 	<form method="GET" action="updateDonate2.php">
		 		<input style="display: none" name="aidi" value='<?php echo $stroka["id"] ?>'>
		 		<button  name="donate" class="bg-success" style="color: white;border-radius: 3px;border: 0px">Back this project +10$</button>
		 	</form>
		 </div>

		 <?php 
		}
		  ?>
	</div>
</body>
</html>