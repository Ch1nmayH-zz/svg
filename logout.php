<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['id']);
session_destroy();
// header("Location: .../index.php");
header("location:index.php");

?>
