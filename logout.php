<?php
session_start();
session_destroy();
header('locations:login.php');
?>