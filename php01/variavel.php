<?php include "cabecalho.php";?>

<div classe="container">
<h1>Variavel</h1>
<h3>Declaraçao de variavel</h3>

<p>
A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.
</p>
Exemplo de declaração de variável:

<pre>
  
      $nome = "João";  // variável do tipo string
      $idade = 25;     // variável do tipo inteiro
      $altura = 1.75;   // variável do tipo float
</pre>

<?php

    $nome = "vivi";
    $idade = 34;
    $peso = 79.500;
    $altura = 1.72;
    $isProf = true;

    $namorada = false;
    $salario = 5000.50;
    
    echo "<h1>$salario</h1>";

    $numeroTenis = "41";

    echo "$idade + $peso";

?>

<h1>Constantes</h1>
<p>
Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

<br />
Exemplo de declaração de constante:
</p>
 
    <pre>
 
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com

    </pre>
<?php
  define("PI", 3,14);
  echo PI;
  echo "<br>";

  const coordenador = "vivi";
  echo "<br>";
  echo coordenador;



?>

<h1>Exercícios</h1>

<ol>
  <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
  <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
  <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, 
    imprima na tela as informações cocatenadas.
  </li>
  <li>
    Crie uma variável boleana, atribua true ou false e imprima na tela
  </li>
  
</ol>
 <h3>Exercicio 1</h3>
<?php
   $altura = 1.75;
   $nome = "bruno";
   $peso =88.5;

   echo $altura+$peso;
?>
 
 <h3>Exercicio 2</h3>

 <?php
 
 $nuvem = 5.10;
 $ventos = 100.20;

 echo $nuvem * $ventos;
 
 ?>

 <h3>Exercicio 3</h3>
 <?php
   $descricao = "cookis gostosos";
   $quantidade = 7;
   $valor = 320;

  echo "&descricao <br>quatidade: $quntidade <br>valor: $valor";
 ?>
</div> <!-- Fecha container bootstrap -->
<?php  include "rodape.php"; ?>
</body>
</html>