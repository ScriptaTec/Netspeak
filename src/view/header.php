<?php
session_start();
require "../controller/controller_perfil.php";

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Usuário não logado.'); location.href = 'cadastro.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Tailwind CSS-->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!--Biblioteca FlowBite-->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!--Fontes das letras-->
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!--Navegação entre telas no perfil-->
    <script src="../js/navegacao.js" defer></script>
    <!--Animação do input no login e cadastro-->
    <script src="../js/animacao.js" defer></script>
    <!--Animação das letras no index-->
    <script src="../js/animacaoLetra.js" defer></script>
    <!--Pop-ups-->
    <script src="../js/pop_ups.js" defer></script>

    <title>Emoji moji</title>
</head>

<body class="jersey">