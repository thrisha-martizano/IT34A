<?php
require_once __DIR__ . '/../../config/config.php';

session_start();
$_SESSION = [];
session_destroy();

header('Location: ' . BASE_URL . '/index.php');
exit();
?>