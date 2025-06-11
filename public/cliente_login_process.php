<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'cliente' && $password === 'cliente123') {
    $_SESSION['cliente'] = $username;
    header("Location: cliente_home.php");
    exit();
} else {
    header("Location: cliente_login.php?error=1");
    exit();
}
?>