<?
include 'db.php';
$id = $_GET['id_post'];
$result = $mysql->query("SELECT * FROM `comments` WHERE  `id_post` ='$id' ");
$mysql->close();
?>
<body>
	<?
while(($row=$result->fetch_assoc())!=false):
?>

    </br>
	<div class="com">
	<p class="zagolovok"><?echo $row['name'];?></p>	

	<p class="zagolovok1"><?echo $row['date'];?></p>

	<p class="blogtext1"><?echo $row['text'];?></p>
	<? if(($row['name'] ==$_COOKIE['name'])||($_COOKIE['status']>1)): ?>
		<form style="display: inline-block;margin-left: 80%; margin-top: 2%;" name="red" action="redact_comment.php"  method="post">
		<input type="hidden" name="id_post" value=<?echo $_GET['id'] ?>>
  		<input type="hidden" name="id" value=<?echo $row['id'] ?>>
		<button class="but1" type="submit"  ><i class="glyphicon glyphicon-pencil"></i> Редактировать</button>
		</form>
		<form style="display: inline-block;" name="red" action="delete_comment.php" method="post">
  		<input type="hidden" name="id" value=<?echo $row['id'] ?>>
		<input  class="but1" id='del'  type="button" value="Удалить" ></input>
		</form>
	<?endif;?>
	</div>

<?
endwhile;
?>
<script src="js/del_com.js"></script>
</body>