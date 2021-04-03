function calcular() {
    let dolar = document.getElementById("inputMonto").value;
    let tipocambio = document.getElementById("inputTipCambio").value;
    //let resultado = document.getElementById("resultado").value;

    var hola = dolar * tipocambio;
    var resultado = hola.toFixed(2);

    //document.getElementById('inputTotQuetzales').innerHTML = resultado;
    document.getElementById("inputTotQuetzales").value = resultado; 
}

//function multiplicar() { m1 = document.getElementById("multiplicando").value; m2 = document.getElementById("multiplicador").value; r = m1 * m2; 