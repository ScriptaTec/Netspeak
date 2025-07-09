document.addEventListener('DOMContentLoaded', function() {
    const profileOptions = document.querySelectorAll('.profile-option');
    const selectedPictureInput = document.getElementById('selectedPictureInput');
    const currentProfileDisplay = document.getElementById('currentProfileDisplay');

    profileOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove a classe 'selected' de todos os outros
            profileOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Adiciona a classe 'selected' ao clicado
            this.classList.add('selected');
            
            // Atualiza o valor do input oculto
            const selectedImage = this.dataset.image;
            selectedPictureInput.value = selectedImage;

            // Atualiza a imagem exibida como "atual" instantaneamente
            currentProfileDisplay.src = '../imgs/imgs_perfil/' + selectedImage;
        });
    });
});