<?php 

// criação da função que valida entradas
function validarEntrada($valor){
    if (filter_var(!is_numeric($valor)) ){
        return false;
    }
}

// criação da função que exibe a mensagem
function exibirMensagem(){

}


// criação da função que converte para dólar
function valorDolar($brl, $taxaDolar){
    $dolar = $brl / $taxaDolar;
    return round($dolar,2);
}

// criação da função que converte para euro
function valorEuro($brl, $taxaEuro){
    $euro = $brl / $taxaEuro;
    return round($euro,2);
}
function valorPesoArgentino($brl, $taxaPesoArgentino){
    $pesoArgentino = $brl / $taxaPesoArgentino;
    return round($pesoArgentino,2);
}

$valor = trim($_GET['valor']);
$moeda = trim($_GET['moeda']);

$valorConvertido = valorDolar($brl, $taxaDolar);
$valorConvertido = valorEuro($brl, $taxaEuro);
$valorConvertido = valorPesoArgentino($brl, $taxaPesoArgentino);
validarEntrada($valor);

if ($moeda === "USD") {
    $cotacao = 0;
} else if ($moeda === "EUR") {
    $cotacao = 0;
} else if ($moeda === "ARS") {
    $cotacao = 0;
} else {
    $cotacao = null;
}

if ($cotacao) {
    $resultado = $valor / $cotacao;
    echo "R$ " . number_format($valor, 2, ',', '.') . 
         " = " . number_format($resultado, 2, ',', '.') . " $moeda";
} else {
    echo "Moeda inválida!";
}

?>