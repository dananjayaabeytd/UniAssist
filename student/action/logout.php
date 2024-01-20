<?php


session_start();
unset($_SESSION['S_ID']);
header("Location: http://localhost/auth/login.php");
exit();


?>