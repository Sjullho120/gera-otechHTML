// cadastro de produto
document.addEventListener('DOMContentLoaded', () => {
    const precoInput = document.getElementById('preco');

    precoInput.addEventListener('input', () => {
        const preco = precoInput.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
        const precoFormatado = (preco / 100).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }); // Divide por 100 e formata como Real
        precoInput.value = precoFormatado;
    });

    const addMoreColorsButtonUnico = document.getElementById('add-more-cores-unico');
    const showMoreSizesButton = document.getElementById('show-more-sizes');
    const hideMoreSizesButton = document.getElementById('hide-more-sizes');
    const moreSizesContainer = document.getElementById('more-sizes-container');
    const calculateTotalButton = document.getElementById('calculate-total');
    const totalQuantityInput = document.getElementById('total');
    const imageInput = document.getElementById('imagem');
    const imagePreview = document.getElementById('image-preview');

    const colorsContainers = {
        unico: document.getElementById('cores-container'),
        p: document.getElementById('cores-p-container'),
        m: document.getElementById('cores-m-container'),
        g: document.getElementById('cores-g-container'),
        gg: document.getElementById('cores-gg-container')
    };

    const addMoreColors = (containerId) => {
        const container = colorsContainers[containerId];
        if (container.children.length < 15) {
            const colorGroup = document.createElement('div');
            colorGroup.className = 'color-group';
            colorGroup.innerHTML = `
                <input type="text" name="cores_${containerId}[]" placeholder="Cor">
                <input type="number" name="quantidades_${containerId}[]" placeholder="Quantidade" min="0">
            `;
            container.appendChild(colorGroup);
        }
    };

    addMoreColorsButtonUnico.addEventListener('click', () => {
        addMoreColors('unico');
    });

    showMoreSizesButton.addEventListener('click', () => {
        moreSizesContainer.classList.remove('hidden');
        showMoreSizesButton.classList.add('hidden');
        hideMoreSizesButton.classList.remove('hidden');
    });

    hideMoreSizesButton.addEventListener('click', () => {
        moreSizesContainer.classList.add('hidden');
        showMoreSizesButton.classList.remove('hidden');
        hideMoreSizesButton.classList.add('hidden');
    });

    document.getElementById('add-more-cores-p').addEventListener('click', () => addMoreColors('p'));
    document.getElementById('add-more-cores-m').addEventListener('click', () => addMoreColors('m'));
    document.getElementById('add-more-cores-g').addEventListener('click', () => addMoreColors('g'));
    document.getElementById('add-more-cores-gg').addEventListener('click', () => addMoreColors('gg'));

    calculateTotalButton.addEventListener('click', () => {
        let totalQuantity = 0;
        ['unico', 'p', 'm', 'g', 'gg'].forEach(size => {
            const quantities = document.querySelectorAll(`input[name="quantidades_${size}[]"]`);
            quantities.forEach(quantityInput => {
                const quantity = parseInt(quantityInput.value) || 0;
                totalQuantity += quantity;
            });
        });
        totalQuantityInput.value = totalQuantity;
    });

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Imagem do Produto">`;
            };
            reader.readAsDataURL(file);
        }
    });
});
