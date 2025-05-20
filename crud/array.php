<?php  include "cabecalho.php"; ?>



 
<h1>array</h1>
<p>
   São variaveis que podem guandar uma lista de valores 
   identificados por indice ou chave. 

</p>
<pre>
  $frutas = ["Bananas", "Maçã", "Abacaxi" , "Mamão" , 10 , true, array(), [] ];
  //ou
  $frutas = array("Abacaxi", "Maça", "Banana", "Mamão");
</pre>

<?php
   $frutas = ["Bananas", "Maçã", "Abacaxi" , "Mamão"];
   echo "<br>$frutas[2]";

   for($i = 0; $i < count($frutas); $i++)
   {
     echo"<br> $frutas[$i]";
   }

   array_push($frutas,"Limão");
   for($i = 0; $i < count($frutas); $i++)
   {
    echo"<br> $frutas[$i]";
  }
   array_push($frutas, rand(1, 75));
   for($i = 0; $i < count($frutas); $i++)
   {
    echo"<br> $frutas[$i]";
  }




  $B = [];
for($h = 0; $h<5; $h++){
  $B[$h] = rand(1,15);
}
$I = [];
for($h = 0; $h<5; $h++){
  $I[$h] = rand(16,30);
}
$N =[];
for($h = 0; $h<5; $h++){
  $N[$h] = rand(31,45);
}
$G =[];
for($h = 0; $h<5; $h++){
  $G[$h] = rand(46,60);
}
$O =[];
for($h = 0; $h<5; $h++){
  $O[$h] = rand(61,75);
}

?>
<table border="5">
    <tr>
      <td>B</td>
      <td>I</td>
      <td>N</td>
      <td>G</td>
      <td>O</td>
    </tr>
    <?php
      for($ifor=0; $ifor < 5; $ifor++)
      {
        echo "<tr>";
        echo "<td>$B[$ifor]</td>";  
        echo "<td>$I[$ifor]</td>";
        echo "<td>$N[$ifor]</td>";
        echo "<td>$G[$ifor]</td>";
        echo "<td>$O[$ifor]</td>";
        echo "</tr>";
      }
  
  ?>
</table>

<h1> Sorteio</h1>
<?php
 $Sorteio = array(12,7,3,9,5,2,41,11,8,13,6,14,15,10,19);

 for ($i=0 ; $i < 15 ; $i++ )
 {
   echo "<h2>Rodada ".($i+1)."número sorteado é : $Sorteio[$i]</h2>";
 }
?>
</body>
</html>
<?php  include "rodape.php"; ?>