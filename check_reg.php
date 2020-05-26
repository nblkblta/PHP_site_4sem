<?
	$login = filter_var(trim($_POST['login']));
	$name = filter_var(trim($_POST['name']));
	$password = filter_var(trim($_POST['password']));
	$password_ch = filter_var(trim($_POST['password_ch']));
	$email = filter_var(trim($_POST['email']));
	include 'db.php';
	$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
	$row = $result->fetch_assoc();
	if(count($row)!=0){
		echo "Еmail занят";
		exit();
	}
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
	$row = $result->fetch_assoc();
	if(count($row)!=0){
		echo "login занят";
		$mysql->close();
		exit();
	}
	if(mb_strlen($email)<1 || mb_strlen($email)>90) {//поискать проверку Email
		echo "Недопустимый email";
		$mysql->close();
		exit();
	}
		else if(mb_strlen($login)<5 || mb_strlen($login)>90) {
		echo "Недопустимая длина логина";
		$mysql->close();
		exit();
	} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50){
		echo "Недопустимая длина имени";
		$mysql->close();
		exit();
	} else if (mb_strlen($password) < 8 ){
		echo "Пароль должен быть больше 8 символов";
		$mysql->close();
		exit();
	} else if ($password != $password_ch ){
		echo "Пароли не совпадают";
		$mysql->close();
		exit();
	}
	$password = md5($password."dsghshssrhheee");
	
	$mysql->query("INSERT INTO `users` (`login`, `password`, `name`, `status`, `email`) VALUES ('$login','$password','$name',0,'$email')");
	$mysql->close();
	$base_url = "site/";
	echo "Вам на почту отправлено письмо с подтверждением регистрации";
	$Theme = "Активация аккаунта";
	$Body= "Здравствуйте! <br/> <br/> Мы должны убедиться в том, что вы реальный пользователь. Пожалуйста, подтвердите адрес вашей электронной почты, и можете начать использовать ваш аккаунт. <br/> <br/> <a href=\"".$base_url."activation.php?email=".$email."\">".$base_url."activation.php?email=".$email."</a>";
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	mail ($email, $Theme, $Body, $headers);
	header('Location:/auth.php')
 ?>