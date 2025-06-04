<?php
include "../conexao.php";
require_once "./disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    $disciplinas = $repo->buscarPorId($_GET["id"]);
    if($disciplinas != null)
    {
        $repo->disciplinas_excluir($_GET["id"]);
    }
    header('location: ../disciplinas.php');
}
else
{
    
  header('location: ../disciplinas.php');
}
?>