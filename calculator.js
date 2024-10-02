document.addEventListener('DOMContentLoaded', function () {
    const display = document.getElementById('calc-display');
    const buttons = document.querySelectorAll('.calc-btn');
    const clearButton = document.getElementById('calc-clear');
    
    let currentInput = '';
    let result = '';

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            
            if (value === '=') {
                try {
                    result = eval(currentInput);
                    display.value = result;
                    currentInput = result; // Allow further calculations with the result
                } catch (e) {
                    display.value = 'Error';
                    currentInput = '';
                }
            } else {
                currentInput += value;
                display.value = currentInput;
            }
        });
    });

    clearButton.addEventListener('click', function () {
        currentInput = '';
        display.value = '';
    });
});
