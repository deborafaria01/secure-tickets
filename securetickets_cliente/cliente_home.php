<?php
session_start();
if (!isset($_SESSION['cliente'])) {
    header("Location: cliente_login.php");
    exit();
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
  <div class="container mt-5">
    <h2 class="mb-4">Bem-vindo, <?php echo htmlspecialchars($_SESSION['cliente']); ?>!</h2>
    <p>Lista de eventos cadastrados:</p>
    <ul class="list-group">
      <li class="list-group-item">Evento: Aula DevSecOps - Data: 2025-06-15</li>
      <li class="list-group-item">Evento: Partida Brasil x Argentina - Data: 2025-06-30</li>
    </ul>
    <a href="cliente_logout.php" class="btn btn-danger mt-4">Sair</a>
  </div>
</body>
</html>
