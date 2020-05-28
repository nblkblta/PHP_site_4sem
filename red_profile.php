<? $title="Редактировать профиль";
include 'header.php';
include 'menu.php';
include  'db.php';
?>
<head>
	<link rel="stylesheet" href="css/reg.css" >
</head>
<body>
	<div class="container mt-4" >	
		<form name="red_profile" id="red_profile" method="post" enctype="multipart/form-data">
		<input type='hidden' name='id' value=<?echo $_POST['id']?>> </input><br/>
		<input type="text" class="form-control" name="name" value=<?echo $_POST['name']?>></input><br/>
		<input type="text" class="form-control" name="lastname"  value=<?echo $_POST['lastname']?>></input><br/>	
		<input type="date" class="form-control" name="birthday" id='birthday' value=<?echo $_POST['birthday']?>></input><br/>
		<input type="file" class="form-control" name="image" id='image' placeholder="Аватар"></input><br/>		
		<input class="but" id='send' type="button" value="Изменить"></input>
		<div id="message"></div>
	</form>
	</div>

	<script src="js/red_profile.js"></script>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>