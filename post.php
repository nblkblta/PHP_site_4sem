<? 
	include 'db.php';
	$id = $_GET['id'];
	$result = $mysql->query("SELECT * FROM `posts` WHERE  `id` ='$id' ");
	$row=$result->fetch_assoc();
	$title=$row['title'];
//Комментарий
	
	include 'header.php';
	include 'menu.php';
	?>
<head>
	<link rel="stylesheet" href="css/blog.css">	
</head>
<body>
	<div class='blog'>
		<?echo $row['title'];?>
		<div class='blogname'>
			<? $name = $row["id_user"];
			$res=$mysql->query("SELECT * FROM `users` WHERE `id`='$name'");
			$r=$res->fetch_assoc();
			echo $r['name'];?>
		</div>

		<div class='blogdate'>
			<?echo $row['date'];?>
		</div>
		<div class="blogfoto">
			<img  src=<?echo $row['image'];?>>
		</div>

		<div class='blogtext'> 
			<p class="tp"><?echo $row['text'];?></p>
		</div>
	</div>
		
	</div>
	<?echo "<br/>";?>
	<?if (isset($_COOKIE['name'])):?>
		<form name="reg" >	
			<input type="hidden" name="id_post" id='id_post"' value=<?echo $_GET['id'] ?>>
			<input type="textarea" class="form-control" name="text"  placeholder="Введите текст"></input><br />	
			<input type=button class="but" id="send" value="Добавить комментарий"></input>
			<div id='message' style='color: white'></div>
		</form>
		</br>
	<?endif;?>
	<input type="hidden" name="id_post" id='id_post"' value=<?echo $_GET['id'] ?>>

	<div id='comments'></div>
	<script src="js/comments.js"></script>

</body>
<? 
$mysql->close();
?>