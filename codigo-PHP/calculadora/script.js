document.getElementById('form-calculo').addEventListener('submit', function(event){
    event.preventDefault()
    const operador = document.getElementById('operador').value
    const num1 = parseFloat(document.getElementById('num1').value)
    const num2 = parseFloat(document.getElementById('num2').value)

    const resultado = calcular(operador, num1, num2)

    document.getElementById('resultado').value = resultado
})

function calcular(operador, num1, num2){
    switch (operador) {
        case 'suma':
            return num1 + num2
        case 'resta':
            return num1 - num2
        case 'multiplicacion':
            return num1 * num2
        case 'division':
            if(num2 === 0){
                return "No se puede dividir entre 0"
            } else{
                return num1 / num2
            }
        default:
            return "Operación no válida"
    }
}
