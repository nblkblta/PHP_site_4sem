<? 
include 'db.php'; 
date_default_timezone_set('Asia/Vladivostok');
$id = $_POST['id']; 

$name = filter_var(trim($_POST['name'])); 
if (mb_strlen($name) < 3 || mb_strlen($name) > 50){ 
	echo "Недопустимая длина имени";
	$mysql->close();
	exit();
} 
	
$lastname = filter_var(trim($_POST['lastname'])); 
if (mb_strlen($lastname) < 3 || mb_strlen($lastname) > 50)
{ 
	echo "Недопустимая длина фамилии";
	$mysql->close();
	exit();
} 

$birthday = $_POST['birthday']; 
 
if ($birthday<date("d-m-Y",time()-(60*60*24*365*14))){
		echo 'Некорректная дата рождения1';
		$mysql->close();
		exit();
	}

$image = $_FILES['image']; 
if(!($image=='')){ 
	$path = 'Image/'.time().$_FILES['image']['name']; 
	move_uploaded_file($_FILES['image']['tmp_name'], $path); 
}

$mysql->query("UPDATE `users` SET `birthday` = '$birthday' WHERE `users`.`id` = '$id'");  
$mysql->query("UPDATE `users` SET `lastname`='$lastname' WHERE `users`.`id`='$id'"); 
$mysql->query("UPDATE `users` SET `name`='$name' WHERE `users`.`id`='$id'"); 
$mysql->query("UPDATE `users` SET `avatar`='$path' WHERE `users`.`id`='$id'");
echo "Изменено успешно";
$mysql->close(); 
?>