<? $title="Главная страница";
include 'header.php';
include 'menu.php';
?>
<body>
	<div class="container">
	<div class="text_1">
		<p>All China</p>		
	</div>
	
	<div class="text_2">
		<p>Посетил Китай? Фотки заливай!</p>		
	</div>
	<? if ($_COOKIE['name']==''):?>
		
	
	<div class="b1"> <a href="registration.php">  <button  class="but1">Зарегистрироваться</button> </a></div>

	<div class="text_3">
		<a style= "color: #b8c1ec;"href="auth.php"> Есть аккаунт? </a>	
	</div>
	
	<?endif;?>
	</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
