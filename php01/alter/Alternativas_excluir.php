<?php
include "../conexao.php";
require_once "./AlternativaRepository.php";

$repo = new AlternativasRepository($conexao);

$id = $_GET['id'];
$idPergunta = $_GET['id_pergunta'];

$repo->excluir($id);

header("Location: ../alternativa.php?id=" . $idPergunta);