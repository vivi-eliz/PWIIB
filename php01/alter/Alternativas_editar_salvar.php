<?php
include "../conexao.php";
require_once "./AlternativaRepository.php";

$repo = new AlternativasRepository($conexao);

$id = $_POST['id'];
$idPergunta = $_POST['id_pergunta'];
$texto = $_POST['texto'];
$correta = $_POST['correta'] == "1" ? 1 : 0;

$repo->editar($id, $texto, $correta);

header("Location: ../alternativa.php?id=" . $idPergunta);