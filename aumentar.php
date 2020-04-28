<?php 
session_start();

require_once "conn.php";

$_GET['id'] = $theId

if(isset($theId)){
	if(isset($_COOKIE['count_point'])){
		$_SESSION['msg'] = "<span>Os pontos só podem ser aumentados uma vez!</span>";
		header('Location: votacao.php');
	} else {
		setcookie('count_point', $_SERVER['REMOTE_ADDR'], time() + 5);
		$result_produto = "UPDATE users SET balances = balances + 1 WHERE id = '".$theId. ".";
		$resultado_produto = mysqli_query($conn, $result_produto);

		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "Pontos adicionados com sucesso!";
			header('Location: votacao.php');
		} else {
			$_SESSION['msg'] = "Erro ao votar!";
			header('Location: votacao.php');
		}
	}
}

?>