<br>
exercicio 1
<br>
 <?php
echo $_GET["login"];
echo "<br>";
echo $_GET["senha"];

echo $_POST["login"];
echo "<br>";
echo $_POST["senha"];
?>  
<br>
exercicio 2
<br>
 <?php
echo $_GET["nome"];
echo "<br>";
echo $_GET["idade"];
?>  
<br>
exercicio 3
<br>
 <?php

$num1= $_GET["n1"];
echo "<br>";
$num2= $_GET["n2"];
$soma = $num1+$num2;
echo "A soma de $num1 e $num2 sera igua a $soma"

?>  -->
<br>
exexrcicio 4
<br>
<?php
$f = $_GET["nome"];
echo "Olá,$f"
?> 
<br>
execicio 5
 <br>
 <?php
 $nome = $_POST ['eliz'];
 $senha = $_POST ['123321'];

 echo ($nome == "eliz") ? $nome :  "esse nome não é o correto. ";
 echo "<br>";
 echo ($senha == "123321") ? $senha :  "essa senha não estar correta";

?> 
<br>
execicio 6
<br>
 <?php



?> 