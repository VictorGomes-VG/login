<?php

      session_start();

    $esta_logado = isset($_SESSION['esta_logado']);

      if($esta_logado == false  OR !$_SESSION['esta_logado'] == false ){
          header("Location:login.php");

      }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="https://pbs.twimg.com/profile_images/731466465585561600/HuprdNuX.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>