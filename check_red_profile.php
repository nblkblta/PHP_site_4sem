<? 
include 'db.php'; 
$id = $_POST['id']; 

$name = filter_var(trim($_POST['name'])); 
if(!($name=='')){ 
$mysql->query("UPDATE users SET name='$name' WHERE id='$id'"); 
} 
$lastname = filter_var(trim($_POST['lastname'])); 
if(!($lastname=='')){ 
$mysql->query("UPDATE users SET lastname='$lastname' WHERE id='$id'"); 
} 
$birthday = $_POST['birthday']; 
if(!($birthday=='')){ 
$mysql->query("UPDATE users SET birthday='$birthday' WHERE id='$id'"); 
} 
$image = $_POST['image']; 
if(!($iamge=='')){ 
$path = 'Image/'.time(); 
move_uploaded_file($_FILES['image']['tmp_name'], $path); 
$mysql->query("UPDATE users SET avatar='$path' WHERE id='$id'");
} 


$mysql->close(); 
$head='Location:/profile.php?id='.$id; 
header($head) 
?>