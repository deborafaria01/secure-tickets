<?php
class Database {
    private $host = 'localhost';        // ou IP do banco, se estiver externo
    private $port = '5432';             // porta padrão do PostgreSQL
    private $dbname = 'securetickets';
    private $user = 'seu_usuario';      // substitua pelo seu usuário real do PostgreSQL
    private $pass = 'sua_senha';        // substitua pela sua senha real

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


