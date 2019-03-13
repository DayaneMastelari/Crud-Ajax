<?php

require_once("conecta.php");

echo "antes";
print_r($_POST);

$nome  = $_POST['nome'];
$cpf  = $_POST['cpf'];
$email  = $_POST['email'];
$cidade  = $_POST['cidade'];
$cep  = $_POST['cep'];
$telefone  = $_POST['telefone'];
$endereco  = $_POST['endereco'];
$estado  = $_POST['estado'];
$bairro  = $_POST['bairro'];
$nascimento  = $_POST['nascimento'];

$query = "insert into participantes (nome, cpf, email, cidade, cep, telefone, endereco, estado, bairro, nascimento) 
            values ('{$nome}', '{$cpf}', '{$email}', '{$cidade}', '{$cep}', '{$telefone}', '{$endereco}', '{$estado}', '{$bairro}', '{$nascimento}')";


echo $query;
$conecta = $conexao->query($query);
echo $conecta;

?>