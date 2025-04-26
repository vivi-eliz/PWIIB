<?php
include "conexao.php";
if(isset($_POST["salva_usuario"]))
{
    echo"Aqui vai a logica de salva no banco";
}
else
{
    echo"Você não veio pelo formulario";
}
?>