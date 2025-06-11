<?php
class Database {
    private $host = 'localhost';
    private $port = '5432';
    private $dbname = 'securetickets';
    private $user = 'securetickets_user';
    private $pass = ''; // adicione a senha aqui, se houver

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



