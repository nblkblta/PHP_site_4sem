<?include 'db.php';
$id_post = $_GET['id_post'];
$mysql->query("UPDATE posts SET status='1' WHERE id='$id_post'");
  	$mysql->close();
  
  header('Location:/moderation.php')
 ?>