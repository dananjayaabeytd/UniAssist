<?php


session_start();
unset($_SESSION['SA_ID']);
header("Location: http://localhost/super_admin/login.php");
exit();


?>