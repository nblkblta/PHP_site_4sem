<?
include 'db.php';
$email = $_GET['email'];
$mysql->query("UPDATE users SET status = 1 WHERE `email`='$email'");
header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
$mysql->close();
exit();
// коывпоызвпоывоп
?>

