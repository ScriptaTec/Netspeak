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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .current-profile {
            margin-bottom: 30px;
        }
        .current-profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }
        .profile-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .profile-option {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 8px;
            padding: 5px;
            transition: all 0.3s ease;
        }
        .profile-option img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-option:hover {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }
        .profile-option.selected {
            border-color: #28a745; /* Cor para indicar a seleção */
            box-shadow: 0 0 12px rgba(40, 167, 69, 0.7);
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="current-profile">
            <h2>Sua Foto de Perfil Atual:</h2>
            <img id="currentProfileDisplay" src="../imgs/imgs_perfil/<?php echo htmlspecialchars($foto_perfil); ?>" alt="Foto de Perfil Atual">
        </div>

        <h2>Selecione uma Nova Foto de Perfil:</h2>
        <form id="profileForm" action="../controller/controller_imgs.php" method="POST">
            <div class="profile-options">
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <?php 
                        $imageName = "perfil{$i}.png";
                        $isSelected = ($imageName === $foto_perfil) ? "selected" : "";
                    ?>
                    <div class="profile-option <?php echo $isSelected; ?>" data-image="<?php echo $imageName; ?>">
                        <img src="../imgs/imgs_perfil/<?php echo $imageName; ?>" alt="Perfil <?php echo $i; ?>">
                    </div>
                <?php endfor; ?>
            </div>
            <input type="hidden" name="selected_picture" id="selectedPictureInput" value="<?php echo htmlspecialchars($current_profile_picture); ?>">
            <button type="submit">Salvar Nova Foto de Perfil</button>
        </form>
    </div>
<script src="../js/img_perfil.js"></script>
</body>
</html>