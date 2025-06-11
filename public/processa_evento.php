<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once '../models/Database.php';

if (!isset($_POST['nome']) || !isset($_POST['data_evento'])) {
    die("Dados do evento ausentes.");
}

$nome = trim($_POST['nome']);
$data = $_POST['data_evento'];

try {
    $db = new Database();
    $stmt = $db->pdo->prepare("INSERT INTO eventos (nome, data_evento) VALUES (:nome, :data)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data', $data);
    $stmt->execute();

    // Redireciona com sucesso
    header("Location: eventos.php?success=1");
    exit();
} catch (PDOException $e) {
    die("Erro ao cadastrar evento: " . $e->getMessage());
}
?>
