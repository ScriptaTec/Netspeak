<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tradutor Netspeak</title>
</head>
<body>
    <h2>Digite uma frase para traduzir para Netspeak:</h2>
    <form method="post" action="">
        <input type="text" name="frase" required style="width: 300px;">
        <button type="submit">Enviar</button>
    </form>

    <?php if (!empty($respostaDaApi)): ?>
        <p><?= htmlspecialchars($respostaDaApi) ?></p>
    <?php endif; ?>

    <?php
    require('footer.php');
    ?>
</body>
</html>
