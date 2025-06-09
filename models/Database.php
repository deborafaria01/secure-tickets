<?php
class Database {
    private $host = 'db';
    private $dbname = 'securetickets';
    private $user = 'postgres';
    private $password = 'postgres';
    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}
?>
