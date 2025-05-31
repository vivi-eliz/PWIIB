<?php
include "conexao.php";
require_once "disciplinasRepository.php";
$repo = new disciplinasRepository($conexao);

if(isset($_POST['DISCIPLINAS']) )
{
    $repo->Editar($_POST['DISCIPLINAS']);
    header('location: disciplinas.php');
}
else
{
    header('location: disciplinas.php');
}
?>