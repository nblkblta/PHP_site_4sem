<?
include 'db.php';

$result = $mysql->query("SELECT * FROM `posts` WHERE `status`>0 ORDER BY  `date` DESC ");
//

while(($row=$result->fetch_assoc())!=false):
?>
	<div class='blog'>
		<?echo $row['title'];?>
	</br>
		<div class="bl">
		<div class='user_foto'>
			<? $name = $row["id_user"];
			$res=$mysql->query("SELECT * FROM `users` WHERE `id`='$name'");
			$r=$res->fetch_assoc();?>
			<img  class="cont" src=<?echo $r['avatar'];?>>
		</div> 
		<div class='blogname'>
			<?echo $r['name'];?>
		</div>
		<div class='blogdate'>
			<?echo $row['date'];?>
		</div>
	</div>
		<div class="blogfoto">
			<img  src=<?echo $row['image'];?>>
		</div>

		<div class='blogtext'> 
			<p class="tp"><?echo $row['text'];?></p>
		</div>
		<div>			
			<button class="but" onclick=<? echo "location.href='http://php/post.php?id=".$row['id']."'"?>>Комментарии</button>
		</div>
	</div>
	<?echo "<br/>";?>
<?
endwhile;
?>
<?
$mysql->close();
?>