<?php
session_start();
include '../controller/config.php';

if (!isset($_SESSION['user'])) {
    echo "usuario não logado";
}

$username = $_SESSION['user']['email'];
$current_profile_picture = "perfil1.png";
$stmt = $pdo->prepare("SELECT foto_perfil FROM usuarios WHERE email = ?");
$stmt->execute([$username]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
$foto_perfil = $usuario['foto_perfil'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Perfil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans m-5 bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md text-center">
        
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Sua Foto de Perfil Atual:</h2>
            <img id="currentProfileDisplay" 
                 src="../imgs/imgs_perfil/<?php echo htmlspecialchars($foto_perfil); ?>" 
                 alt="Foto de Perfil Atual"
                 class="w-40 h-40 rounded-full object-cover border-4 border-blue-500 shadow-lg mx-auto">
        </div>

        <h2 class="text-xl font-semibold mb-4">Selecione uma Nova Foto de Perfil:</h2>
        <form id="profileForm" action="../controller/controller_imgs.php" method="POST">
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4 mt-8">
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <?php 
                        $imageName = "perfil{$i}.png";
                        $isSelected = ($imageName === $foto_perfil) ? "border-green-500 shadow-xl" : "border-transparent";
                    ?>
                    <div class="profile-option cursor-pointer border-2 rounded-lg p-1 transition-all duration-300 hover:border-blue-500 hover:shadow-lg <?php echo $isSelected; ?>" 
                         data-image="<?php echo $imageName; ?>">
                        <img src="../imgs/imgs_perfil/<?php echo $imageName; ?>" 
                             alt="Perfil <?php echo $i; ?>"
                             class="w-24 h-24 rounded-full object-cover mx-auto">
                    </div>
                <?php endfor; ?>
            </div>
            <input type="hidden" name="selected_picture" id="selectedPictureInput" value="<?php echo htmlspecialchars($current_profile_picture); ?>">
            <button type="submit" class="mt-8 bg-blue-500 text-white py-2 px-6 rounded-md text-lg font-medium transition-colors duration-300 hover:bg-blue-600">
                Salvar Nova Foto de Perfil
            </button>
        </form>
    </div>
<script src="../js/img_perfil.js"></script>
</body>
</html>