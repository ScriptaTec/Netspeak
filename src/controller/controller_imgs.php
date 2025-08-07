<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_picture = $_POST['selected_picture'];

    // Validação básica: garantir que a imagem selecionada é uma das opções válidas
    // Você pode fazer uma lista mais robusta de imagens permitidas
    if (preg_match('/^perfil[1-8]\.png$/', $selected_picture)) {
        // Tenta atualizar a foto de perfil se o usuário já existe
        $stmt = $pdo->prepare("UPDATE usuarios SET foto_perfil = ? WHERE email = ?");
        // $stmt->bind_param("ss", );:
        $stmt->execute([$selected_picture, $_SESSION['user']['email']]);

        // Se nenhuma linha foi afetada (usuário não existe), insere um novo registro
        // if ($stmt-> === 0) {
        //     // $stmt->close();:: // Fecha o statement anterior
        //     $stmt = $conn->prepare("INSERT INTO usuarios (username, foto_perfil) VALUES (?, ?)");
        //     // $stmt->bind_param:("ss", );
        //     $stmt->execute([$selected_picture]);
        // }
        // $stmt->close();
    }
}

// $conn->close();
header("Location: ../view/perfil.php"); // Redireciona de volta para a página principal
exit();
?>