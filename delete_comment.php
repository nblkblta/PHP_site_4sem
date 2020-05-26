    <?
	include 'db.php';
	$id=$_POST['id'];
	$mysql->query("DELETE FROM `comments` WHERE id=$id");
	$mysql->close();
	?>