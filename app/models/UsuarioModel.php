<?php 

class UsuarioModel {
    public $pdo;

    public function criarUsuario($nome_usuario, $email, $vendedor, $admin)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome_usuario, email, vendedor, admin) VALUES (?)");
        $stmt->execute([$nome_usuario, $email, $vendedor, $admin]);
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