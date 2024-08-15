document.getElementById('form-calculo').addEventListener('submit', function(event){
    event.preventDefault()
    const num = parseInt(document.getElementById('num').value)
    const opcion = document.getElementById('opcion').value
    const resultado = fibonacci(num)

    const resultadoDiv = document.getElementById('resultado')
    resultadoDiv.innerHTML = ''

    switch (opcion) {
        case 'lista':
            const lista = document.createElement('ul')
            resultado.forEach(numero =>{
                const itemLista = document.createElement('li')
                itemLista.textContent = numero
                lista.appendChild(itemLista)
            })
            resultadoDiv.appendChild(lista)
        break
        case 'tabla':
            const tabla = document.createElement('table')
            const fila = document.createElement('tr')
            resultado.forEach(numero => {
                const celda = document.createElement('td')
                celda.textContent = numero
                fila.appendChild(celda)
                tabla.appendChild(fila)
            });
            resultadoDiv.appendChild(tabla)
        break
        default:
            break
    }
})

function fibonacci(num){
    if(num === 0){
        return [0]
    } if(num === 1){
        return [0, 1]
    } else{
        const secuencia = fibonacci(num - 1);
        secuencia.push(secuencia[secuencia.length - 1] + secuencia[secuencia.length - 2]);
        return secuencia;
    }
}
