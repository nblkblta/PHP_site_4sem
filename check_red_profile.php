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
	$mysql->query("UPDATE users SET name='$name' WHERE id='$id'"); 
} 

$lastname = filter_var(trim($_POST['lastname'])); 
if (mb_strlen($lastname) < 3 || mb_strlen($lastname) > 50)
{ 
	echo "Недопустимая длина фамилии";
	$mysql->close();
	exit();
} else {
	$mysql->query("UPDATE users SET lastname='$lastname' WHERE id='$id'"); 
} 

$birthday = $_POST['birthday']; 
if(!($birthday=='')){ 
	if ($birthday>date(time()-189216000)){
		echo 'Некорректная дата рождения';
		$mysql->close();
		exit();
	}
	$mysql->query("UPDATE users SET birthday='$birthday' WHERE id='$id'"); 
} else {
	echo 'Некорректная дата рождения';
	$mysql->close();
	exit();
}

$image = $_POST['image']; 
if(!($image=='')){ 
	$path = 'Image/'.time(); 
	move_uploaded_file($_FILES['image']['tmp_name'], $path); 
	$mysql->query("UPDATE users SET avatar='$path' WHERE id='$id'");
} 
echo "Изменено успешно";
$mysql->close(); 
?>