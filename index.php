<DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulário com validação</title>
	<link rel="stylesheet" href="design.css">




	</head>
	<?php
	$pdo = new 	PDO("mysql:host=localhost;dbname=bancodedados","root","");

/*
	if(isset($_GET['acao'])){

		$nome = $_GET['nome'];
		$senha = $_GET['senha'];

		echo $nome;*/



	if(isset($_POST['acao'])){

		$nome = @$_POST['nome'];
		$senha = @$_POST['senha'];

		$sql = $pdo->prepare("INSERT INTO bancodedados (nome,senha) VALUES (?,?)");
		$sql->execute(array($nome,$senha));

		echo "Cliente inserido com sucesso";


}











	?>
	<main>



		<div class="formulario-principal">
		<form method="post">
			Nome: <input type="text" name="nome" id="nome"required><br>
			Senha: <input type="password" name="senha" id="senha" required>
			<input type="submit" id="enviar" name="acao" value="Entrar"required>

        </form>

      </div>

		
		<div id="link-cadastro">
		<a href="">CADASTRE-SE</a>
		</div>





	</main>
	<script src="jquery.js"></script>
	<script type="text/javascript">
    













	</script>



	</html>
