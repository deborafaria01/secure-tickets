<?php
class Database {
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pass;

    public function __construct() {
        $this->host = getenv('DB_HOST') ?: 'localhost';
        $this->port = getenv('DB_PORT') ?: '5432';
        $this->dbname = getenv('DB_NAME') ?: 'securetickets';
        $this->user = getenv('DB_USER') ?: 'securetickets_user';
        $this->pass = getenv('DB_PASS') ?: ''; // Senha padrão se não houver variável
    }

    public function connect() {
        try {
            $conn = new PDO(
                "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}",
                $this->user,
                $this->pass
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}



