<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['marca']);
	$login = clear($_POST['modelo']);
	$senha = clear($_POST['ano']);
	$fone = clear($_POST['cor']);
	$foto = clear($_POST['placa']);
    $data = clear($_POST['motor']);
    $data = clear($_POST['km']);
    $data = clear($_POST['valor fipe']);
    $senhacript = password_hash($senha, PASSWORD_DEFAULT);

	$sql = "INSERT INTO tbveiculo (marca, modelo, ano, cor, placa, motor, km, valor fipe) VALUES ('$marca', '$modelo', '$ano', '$cor','$placa','$motor', '$km', '$valorfipe')";
	
	if(mysqli_query($connect, $sql)):
		
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../usuario.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../adicionarveiculo.php');
	endif;
endif;