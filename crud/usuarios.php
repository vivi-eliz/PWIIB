<?php
   include "./InicioeFim/cabecalho.php";
   include "conexao.php";
   //Inclui o arquivo da classe Ropository do usuário
  require_once  'UsuarioRepository.php';
  //Cria um objeto do tipo UsuarioRepository.php chamado repo
 //E recebe a conexao do bando de dados
  $repo = new UsuarioRepository($conexao);
  //Chamei o metodo BuscarTodos para puxar
  //todos usuarios do banco de dados

  if(isset($_GET['busca']) && !empty($_GET['busca']))
  {
    $usuarios = $repo->Pesquisar($_GET['busca'] );
  }
  else
  {
    //Chamei o metodo BuscarTodos para puxar
   //todos usuarios do banco de dados
   $usuarios = $repo->buscarTodos();
  }

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
        <form action="usuarios.php" method="get">
     <div class="row">
      <div class="col-4">
        <a href="novo_usuario.php" class="btn btn-outline-success">
          Novo usuário
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
                      <td>$item[ID]</td>
                      <td>$item[LOGIN]</td>
                      <td>$item[ATIVO]</td>
                      <td>
                         <a class= 'btn btn-outline-danger'
                               href='Excluir_Usuarios.php?id=".$item['ID']."'>Excluir</a>
                         <a class= 'btn btn-outline-warning'   
                               href='editar_Usuario.php?id=".$item['ID']."'>Editar</a>   
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
  include "./InicioeFim/rodape.php"; 
?>