<?php  include "./InicioeFim/cabecalho.php"; 
       include "./disci/disciplinasRepository.php";
       include "conexao.php";

       if (isset ($_GET['id']) && !empty ($_GET['id']))
{
    $repo = new disciplinasRepository($conexao);
    $disciplinas= $repo->buscarPorId($_GET['id']);
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

              <form action="./disci/disciplinas_Editar_Salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $disciplinas['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>disciplinas</label>
                    <input type="text"
                            value="<?php echo $disciplinas['DISCIPLINA'] ?>"
                            class="form-control"
                            name="DISCIPLINA"
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