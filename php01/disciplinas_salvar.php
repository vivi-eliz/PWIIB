<?php
include "conexao.php";
require_once "./disci/disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if(isset($_POST["id"]))
{
    $repo->Inserir($_POST['disciplinas']);
    header('location: disciplinas.php');
}
else
{
    echo"Você não veio pelo formulario";
}
?>