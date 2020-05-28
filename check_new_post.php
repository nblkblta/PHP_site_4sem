<?
	$title = filter_var(trim($_POST['title']));
	$text = filter_var(trim($_POST['text']));
	$image = $_POST['image'];
	$id_user = $_COOKIE['id_user'];
	date_default_timezone_set('Asia/Vladivostok');
	if (mb_strlen($title)<3 || mb_strlen($title)>90) {
		echo "Недопустимая длина заголовка";
		exit();
	} else if (mb_strlen($text) < 3 || mb_strlen($text) > 1000){
		echo "Недопустимая длина текста";
		exit();
	} 
	$date = date("y.m.d H:i:s") ;
	$mysql = new mysqli('localhost', 'root', '', 'site');
	$path = 'Image/'.time().$_FILES['image']['name']; 
	move_uploaded_file($_FILES['image']['tmp_name'], $path); 
	$mysql->query("INSERT INTO `posts` (`id_user`, `title`, `text`,`date`, `image`, `status`) VALUES ('$id_user','$title','$text','$date','$path', '0')");
	$mysql->close();
	echo "Пост успешно добавлен";
 ?>