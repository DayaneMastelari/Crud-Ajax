<?php

require_once("conecta.php");

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
$id = $_POST['id'];


$query = "update participantes set nome = '{nome}', cpf = '{cpf}', email = '{email}', 
            cidade = '{cidade}', cep = '{cep}', telefone = '{telefone}', 
            endereco = '{endereco}', estado = '{estado}', bairro = '{bairro}', 
            nascimento = '{nascimento}' where id = '{id}'";
    
$conexao->query($query);

?>