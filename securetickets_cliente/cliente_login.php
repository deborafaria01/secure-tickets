<?php
session_start();
if (isset($_SESSION['cliente'])) {
    header("Location: cliente_home.php");
    exit();
}
$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login do Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.08);
      width: 100%;
      max-width: 400px;
      background-color: white;
    }
    .logo {
      display: block;
      margin: 0 auto 20px;
      max-width: 150px;
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="assets/img/logo.png" alt="Logo" class="logo">
    <h3 class="text-center mb-4">Login do Cliente</h3>

    <?php if ($error): ?>
      <div class="alert alert-danger">Usuário ou senha inválidos.</div>
    <?php endif; ?>

    <form method="POST" action="cliente_login_process.php">
      <div class="mb-3">
        <label class="form-label">Usuário</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Entrar</button>
    </form>
  </div>
</body>
</html>
