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
  <title>Dashboard - SecureTickets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <?php include 'includes/navbar.php'; ?>

  <div class="container mt-4">
    <h2>Bem-vindo ao Dashboard, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Aqui você pode gerenciar seus eventos e acompanhar relatórios.</p>
  </div>

</body>
</html>

