<?php
include "../conexao.php";
require_once "../pergu/perguntasRepository.php";
$repo = new perguntasRepository($conexao);


if( isset($_POST["salvar_pergunta"]) )
{
    $repo->Inserir($_POST['PERGUNTA'], $_POST['id_disciplina']);
    header('location: ../perguntas.php?sucesso=cadastrado com sucesso');
}
else
{
    header('location: ../perguntas.php?erro=formulario inválido');
}

?>