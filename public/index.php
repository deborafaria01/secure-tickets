<<<<<<< HEAD
<?php header("Location: login.php"); exit(); ?>
=======
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
header('Location: events.php');
exit();
?>
>>>>>>> 819191369813a03488be523bbb05e6a6f987d4ff
