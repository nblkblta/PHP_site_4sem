<? 
	include 'db.php';
    include 'menu.php';

	$id = $_GET['id'];
	$res=$mysql->query("SELECT * FROM `users` WHERE `id`='$id'")->fetch_assoc();
	$name = $res['name'];
	$email = $res['email'];
	$lastname = $res['lastname'];
	$birthday = $res['birthday'];
	$avatar = $res['avatar'];
	$mysql->close();

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Профиль</title>
	<link rel="stylesheet" href="css/styleprofile.css">	
</head>

<body>
	<div align="center" style="margin-top: 50px;">
		<div class="header">
			<p class="cont"><img src=<?echo $avatar?> ></p>		
		</div>

		<div class="header">
			<p class="text_2" >Профиль пользователя: <b class="bb"> <?echo $name; ?></b></p>
			<div class="blocks">
				<div class="block" ><b class="num">10</b><br> статьи</div>
				<div class="block" ><b class="num">4</b><br> комментарии</div>			
			</div>
			<hr>
		</div>
   </div>

   <div>
   		<p class="text_3" > <b>Основная информация</b></p>

   		<div class="text_4" >Имя:  <b class="data"> <?=$name; ?></b> </div> 

   		<div class="text_4">Фамилия: <b class="data"> <?=$lastname; ?></b></div>
   		<div class="text_4">Дата рождения:<b class="data"> <?=$birthday; ?></b></div>
   		<div class="text_4">Email:<b class="data"> <?=$email; ?></b></div>
   		<?if ($_COOKIE['id']=$id):?>
   		<form action="red_profile.php" method="post">
   			<input type='hidden' name='id' value=<?echo $id?>>
   			<input type='hidden' name='name' value=<?echo $name?>>
   			<input type='hidden' name='lastname' value=<?echo $lastname?>>
   			<input type='hidden' name='birthday' value=<?echo $birthday?>>
   			<button  type="submit">Редактировать профиль</button>
   		<?endif;?>

   </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>