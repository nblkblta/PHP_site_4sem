<? 
include 'db.php'; 
date_default_timezone_set('Asia/Vladivostok');
$id = $_POST['id']; 

$name = filter_var(trim($_POST['name'])); 
if (mb_strlen($name) < 3 || mb_strlen($name) > 50){ 
	echo "Недопустимая длина имени";
	$mysql->close();
	exit();
} else {
	print_r("имя");
	$mysql->query("UPDATE `users` SET `name`='$name' WHERE `users`.`id`='$id'"); 
} 

$lastname = filter_var(trim($_POST['lastname'])); 
if (mb_strlen($lastname) < 3 || mb_strlen($lastname) > 50)
{ 
	echo "Недопустимая длина фамилии";
	$mysql->close();
	exit();
} else {
	print_r("фамилия");
	print_r($mysql->query("UPDATE `users` SET `lastname`='$lastname' WHERE `users`.`id`='$id'")); 
} 

$birthday = $_POST['birthday']; 
if(!($birthday=='')){ 
	if ($birthday>date("d-m-Y",time()-(60*60*24*365*14))){
		echo 'Некорректная дата рождения';
		$mysql->close();
		exit();
	}
	print_r("Дата рождения");
	$mysql->query("UPDATE `users` SET `birthday` = '$birthday' WHERE `users`.`id` = '$id'"); 
} else {
	echo 'Некорректная дата рождения';
	$mysql->close();
	exit();
}

$image = $_POST['image']; 
if(!($image=='')){ 
	$path = 'Image/'.time(); 
	move_uploaded_file($_FILES['image']['tmp_name'], $path); 
	print_r("Фото");
	$mysql->query("UPDATE `users` SET `avatar`='$path' WHERE `users`.`id`='$id'");
} 
echo "Изменено успешно";
$mysql->close(); 
?>