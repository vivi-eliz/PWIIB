<?php
  if (  isset($_POST["Email"]) && empty($_POST["Email"]) == false )
  {
      echo"o Email é:". $_POST["Email"];
  }else{
      echo"Email não existe";
  }

  if (  isset($_POST["senha"]) && empty($_POST["senha"]) == false )
  {
      echo"o senha é:". $_POST["senha"];
  }
  else{
      header("location: login.php?erro=Senha não pode estar em branco");
  }
?>