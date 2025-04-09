<?php  include "cabecalho.php"; ?>

<h1>For</h1>
<p>
  For é uma estrutura dea repetição. Existem 3 configuraçães para 
   a estrutura de repetição funcionar:

   <ol>
     <li>Váriavel de controle</li>
     <li>Condição de finalização</li>
     <li>Incremento da váriavel de controle</li>
   </ol>
   <pre>
      for($i = 0; $i < 10; $i++){
        echo "indice $i "
      }
   </pre>
   <?php
  for($i = 0; $i < 10; $i++){
    echo "indice $i ";
  }
   ?>
</p>
<?php  include "rodape.php"; ?>
</body>
</html>