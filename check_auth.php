<?
	$login = filter_var(trim($_POST['login']));
	$password = filter_var(trim($_POST['password']));
	$password = md5($password."dsghshssrhheee");
	include 'db.php';
	$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
	$mysql->close();
	//ppppp
	$user = $result->fetch_assoc();
	if (count($user)==0) {
		echo "Такого пользователя не существует";
		exit();
	} else if ($user['status']==0){
		echo "Учетная запись не активирована";
		exit();
	}
	$name=$user["name"];
	$id=$user["id"];
	$status=$user["status"];
	setcookie('name', $name, time()+3600*24, "/");
	setcookie('id_user', $id, time()+3600*24, "/");
	setcookie('status', $status, time()+3600*24, "/");
	header('Location:/index.php');
 ?>