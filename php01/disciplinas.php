<?php  include "./InicioeFim/cabecalho.php"; 
    include "conexao.php";

    require_once  "./disci/disciplinasRepository.php";
    $repo = new disciplinasRepository($conexao);

    if(isset($_GET['busca']) && !empty($_GET['busca']))
  {
    $disciplinas = $repo->Pesquisar($_GET['busca'] );
  }
  else
  {
   $disciplinas = $repo->buscarTodos();
  }
?>




<div class="row">
  <div class=" col-12">
    <br>
   <div class="card">
    <div class="card-header"> 
      <b>Lista de Disciplinas</b>
    </div>
      <div class="card-body">
        <form action="disciplinas.php" method="get">
     <div class="row">
      <div class="col-4">
        <a href="disciplinas_novo.php" class="btn btn-outline-success">
          Nova disciplinas
        </a>
      </div>
      <div class="col-4">
        <input name="busca" class="form-control" />
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-outline-primary">
          Pesquisar
        </button>
      </div>
     </div>
     </form>
     <div class="row">
       <table class="table table-striped">
         <thead>
           <tr>
             <th>Id</th>
             <th>Disciplinas</th>
             <th></th>
           </tr>
         </thead>
         <tbody>
          <?php
//foreach serve para ler todos os usuarios
//vindos do banco em formato de array chave valor
foreach ($disciplinas as $item)
{
  echo "<tr>
          <td>$item[DISCIPLINA]</td>
          <td>
             <a class= 'btn btn-outline-danger'
                   href='./disci/disciplinas_excluir.php?id=".$item['ID']."'>Excluir</a>
             <a class= 'btn btn-outline-warning'   
                   href='./disciplinas_Editar.php?id=".$item['ID']."'>Editar</a>   
          </td>
       </tr>";
}
?>
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
</div>

<?php
include "rodape.php"; 
?>















