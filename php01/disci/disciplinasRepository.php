<?php
class disciplinasRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
      {
          $this->conexao = $conexao;
      }

      public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM disciplinas");

        $disciplinas = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplinas, $row);
        }
        return $disciplinas;
    }

    public function Pesquisar($id)
    {
        $sql = "SELECT * FROM disciplinas WHERE LOGIN like '%$id%' ";
        $resultado = $this->conexao->query($sql);
        $disciplinas = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($disciplinas, $row);
        }
        return $disciplinas;
    }

    public function editar($id, $nome) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplinas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($disciplinas)
    {
        $sql = "INSERT INTO disciplinas (DISCIPLINA) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $disciplinas);
                $stmt->execute();
    }

    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplinas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    // 2 parte

}
?>