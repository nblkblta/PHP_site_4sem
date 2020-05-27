<?  include 'db.php';

  	$id=$_POST['id'];
  	$id_post = $_POST['id_post'];
  	$text=$_POST['text'];
  	$mysql->query("UPDATE comments SET text='$text' WHERE id='$id'");
  	$mysql->close();
  	$path = "<script> document.location.href='post.php?id=".$id_post."'</script>";
	echo $path ;
 ?>