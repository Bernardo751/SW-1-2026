function trocarNome() {
    var nome = document.getElementById("campoNome").value;
    document.getElementById("nomeExibido").innerText = 
    "Nome: " + nome;

    
}

function somar() {
    var numero1 = parseFloat(document.getElementById("num1").value);
    var numero2 = parseFloat(document.getElementById("num2").value);

    var soma = numero1 + numero2;

    document.getElementById("resultado").innerText = "Resultado: " + soma;

}

function dividir() {

    var altura = parseFloat(document.getElementById("campoAltura").value);
    var peso = parseFloat(document.getElementById("campoAlPeso").value);

    var imc = peso / (altura * altura);

    var resultado = "";

    if (imc < 18.5) {
        resultado = "Você está muito abaixo do peso";
    }
    else if (imc >= 18.5 && imc <= 24.9) {
        resultado = "Você está na média";
    }
    else if (imc >= 25 && imc <= 29.9) {
        resultado = "Você está acima do normal";
    }
    else if (imc >= 30 && imc <= 39.9) {
        resultado = "Você está obeso";
    }
    else {
        resultado = "Obesidade grave";
    }

    document.getElementById("imcexibido").innerText =
    "Seu IMC: " + imc.toFixed(2) + " - " + resultado;
}   