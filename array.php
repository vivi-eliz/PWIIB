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


<script src="bootstrap.bundle.min.js" ></script>
<script src="bootstrap.min.css" ></script>
 
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
</body>
</html>