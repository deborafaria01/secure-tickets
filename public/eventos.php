<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require_once '../models/Database.php';
include 'includes/navbar.php';

$db = new Database();

try {
    $stmt = $db->pdo->query("SELECT nome, data_evento FROM eventos ORDER BY data_evento ASC");
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar eventos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Event Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h2>Event Management</h2>
  <p class="text-muted">Gerencie e visualize os eventos cadastrados na plataforma.</p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($eventos) > 0): ?>
        <?php foreach ($eventos as $evento): ?>
          <tr>
            <td><?= htmlspecialchars($evento['nome']) ?></td>
            <td><?= htmlspecialchars($evento['data_evento']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="2">Nenhum evento cadastrado até o momento.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

</body>
</html>

