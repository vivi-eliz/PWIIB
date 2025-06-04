<?php
include "conexao.php";
require_once "./disci/disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if(isset($_POST["disciplinas_salvar"]))
{
    $repo->Inserir($_POST['disciplinas']);
    header('location: disciplinas.php');
}
else
{
  

    echo"Você não veio pelo formulario";
}
?>