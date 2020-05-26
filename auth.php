<? $title="Авторизация";
include 'header.php';
include 'menu.php';?>

<head>
	
	<link rel="stylesheet" href="reg.css" >
</head>

<body>
	<div class="container mt-4" ></div>
	<form name="reg" action="check_auth.php" method="post">
		<input type="text" class="form-control" name="login" placeholder="Логин"><br/>
		<input type="password" class="form-control" name="password"  placeholder="Пароль"></input><br />	
		<button class="but" type="submit">Авторизация</button>
	</form>
</body>
</html>