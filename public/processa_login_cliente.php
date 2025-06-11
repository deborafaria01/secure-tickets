<?php
session_start();
$usuario = $_POST['cliente'] ?? '';
$senha = $_POST['senha'] ?? '';

// Apenas para teste, simulação de credenciais
if ($usuario === 'cliente1' && $senha === 'cliente123') {
    $_SESSION['cliente'] = $usuario;
    header("Location: cliente_home.php");
    exit();
} else {
    header("Location: login_cliente.php?error=1");
    exit();
}
?>
