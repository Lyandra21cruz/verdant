<?php
class Config
{
    // Conexão com banco de dados
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "verdant";

    public $pdo;

    public function getConnection()
    {
        $this->pdo = null;

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=verdant', 'root', ''); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage()); 
        }

        return $this->pdo;
    }
}
