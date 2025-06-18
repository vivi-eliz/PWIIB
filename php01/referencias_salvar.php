<?php
include "conexao.php";
require_once "./referen/referenciasRepository.php";
$repo = new referenciasRepository($conexao);

if(isset($_POST["referencias_salvar"]))
{
    $repo->Inserir($_POST['name']);
    header('location: referencias.php');
}
else
{
    echo"Você não veio pelo formulario";
}
?>