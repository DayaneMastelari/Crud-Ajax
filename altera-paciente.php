<?php
require_once("menu.php");
require_once("class/Participante.php");
require_once("class/ParticipanteDao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$estado = $_POST["estado"];
$bairro = $_POST["bairro"];
$nascimento = $_POST["nascimento"];

$participante = new Participante($nome, $cpf, $email, $cidade, $cep, $telefone, $endereco, $estado, $bairro, $nascimento);
$participante->setId($_POST['id']);

$participanteDao = new ParticipanteDao($conexao);
$participanteDao->alteraParticipante($participante);

header("Location: form-lista-participantes.php");

?>