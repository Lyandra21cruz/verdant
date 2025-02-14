<?php 

class UsuarioModel {
    public $pdo;

    public function criarUsuario()
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO usuarios () VALUES (?)");
        $stmt->execute([]);
    }
    
    public function editarUsuario($id){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE usuarios SET  WHERE id = ?");
        $stmt->execute([,$id]);
    }

    public function deletarUsuario($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }

    
}

?>