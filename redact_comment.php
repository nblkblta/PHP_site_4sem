<?	
	include 'header.php';
  	include 'db.php';
  	$id=$_POST['id'];
  	$id_post = $_POST['id_post'];
?>
	<form name="reg" action="change_comm.php" method="post">	
		<input type="textarea" class="form-control" name="text"  placeholder="Введите текст"></input><br />	
		<input type="hidden" name="id_post" value=<?echo $id_post ?>>
  		<input type="hidden" name="id" value=<?echo $id ?>>
		<button class="btn btn-success" type="submit">Редактировать комментарий</button>
	</form>