<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Você precisa estar logado.'); location.href='../view/cadastro.php';</script>";
    exit;
}

$email = $_SESSION['user']['email'];

$delete = $pdo->prepare("DELETE FROM usuarios WHERE email = :email");
$delete->bindParam(':email', $email);

if ($delete->execute()) {
    session_destroy();
    echo "<script>location.href='../view/cadastro.php';</script>";
} else {
    echo "<script>history.back();</script>";
}
