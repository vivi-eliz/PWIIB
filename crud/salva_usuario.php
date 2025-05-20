<?php
include "./InicioeFim/conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if(isset($_POST["salva_usuario"]))
{
    $ativo = isset( $_POST['ativo'] ) ? $_POST['ativo'] : false ;
    $repo->Inserir($_POST['login'],$_POST['senha'],$ativo);
    header('location: usuarios.php');
}
else
{
    echo"Você não veio pelo formulario";
}
?>