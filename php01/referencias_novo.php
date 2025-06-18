<?php  include "./InicioeFim/cabecalho.php"; 
       include "conexao.php"
?>

<div class="row">
    <div class="col-4 offset-4">
       <form action="referencias_salvar.php" method="post">
           <label>Referencias</label>
           <input type="text" name="name" class="form-control" />
           <br>
           <button name="referencias_salvar" type="submit" class="btn btn-outline-primary">
              Salva Referencias
           </button>
       </form>
    </div>
</div>



<?php  include "./InicioeFim/rodape.php"; ?>