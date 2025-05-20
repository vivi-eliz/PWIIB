
<?php  include "./InicioeFim/cabecalho.php"; ?>
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
<!-- <div class="d-grid gap-2 col-6 mx-auto"> -->
<button class="btn btn-outline-primary" type="button">Logar</button>
<!-- </div> -->
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
<button class="btn btn-outline-primary" type="button">=</button>

</form>
<br>
3-Crie um formulário HTML que peça o nome do usuário. 
Quando o formulário for enviado com o método GET,
 exiba uma mensagem personalizada dizendo "Olá, [nome]".

  <form  action="salvar_dados.php" method="get">
   
  <label>Nome</label>
   <input type="text" name= "nome">
   <br>
   <button class="btn btn-outline-primary" type="button">Logar</button>
    
   </form>
 <br>

4-Crie um formulário de login que receba o nome de usuário e senha.
 Quando o formulário for enviado com o método POST,
  verifique se o nome de usuário e a senha são válidos
   (pode ser um simples exemplo de validação).
    
    <form action="salvar_dados.php" method="post">
      
      <label>Nome do Usuario</label>
      <input type="text" name="eliz">
      <br>
      <label>Senha</label>
      <input type="password" name="123321">
      <br>
      <button class="btn btn-outline-primary" type="button">Logar</button>

    </form>
   <br>
5-Crie um formulário HTML que receba dois números e,
 ao enviar com o método POST, exiba o produto desses números.
  <form action="salvar_dados.php" method="post">
   
  <label>Num1</label>
      <input type="password" name="password1">
      <br>
      <label>Num2</label>
      <input type="password" name="password2">
      <br>
      <button class="btn btn-outline-primary" type="button">Logar</button>
  </form>
 <br>
6-Crie um formulário HTML que receba
 o nome e a mensagem de um usuário.
 Quando o formulário for enviado com o método POST,
  exiba a mensagem do usuário. 
  <form action="salvar_dados.php" method="post">
   
   <label>Num1</label>
       <input type="password" name="password1">
       <br>
       <label>Num2</label>
       <input type="password" name="password2">
       <br>
       <button class="btn btn-outline-primary" type="button">Logar</button>
   </form>
  <br>


  
  <?php  include "./InicioeFim/rodape.php"; ?>
</body>
</html>