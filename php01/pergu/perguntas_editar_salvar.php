<?php

include "../conexao.php";
require_once "./perguntasRepository.php";
$repo = new perguntasRepository($conexao);

if (isset($_POST['ID']) ) {
  
    $repo->Editar($_POST['PERGUNTA'],$_POST['ID_DISCIPLINA'],$_POST['ID']);
    
    header('location: ../perguntas.php');
}else{
  
    header('location: ../perguntas.php');
}

?>