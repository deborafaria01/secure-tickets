<?php
session_start();
<<<<<<< HEAD
session_unset();
session_destroy();
header("Location: login.php");
exit();
=======
session_destroy();
header('Location: login.php');
exit();
?>
>>>>>>> 819191369813a03488be523bbb05e6a6f987d4ff
