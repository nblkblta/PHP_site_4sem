<?
include 'db.php';
$id_post = $_GET['id_post'];
$result = $mysql->query("SELECT * FROM `comments` WHERE  `id_post` ='$id_post' ");

?>
<body>
	<?
while(($row=$result->fetch_assoc())!=false):
?>
	<? $name = $row["id_user"];
			$res=$mysql->query("SELECT * FROM `users` WHERE `id`='$name'");
			$r=$res->fetch_assoc();?>
    </br>
	<div class="com">
		<div class='user_foto'>
		<img  class="cont" src=<?echo $r['avatar'];?>>
		</div>
	<p class="zagolovok"><div class='blogname'>
			
			<?echo $r['name'];?>
		</div>
		 </p>	

	<p class="zagolovok1"><?echo $row['date'];?></p>

	<p class="blogtext1"><?echo $row['text'];?></p>
	<? if(($row['name'] == $_COOKIE['name'])||($_COOKIE['status']>1)): ?>
		<form style="display: inline-block;margin-left: 80%; margin-top: 2%;" name="red" action="redact_comment.php"  method="post">
		<input type="hidden" name="id_post" value=<?echo $id_post ?>>
  		<input type="hidden" name="id" value=<?echo $row['id'] ?>>
		<button class="but1" type="submit"> Редактировать</button>
		</form>
		<form style="display: inline-block;" name="del" action="delete_comment.php" method="post">
		<input  class="but1" id='del' onclick="var params ='id='+<?echo ''.$row['id'] ?>;
		ajaxDel(params);"  type="button" value="Удалить" ></input>
		</form>
	<?endif;?>
	</div>

<?
endwhile;
?>

</body>
<?
$mysql->close();
?>