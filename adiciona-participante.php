<?php

	require_once("class/Participante.php");
	require_once("class/ParticipanteDao.php");
	require_once("conecta.php"); 
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$estado = $_POST["estado"];
	$cidade = $_POST["cidade"];
	$bairro = $_POST["bairro"];
	$endereco = $_POST["endereco"];
	$telefone = $_POST["telefone"];
	$nascimento = $_POST["nascimento"];
	$cep = $_POST["cep"];
	
	
	$participante = new Participante($nome, $cpf, $email, $cidade, $cep, $telefone, $endereco, $estado, $bairro, $nascimento);
	$participanteDao = new ParticipanteDao($conexao);
	
	$participanteDao->insereParticipante($participante);

	header("Location: index.php")

	?>