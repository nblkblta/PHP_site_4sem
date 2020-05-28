<?
include 'db.php';

$result = $mysql->query("SELECT * FROM `posts` WHERE `status`=0 ORDER BY  `date` DESC ");


while(($row=$result->fetch_assoc())!=false):
?>
	<div class='blog'>
		<?echo $row['title'];?>
		<br>
		<div class='blogname'>
			<? $name = $row["id_user"];
			$res=$mysql->query("SELECT * FROM `users` WHERE `id`='$name'");
			$r=$res->fetch_assoc();
			echo $r['name'];?>
		</div>
		<div class='user_foto'>
		<img  class="cont" src=<?echo $r['avatar'];?>>
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
		<div>			
			<button class="but" onclick="var params ='id_post='+<?echo ''.$row['id'] ?>;
		ajaxPubl(params);">Опубликовать</button>
		<button class="but" onclick="var params ='id_post='+<?echo ''.$row['id'] ?>;
		ajaxDePubl(params);">Удалить</button>
		</div>
	</div>
	<?echo "<br/>";?>
<?
endwhile;
?>
<?
$mysql->close();
?>