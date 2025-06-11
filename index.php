<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: public/dashboard.php");
} else {
    header("Location: public/login.php");
}
exit();
