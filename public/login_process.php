<?php
session_start();

// Credenciais fixas apenas para fins didáticos
$usuario = 'admin';
$senha = 'admin';

// Pegando dados do formulário
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $usuario && $password === $senha) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
