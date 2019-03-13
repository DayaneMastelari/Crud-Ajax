<?php

require_once("conecta.php");

    $resultado = mysqli_query($conexao, "SELECT id, nome, telefone, email FROM participantes");
    
    while($participante_array = mysqli_fetch_assoc($resultado)){
        

        $vetor[] = array_map('utf8_encode', $participante_array);
    }
    echo json_encode($vetor);
?>