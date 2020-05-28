</DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	
<body>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#121629; font-size: 15pt;";>
	<ul class="navbar-nav mr-sm-2 my-2 mt-10 mt-lg-0">
  	<li class="nav-item active">
        <a class="nav-link" href="index.php">Главная<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
        <a class="nav-link" href="posts.php">Блог<span class="sr-only">(current)</span></a>
     </li>
     <? if (!isset($_COOKIE['name'])):?>
     	<li class="nav-item active">
        <a class="nav-link" href="auth.php">Авторизация<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
        <a class="nav-link" href="registration.php">Регистрация<span class="sr-only">(current)</span></a>
     </li>
     	<?else:?>
        <li class="nav-item active">
        <a class="nav-link" href="new_post.php">Добавить пост<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
        <a class="nav-link" href=<?echo 'profile.php?id='.$_COOKIE['id_user'];?>><?echo $_COOKIE['name'];?> <span class="sr-only">(current)</span></a>
     </li>
    
     <? if ($_COOKIE['status']>1):?>
             <li class="nav-item active">
             <a class="nav-link" href="moderation.php">Модерация<span class="sr-only">(current)</span></a>
             </li>
       <?endif;?>
     <li class="nav-item active">
        <a class="nav-link" href="exit.php">Выход<span class="sr-only">(current)</span></a>
     </li>
     <?endif;?>
     </ul>
</nav>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
