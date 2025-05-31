<?php  include "./InicioeFim/cabecalho.php"; 
    include "conexao.php";

    require_once  "./disci/disciplinasRepository.php";
    $repo = new disciplinasRepository($conexao);

    if(isset($_GET['id']) && !empty($_GET['id']))
  {
    $disciplinas = $repo->Pesquisar($_GET['id'] );
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
        <form action="usuarios.php" method="get">
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















