<?php

    require_once("class/ParticipanteDao.php");
    require_once("conecta.php");

    $participanteDao = new ParticipanteDao($conexao);


    $id = $_POST['id'];
    $participanteDao->removeParticipante($id);
    header("Location: form-lista-participantes.php");

?>