<?php include "./InicioeFim/cabecalho.php";?>
    
<div class="row">
    <div class="col-4 offset-4">
    <form action="./referen/referencias_salvar.php" method="post">
            <br>

        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" SELECT>

            <br><br>
        <button type="submit" name="salvar_referencia" class="btn btn-primary">
            Salvar referencia
        </button>
    </form>
    </div>
</div>

<?php  include "rodape.php"; ?>