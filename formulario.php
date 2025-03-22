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
<!-- <h1>Cadastro de Usuario</h1>

<form  action="salvar_dados.php" method="post">
    <label>Email</label>
<input type="text" name="login" value="">
<br>
   <label>Senha</label>
<input type="password" name="senha" value="">
<br>
<button type="submit">
    Logar
</button>

</form> -->
<br>

1- Crie um formulário HTML que solicite o 
    nome e a idade de um usuário.
 Ao enviar o formulário com o método GET, 
 exiba o nome e a idade do usuário na página seguinte.

<form  action="salvar_dados.php" method="get">
    <label>Nome</label>
<input type="text" name="nome" value="">
<br>
   <label>Idade</label>
<input type="text" name="idade" value="">
<br>
<button type="submit">
    Logar
</button>

</form>
<br>

2-Crie um formulário HTML que receba dois números e, 
ao enviar com o método GET, exiba a soma desses dois números.

<form action="salvar_dados.php" method="get">

<label>N1</label>
<input for="number" name="n1">
<br>
<label>N2</label>
<input  for="number" name="n2">
<br>
<button type="submit">
  =
</button>

</form>
<br>
3-Crie um formulário HTML que peça o nome do usuário. 
Quando o formulário for enviado com o método GET,
 exiba uma mensagem personalizada dizendo "Olá, [nome]".

  <form  action="salvar_dados.php" method="get">
   
  <label>Nome</label>
   <input type="text" name= "nome">
   <br>
   <button type="submit">logar</button>
    
   </form>
 <br>

4-Crie um formulário de login que receba o nome de usuário e senha.
 Quando o formulário for enviado com o método POST,
  verifique se o nome de usuário e a senha são válidos
   (pode ser um simples exemplo de validação).
    
    <form action="">
      
      <label>Nome</label>
      <input type="text" name="nome">
      <br>
      <label>Senha</label>
      <input type="number" name="senha">
      <br>
      <button type="submit">
        logar
      </button>

    </form>
   <br>
5-Crie um formulário HTML que receba dois números e,
 ao enviar com o método POST, exiba o produto desses números.
  <form action="">

  </form>
 <br>
6-Crie um formulário HTML que receba
 o nome e a mensagem de um usuário.
 Quando o formulário for enviado com o método POST,
  exiba a mensagem do usuário. 
     <form action="">

     </form>
  <br>
<script src="bootstrap.bundle.min.js" ></script>
</body>
</html>