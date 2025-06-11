<?php
session_start();
<<<<<<< HEAD
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - SecureTickets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

  <div class="text-center p-4 bg-white rounded shadow" style="max-width: 400px; width: 100%;">
    <img src="assets/img/logo.png" alt="SecureTickets Logo" width="240" class="mb-4">

    <h2 class="mb-4">Login</h2>

    <?php if ($error): ?>
      <div class="alert alert-danger p-2">Usuário ou senha inválidos.</div>
    <?php endif; ?>

    <form method="POST" action="login_process.php">
      <div class="mb-3 text-start">
        <label for="username" class="form-label">Usuário</label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
  </div>

</body>
</html>

=======
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['loggedin'] = true;
        header('Location: events.php');
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - SecureTickets</title>
</head>
<body>
<h2>SecureTickets - Login</h2>
<form method="post" action="login.php">
    <label>Usuário:</label><input type="text" name="username" required><br>
    <label>Senha:</label><input type="password" name="password" required><br>
    <input type="submit" value="Entrar">
</form>
</body>
</html>
>>>>>>> 819191369813a03488be523bbb05e6a6f987d4ff
