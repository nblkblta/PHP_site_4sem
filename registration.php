<? $title="Регистрация";
include 'header.php';
include 'menu.php';?>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/reg.css" >
</head>
<body>
	<div class="regist" ></div>
	<form name="reg" action="check_reg.php" method="post">
		<input type="text" class="form-control" name="name"  placeholder="Имя"></input><br />	
		<input type="email" class="form-control" name="email" placeholder="E-mail"><br/>
		<input type="text" class="form-control" name="login" placeholder="Логин"><br/>	
		<input type="password" class="form-control" name="password"  placeholder="Пароль"></input><br />	
		<input type="password"  class="form-control" name="password_ch"  placeholder="Пароль еще раз"></input><br />
		<input type=button class="but" id="send" value="Зарегестрироваться"></input>
	</form>
	<div id='message' style='color: white'></div>
	<script src="js/reg.js"></script>
</body>
</html>