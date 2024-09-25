document.getElementById('calculateButton').addEventListener('click', function() {
    const number = parseFloat(document.getElementById('numberInput').value);
    const percentage = parseFloat(document.getElementById('percentageInput').value);
    const operation = document.getElementById('operationSelect').value;

    if (isNaN(number) || isNaN(percentage)) {
        alert('Por favor, insira valores válidos.');
        return;
    }

    const resultPercentage = (number * percentage) / 100;
    let result;

    if (operation === 'add') {
        result = number + resultPercentage;
    } else if (operation === 'subtract') {
        result = number - resultPercentage;
    }

    document.getElementById('result').textContent = `Resultado: ${result.toFixed(2)}`;
});

// Exibir a data atual no rodapé
const today = new Date();
const options = { year: 'numeric', month: 'long', day: 'numeric' };
document.getElementById('date').textContent = today.toLocaleDateString('pt-BR', options);
