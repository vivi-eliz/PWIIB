<?php  include "./InicioeFim/cabecalho.php"; 
       include "conexao.php"
?>

<div class="row">
    <div class="col-4 offset-4">
       <form action="disciplinas_salvar.php" method="post">
           <label>Disciplinas</label>
           <input type="text" name="login" class="form-control" />
           <br>
           <button name="disciplinas_salvar" type="submit" class="btn btn-outline-primary">
              Salva disciplinas
           </button>
       </form>
    </div>
</div>



<?php  include "./InicioeFim/rodape.php"; ?>