<?php
session_start();
session_destroy();
header("Location: cliente_login.php");
exit();
?>