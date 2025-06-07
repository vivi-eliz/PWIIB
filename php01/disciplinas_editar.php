<?php  include "./InicioeFim/cabecalho.php"; 
       include "./disci/disciplinasRepository.php";
       include "conexao.php";

       if (isset ($_GET['id']) && !empty ($_GET['id']))
{
    $repo = new disciplinasRepository($conexao);
    $usuario = $repo->buscarPorId($_GET['id']);
}
else
{
    header ('location: disciplinas.php');
}
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">editar disciplinas</div>
              <div class="card-body">

              <form action="disciplina_salvar_editar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $obj['ID'] ?>"
                            class="form-control"
                            name="id"
                            readonly 
                             />
                    <br />
                    <label>Nome</label>
                    <input type="text"
                            value="<?php echo $obj['DISCIPLINA'] ?>"
                            class="form-control"
                            name="DISCIPLINAS"
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