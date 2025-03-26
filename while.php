<?php
   include "./nav.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="bootstrap.min.css">

<style>
  
   .row{
     border: 2px solid red;
     padding: 5px:
   }

    .row > div {
      border: 2px solid yellow;
      padding: 50px 0;
      text-align: center
    }

</style>

</head>
<body>

<script src="bootstrap.bundle.min.js" ></script>
<script src="bootstrap.min.css" ></script>
 <h1>while</h1>
 <p>
 While é uma estrutura dea repetição. Existem 3 configuraçães para 
   a estrutura de repetição funcionar:

   <ol>
     <li>Váriavel de controle</li>
     <li>Condição de finalização</li>
     <li>Incremento da váriavel de controle</li>
   </ol>
   <pre>
     $i = 0;
     while($i < 10){
       echo "indice $i";
       $i = $i = 1;
     }
   </pre>
   <?php
   $i = 0;
   while($i < 10){
     echo "indice $i";
     $i = $i + 1;
  }
   ?>
</p>
<h2>Do While</h2>

<p>
  A difernça do Do While para While é que no Do While sempre vai haver pelo menos
  uma execução do bloco de código.
  Você avalia a nessecidade de qual estrutura de repatição é adequada.

  <pre>
    $i = 0;
    do{
      echo "while com indice $i <br>";
      $i = $i +1;
    }while($i < 10)
  </pre>

  <?php
  $i = 0;
  do{
    echo "DO WHILE com indice $i <br>";
    $i = $i +1;
  }while($i < 10)
  ?>
</p>
</body>
</html>