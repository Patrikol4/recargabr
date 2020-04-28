<?php
session_start(); //Inicializar a sessão
//Incluir a conexão com o banco de dados
include "header.php";
include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Votacao</title>
		<link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    <link href="assets/css/examples.css" rel="stylesheet" /> 
	</head>
	<body>

		<div class="container">
		<!-- Criar o titulo usando a tag <h1> do HTML -->
		<h3>Ranking de usuários</h3>
		<p>Separando entre os que mais fizeram / e que menos fizeram pontos</p>
		<?php
		//Imprimir a mensagem de voto recebido co sucesso
		if(isset($_SESSION['msg'])){
			//Imprimir o valor da sessão
			echo $_SESSION['msg'];
			//Destruir a sessão com PHP
			unset($_SESSION['msg']);
		}
		//Criar a QUERY para pesquisar os produtos no banco de dados
		$result_produto = "SELECT * FROM users";
		//Executar a QUERY para pesquisar os produtos no banco de dados com o MySQLi
		$resultado_produto = mysqli_query($conn, $result_produto);
		
		//Usar o while para percorrer os dados trazidos do banco de dados
		while($row_produto = mysqli_fetch_assoc($resultado_produto)){
			//Imprimir o ID do produto salvo no banco de dados
			echo "<p><h5>ID do usuário:  " . $row_produto['id'] . "<br>";
			//Imprimir o nome do produto salvo no banco de dados
			echo "Nome do usuário:  " . $row_produto['username'] . "<br>";
			//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
			echo "Quantidade total de pontos:  " . $row_produto['balances'] . "<br>";
			//Criar o link para o usuário poder votar no produto
			echo "<a class='btn btn-success' href='aumentar.php?id=".$row_produto['id']."'>Adicionar + pontos</a><br><hr>";
		}


		?>
	</div>
	</body>
</html>