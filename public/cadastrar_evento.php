<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Create New Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="container mt-4">
  <h2>Create New Event</h2>
  <p class="text-muted">Preencha os dados para cadastrar um novo evento na plataforma.</p>

  <form action="processa_evento.php" method="POST">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome do Evento</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
      <label for="data_evento" class="form-label">Data do Evento</label>
      <input type="date" class="form-control" id="data_evento" name="data_evento" required>
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>
</div>

</body>
</html>

