<?include 'db.php';
$id_post = $_POST['id_post'];
date_default_timezone_set('Asia/Vladivostok');
$date = date("y.m.d H:i:s");
$mysql->query("UPDATE `posts` SET `status` = '1', `date`='$date' WHERE `posts`.`id` = '$id_post'");
$mysql->close();
?>