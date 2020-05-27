    <?
	include 'db.php';
	$id=$_POST['id'];
	print_r($id);
	$mysql->query("DELETE FROM `comments` WHERE `comments`.`id` = '$id'");
	$mysql->close();
	?>