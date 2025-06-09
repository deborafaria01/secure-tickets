<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
require_once __DIR__ . '/../models/Database.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $data = $_POST['data_evento'];
    $stmt = $db->pdo->prepare("INSERT INTO eventos (nome, data_evento) VALUES (:nome, :data)");
    $stmt->execute([':nome' => $nome, ':data' => $data]);
    header("Location: events.php");
    exit();
}

$eventos = $db->pdo->query("SELECT * FROM eventos ORDER BY data_evento ASC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Eventos</title></head>
<body>
<h2>Lista de Eventos</h2>
<ul>
<?php foreach($eventos as $evento): ?>
    <li><?= htmlspecialchars($evento['nome']) ?> - <?= $evento['data_evento'] ?></li>
<?php endforeach; ?>
</ul>

<h3>Novo Evento</h3>
<form method="post">
    Nome: <input type="text" name="nome" required><br>
    Data: <input type="date" name="data_evento" required><br>
    <input type="submit" value="Cadastrar">
</form>

<br><a href="logout.php">Sair</a>
</body>
</html>
