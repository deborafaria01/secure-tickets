<?php
session_start();
if (!isset($_SESSION['cliente'])) {
    header("Location: cliente_login.php");
    exit();
}
require_once '../models/Database.php';

$db = new Database();

try {
    $stmt = $db->pdo->query("SELECT * FROM eventos ORDER BY data_evento ASC");
    $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar eventos: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Eventos Disponíveis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <img src="assets/img/logo.png" alt="Logo" width="150">
      <form action="cliente_logout.php" method="POST">
        <button type="submit" class="btn btn-danger">Sair</button>
      </form>
    </div>

    <h2 class="mb-4">Eventos Disponíveis</h2>

    <?php if (empty($eventos)): ?>
      <div class="alert alert-info">Nenhum evento cadastrado no momento.</div>
    <?php else: ?>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Nome</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($eventos as $evento): ?>
            <tr>
              <td><?= htmlspecialchars($evento['nome']) ?></td>
              <td><?= date("d/m/Y", strtotime($evento['data_evento'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

</body>
</html>
