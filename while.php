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
   <!-- lkyupiouypioy -->
<!-- <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="col-2">
    <button type="button" class="btn btn-outline-info">Cadastros</button>
    </div>
    <div class="col-8">
       pesquisar
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="col-2">
    <button type="button" class="btn btn-outline-info">Procurar</button>
    </div>
 </div> -->
 <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
            <li><a class="dropdown-item" href="if.php">if</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><a class="dropdown-item" href="array.php">array/vetor</a></li>
            <li><a class="dropdown-item" href="switch.php">switch</a></li>
          </ul>
       
      </ul>
      
    </div>
  </div>
</nav>


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