<?php
   include "cabecalho.php";
   include "conexao.php";
   //Inclui o arquivo da classe Ropository do usuário
  require_once  'UsuarioRepository.php';
  //Cria um objeto do tipo UsuarioRepository.php chamado repo
 //E recebe a conexao do bando de dados
  $repo = new UsuarioRepository($conexao);
  //Chamei o metodo BuscarTodos para puxar
  //todos usuarios do banco de dados
  $usuarios = $repo->buscarTodos();
 //foreach serve para ler todos os usuarios
 //vindos do banco em formato de array chave valor
  foreach ($usuarios as $item)

 ?>

<div class="row">
  <div class=" col-12">
    <br>
   <div class="card">
    <div class="card-header"> 
      <b>Lista de usuarios</b>
    </div>
      <div class="card-body">
     <div class="row">
      <div class="col-4">
        <a href="novo_usuario.php" class="btn btn-success">
          Novo usuário
        </a>
      </div>
      <div class="col-4">
        <input name="buscar" class="form-control" />
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary">
          Pesquisar
        </button>
      </div>
     </div>
     <div class="row">
       <table class="table table-striped">
         <thead>
           <tr>
             <th>Id</th>
             <th>Login</th>
             <th>Ativo</th>
             <th></th>
           </tr>
         </thead>
         <tbody>
          <?php
            //foreach serve para ler todos os usuarios
            //vindos do banco em formato de array chave valor
            foreach ($usuarios as $item)
            {
              echo "<tr>
                      <td>$item[LOGIN]</td>
                      <td>$item[ID]</td>
                      <td>$item[ATIVO]</td>
                      <td></td>
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