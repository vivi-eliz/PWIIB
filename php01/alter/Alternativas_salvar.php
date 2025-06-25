
<?php
include "../conexao.php";
require_once "./AlternativaRepository.php";

$repo = new AlternativasRepository($conexao);

$texto = $_POST['texto'];
$idPergunta = $_POST['id_pergunta'];
$correta = $_POST['correta'] == "1" ? 1 : 0;

// opcional: proteger contra palavras perigosas
if (preg_match('/drop|delete|truncate|--/i', $texto)) {
    die("Alternativa inválida.");
}

$repo->inserir($idPergunta, $texto, $correta);

header("Location: ../alternativa.php?id=" . $idPergunta);