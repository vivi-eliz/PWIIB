<?php
   include "./nav.php";
?>

!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>

<h1>For</h1>
<p>
  For é uma estrutura dea repetição. Existem 3 configuraçães para 
   a estrutura de repetição funcionar:

   <ol>
     <li>Váriavel de controle</li>
     <li>Condição de finalização</li>
     <li>Incremento da váriavel de controle</li>
   </ol>
   <pre>
      for($i = 0; $i < 10; $i++){
        echo "indice $i "
      }
   </pre>
   <?php
  for($i = 0; $i < 10; $i++){
    echo "indice $i ";
  }
   ?>
</p>
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>