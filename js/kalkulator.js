const calculator = {
    Number : '0',
    operator : null,
    angka1 : null,
    angka2 : false
};

function updateDisplay(){
    document.querySelector("#hasil").innerText = calculator.Number;
}

function clearCalc() {
    calculator.Number = '0',
    calculator.operator = null,
    calculator.angka1 = null,
    calculator.angka2 = false;
}

function  inputDigits(digit) {
    if (calculator.Number === '0'){
        calculator.Number = digit;
    }else{
        calculator.Number += digit;
    }
}

function inverseNumber() {
    if (calculator.Number === '0') {
        return;
    }
    calculator.Number = calculator.Number * -1;
}

function handleOperator(operator) {
    if(!calculator.angka2){
        calculator.operator = operator;
        calculator.angka2 = true;
        calculator.angka1 = calculator.Number;
        
        calculator.Number = '0';
    }else{
        alert('Operator sudah diterapkan');
    }
}

function performCalc() {
    if(calculator.angka1 == null || calculator.operator == null){
        alert("Belum nambah operator");
        return;
    }

    let result = 0;
    if(calculator.operator === "+"){
        result = parseInt(calculator.angka1) + parseInt(calculator.Number);
    }else{
        result = parseInt(calculator.angka1) - parseInt(calculator.Number);
    }   
    // calculator.Number = result;
    //Objek yang akan dikirimkan sebagai argumen putHistory()
    const history = {
        angka1 : calculator.angka1,
        angka2 : calculator.Number,
        operator : calculator.operator,
        result: result
    }
    putHistory(history);
    calculator.Number = result;
    renderHistory();
}

const buttons = document.querySelectorAll(".button");
for (let button of buttons){
    button.addEventListener('click',function (event) {
        const target = event.target;

        if(target.classList.contains('clear')){
            clearCalc();
            updateDisplay();
            return;
        }

        if(target.classList.contains('operator')){
            handleOperator(target.innerText);
            return;
        }

        if(target.classList.contains('negatif')){
            inverseNumber();
            updateDisplay();
            return;
        }

        if(target.classList.contains('equals')){
            performCalc();
            updateDisplay();
            return;
        }

        inputDigits(target.innerText);
        updateDisplay()
    });
}