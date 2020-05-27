<?include 'db.php';
$id_post = $_POST['id_post'];
$mysql->query("DELETE FROM `posts` WHERE `posts`.`id` = '$id_post'");
$mysql->close();
?>