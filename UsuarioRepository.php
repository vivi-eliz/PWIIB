<?php 
class UsuarioRepository{
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos()
    {
       $result = $this -> conexao ->query("SELECT * FROM usuarios");
       $usuarios =[];
       while ($row = $result ->fetch_assoc())
       {
           array_push($usuarios, $row);
       }
       return $usuarios;
    }

    public function buscarPorId($id)
    {
        $stmt = $this ->conexao ->prepare("SELECT *FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($login, $senha, $ativo)
    {
        echo $ativo;
        
        $sql = "INSERT INTO usuarios (LOGIN, SENHA, ATIVO) 
                VALUES (?, ?, ?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("ssi", $login,$senha,$ativo);
                $stmt->execute();
    }

    public function Editar($login, $id, $ativo)
    {
        
        $sql = "UPDATE usuarios set LOGIN = ?, ATIVO = ? where ID = ?"; 
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $login,$ativo,$id);
                $stmt->execute();
    }
   
    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuarios where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

    public function Pesquisar($busca)
    {

        $sql = "select * from usuarios where LOGIN like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $usuarios = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($usuarios, $row);
        }
       return $usuarios;
    }
}
?>