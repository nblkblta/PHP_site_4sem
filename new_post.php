<? $title="Добавить пост";
include 'header.php';
include 'menu.php';
?>
<head>
	<link rel="stylesheet" href="css/reg.css" >
</head>
<body>
	<div class="container mt-4" >	
		<form name="new_post" action="check_new_post.php" method="post" enctype="multipart/form-data">
			<input type="text" class="form-control" name="title" placeholder="Заголовок"></input><br/>
			<input type="text" class="form-control" name="text"  placeholder="Текст поста"></input><br/>	
			<input type="file" class="form-control" name="image"  placeholder="Фото"></input><br/>	
			<input type=button class="but" id="send" value="Добавить"></input>
			</br>
			<div id='message' style='color: white'></div>
		</form>
	</div>
	<script src="js/new_post.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>