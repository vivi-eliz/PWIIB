<?php  include "cabecalho.php"; 
        include "conexao.php"
?>

<div class="row">
    <div class="col-4 offset-4">
       <form action="salva_usuario.php" method="post">
           <label>Disciplinas</label>
           <input type="text" name="login" class="form-control" />
           <br>
           <label>Senha</label>
           <input type="passoword" name="senha" class="form-control" />
           <br>
           <input type="checkbox" name="ativo" value="1" />
           Usuário Ativo
           <br>
           <button name="salva_usuario" type="submit" class="btn btn-outline-primary">
              Salva usuário
           </button>
       </form>
    </div>
</div>

<?php include "rodape.php"; ?>