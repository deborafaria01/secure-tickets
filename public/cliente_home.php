<?php
session_start();
if (!isset($_SESSION['cliente'])) {
    header("Location: login_cliente.php");
    exit();
}

require_once '../models/Database.php';
include 'includes/navbar.php';

$db = new Database();
$pdo = $db->connect();

try {
    $stmt = $pdo->query("SELECT nome, data_evento FROM eventos ORDER BY data_evento ASC");
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar eventos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Área do Cliente - Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h2>Bem-vindo, <?= htmlspecialchars($_SESSION['cliente']) ?>!</h2>
  <p class="text-muted">Veja os eventos disponíveis:</p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Evento</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($eventos): ?>
        <?php foreach ($eventos as $evento): ?>
          <tr>
            <td><?= htmlspecialchars($evento['nome']) ?></td>
            <td><?= htmlspecialchars($evento['data_evento']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="2">Nenhum evento disponível no momento.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>

  <a href="cliente_logout.php" class="btn btn-outline-danger">Sair</a>
</div>

</body>
</html>

