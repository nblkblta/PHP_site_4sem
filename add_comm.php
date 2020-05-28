<? 
	include 'db.php';
	$id_post = $_POST['id_post'];
	$text = filter_var(trim($_POST['text']));
	if(mb_strlen($text)<1 || mb_strlen($text)>140) {
		echo "Недопустимый размер комментария";
		$mysql->close();
		exit();
	}
	$name = $_COOKIE["name"];
	$id_user = $_COOKIE["id_user"];
	$date=date("y.m.d");
	include 'db.php';
	$mysql->query("INSERT INTO `comments` (`id_post`, `name`, `text`, `date`, `id_user`) VALUES ('$id_post','$name','$text','$date','$id_user')");
	$mysql->close();
	?>