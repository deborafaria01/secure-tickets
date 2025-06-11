<?php
class Database {
<<<<<<< HEAD
    private $host = 'db'; // nome do serviço definido no docker-compose.yml
=======
    private $host = 'db';
>>>>>>> 819191369813a03488be523bbb05e6a6f987d4ff
    private $dbname = 'securetickets';
    private $user = 'postgres';
    private $password = 'postgres';
    public $pdo;

    public function __construct() {
        try {
<<<<<<< HEAD
            $this->pdo = new PDO(
                "pgsql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password
            );
=======
            $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
>>>>>>> 819191369813a03488be523bbb05e6a6f987d4ff
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }
}
?>
