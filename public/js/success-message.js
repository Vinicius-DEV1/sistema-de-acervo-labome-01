// Fecha a caixa de sucesso quando o botão "X" é clicado
document.getElementById('closeBtn')?.addEventListener('click', function() {
    const successBox = document.getElementById('successMessage');
    if (successBox) {
        successBox.classList.remove('show');
    }
});

// Fecha a caixa de sucesso automaticamente após 5 segundos
setTimeout(function() {
    const successBox = document.getElementById('successMessage');
    if (successBox) {
        successBox.classList.remove('show');
    }
}, 10000); // 5 segundos
