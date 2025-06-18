<?php  include "./InicioeFim/cabecalho.php"; 
       include "./referen/referenciasRepository.php";
       include "conexao.php";

       if (isset ($_GET['id']) && !empty ($_GET['id']))
{
    $repo = new referenciasRepository ($conexao);
    $referencias= $repo->buscarPorId($_GET['id']);
}
else
{
    header ('location: referencias.php');
}
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">editar referencias</div>
              <div class="card-body">

              <form action="./referen/referencias_Editar_Salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $referencias['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>Referencias</label>
                    <input type="text"
                            value="<?php echo $referencias['NOME'] ?>"
                            class="form-control"
                            name="NOME"
                             />
                    <br />
                  

                     <button class="btn btn-outline-success" type="submit">
                         Salvar Usuário
                     </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>




<?php  include "./InicioeFim/rodape.php"; ?>