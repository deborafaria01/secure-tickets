<?php
session_start();
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
