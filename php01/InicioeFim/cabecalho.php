

<!-- <!DOCTYPE html>
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
<?php
   include "./nav.php";
?> -->



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
    <style>

          .btn-color {
              background-color: #0e1c36;
              color: #fff;
          }

          .profile-image-pic {
              height: 200px;
              width: 200px;
              object-fit: cover;
          }
          body {
              background-color: #F0F0F0;
          }


          .cardbody-color {
              /*background-color: #ebf2fa;*/
              background-color: #17458F;
          }

          a {
              text-decoration: none;
          }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
     <img src="abacaxi.png" alt="Bootstrap" width="60" height="54" />
      Projeto PW 2 ♪
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
            <a class="nav-link" href="https://github.com/vivi-eliz/PWIIB" > Acesse o Github por aqui </a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>  -->
            <li><a class="dropdown-item" href="disciplinas.php">disciplinas</a></li>
            <li><a class="dropdown-item" href="perguntas.php">perguntas</a></li>
            <li><a class="dropdown-item" href="usuarios.php">usuarios</a></li>
            <li><a class="dropdown-item" href="referencias.php">referencias</a></li>
          </ul>
        </li>Fim do menu dropdonw 
        <li class="nav-item">
            <a class="nav-link" href="instalar.php" > 
              Instalar o banco 
            </a>
        </li>
      </ul><!--Fim do menu  -->
     
    </div>
  </div>
</nav>
<div class="container">