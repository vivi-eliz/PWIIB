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
<div class = container>
<h2>Estrutura de decisão</h2>
A estrutura de decisão é composta por um teste booleano. 
Esse teste verifica uma condição se verdadeiro faça alguma
ou se falso faça outra.
<pre>

// $numero = 2; 
$numero = rand(88,1); 

if($numero == 1)
{
  echo "Aqui significa $numero igual a 1";
}
else
{
  echo "aqui significa $numero diferente de 1";
}

  </pre>
<?php
// $numero = 2; 
$numero = rand(88,1); 

if($numero == 1)
{
  echo "Aqui significa $numero igual a 1";
}
else
{
  echo "aqui significa $numero diferente de 1";
}
?>
<br>

</p>

<h2> Estrutura de decisão encadeada</h2>
<p>
São varios testes um seguido do outro até algum teste verdadeiro ser encontrado
Caso não encontre nenhum positivo o else é executado.
Ao encontrar um teste positivo todos os subsequentes não serão executados.
<pre>
$nome = "vivi";
if($nome == "João"){

}else if($nome == "Maria"){

}else if($nome == "Fernando"){

}else if($nome == "Pedro"){

}else{
  echo "nenhum nome é igual ao conteudo da variavel";
}
?>
</pre>
<?php
$nome = "vivi";
if($nome == "João"){

}else if($nome == "Maria"){

}else if($nome == "Fernando"){

}else if($nome == "Pedro"){

}else{
  echo "nenhum nome é igual ao conteudo da variavel";
}
?>
<br>
<h2>Vários testes em um 1 if </h2>
Em uma estrutura de decisão unica eu consigo realizar dois ou mais testes.
Nesse caso eu preciso utilizar os conectivos AND ou OR ( E ou OU ).
<h3>Conectivo E (And)</h3>
No exemplo abaixo eu necessito que toda as condições resultem em verdadeiro
<pre>
$numero2 = 35;
if($numero2 > 10 && $numero < 50)
{
  echo "$numero está entre 10 e 50";
}
 // FALSE            TRUE
 if($numero2 > 36 && $numero2 < 50)
 {
   //esse codigo não sera executado
 }else{`
   echo "#numero2 Não está entre 36 e 50";
}
</pre>

<?php
$numero2 = 35;
if($numero2 > 10 && $numero < 50)
{
  echo "$numero2 está entre 10 e 50. <br>";
}
//         TRUE e  TRUE
if($numero2 > 36 && $numero2 < 50)
{
  //esse codigo não sera executado
}else{
  echo "$numero2 está entre 36 e 50. <br>" ;
}
// FALSE            TRUE
if($numero2 > 36 && $numero2 < 50)
{
  //esse codigo não sera executado
}else{
  echo "$numero2 Não está entre 36 e 50.";
}
?>
<h3>>Conectivo OU Or</h3>
 <p> O conectivo "ou" testa todas as condiçoes e executa o código se apenas uma das condiçoes for verdadeira.
   Caso nenhuma condição for verdadeiro o else é executado.
 </p>
 <br>
 <Pre>
   $telefone = "14996555214"
   if($telefone == "14996555214"|| $telefone == "165768565686")
   {
     echo "Aqui um dos telefone é igual a variavel";
   }
 </Pre>
 Quando temos várias condiçóes apenas uma é necessario ao usar o conceito OU representado por dois PIPE (Tecla que  fica do lado 2) ||
 <p>
 <h2>Exercicio</h2>
<p>
Crie uma variavel idade preencha com um valor e
escreva na tela se ela pode ou não entrar em um evento
considerando as seguintes regras:
<ul>
<li>Menor de 18 anos: Não pode entrar.</li>
<li>Maior ou igual a 18 e menor que 60: Pode entrar.</li>
<li>Maior ou igual a 60: Entrada gratuita.</li>
<ul>
<?php
                $idade = rand(5, 75);
                if ($idade < 18) {
                    echo "<span>Não pode entrar.</span>";
                } else if ($idade >= 18 && $idade < 60) {
                    echo "<span>Pode entrar.";
                } else {
                    echo "Entrada gratuita.";
                }
            ?>
____________
 
</div>
<script src="bootstrap.bundle.min.js" ></script>
</body>
</html>