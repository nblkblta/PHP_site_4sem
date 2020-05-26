<? $title="Редактировать профиль";
include 'header.php';
include 'menu.php';
include  'db.php';
?>
<head>
	<link rel="stylesheet" href="reg.css" >
</head>
<body>
	<div class="container mt-4" >	
		<form name="new_post" action="check_red_profile.php" method="post" enctype="multipart/form-data">
		<!--<input type='hidden' name='id' value=<?echo $_POST['id']?>> </input><br/>
		<p style="color: White">Имя:</p>
   		<input type='text' name='name' value=<?echo $_POST['name']?>></input><br/>
   		<p style="color: White">Фамилия:</p>
   		<input type='text' name='lastname' value=<?echo $_POST['lastname']?>></input><br/>
   		<p style="color: White">Дата рождения:</p>
   		<input type='date' name='birthday'></input><br/>
   		<br/>
		<input type="file"  name="image"  placeholder="Аватар" style='color: White'></input><br/><br/>-->	

		<input type='hidden' name='id' value=<?echo $_POST['id']?>> </input><br/>
		<input type="text" class="form-control" name="name" value="<?echo $_POST['name']?>"></input><br/>
		<input type="text" class="form-control" name="lastname"  value="<?echo $_POST['lastname']?>"></input><br/>	
		<input type="date" class="form-control" name="birthday"></input><br/>
		<input type="file" class="form-control" name="image"  placeholder="Аватар"></input><br/>		
		
		<button class="but" type="submit">Изменить</button>
	</form>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>