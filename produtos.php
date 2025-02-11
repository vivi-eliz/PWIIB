<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de produtos</title>
</head>
<body>
    <a href="index.php">Página inicial</a>
    <a href="contato.php">Entre em contato</a>
    <h1>Lista de produtos</h1>
    <ol>
        <?php
              for($i = 0; &i < 3; $i++)  
              {
                  echo "<li>Item $i<li>";
              }
        
        ?>
        </ol>
</body>
</html>