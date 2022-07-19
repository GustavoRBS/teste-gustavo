function get(url) {
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText
}

function main() {
    let qtdDias = document.getElementById('qtdDias').value;
    let qtdHoras = document.getElementById('qtdHoras').value;
    let potencia = document.getElementById('potencia').value;
    let data = get("http://localhost/Quallit/calculadora-kWh.php?qtdDias=" + qtdDias + "&qtdHoras=" + qtdHoras + "&potencia=" + potencia);
    let resultados = JSON.parse(data);
    resultados.forEach(elemento => {
        let linha = addValor(elemento);
    });
}

function addValor(resultado) {
    //console.log(resultado.valorTotal)
    document.getElementsByClassName('resposta')[0].innerHTML = "O valor total de consumo de energia é de <b>R$ " + resultado.valorTotal;
}