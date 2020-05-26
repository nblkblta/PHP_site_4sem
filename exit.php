<?
setcookie('name', $name, time()-3600*24, "/");
setcookie('id_user', $id, time()-3600*24, "/");
header('Location:/index.php');
?>