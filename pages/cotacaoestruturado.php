<?php 

// criação da função que valida entradas
function validarEntrada($valor){
    if (filter_var(!is_numeric($valor)) ){
        return false;
    }
}

// criação da função que exibe a mensagem
function valorDolar($brl, $taxaDolar){
    $dolar = $brl / $taxaDolar;
    return round($dolar,2);
}

$valor = trim($_GET['valor']);
$moeda = trim($_GET['moeda']);

$valorConvertido = valorDolar($brl, $taxaDolar);
validarEntrada($valor);

if ($moeda === "USD") {
    $cotacao = 0;
} else if ($moeda === "EUR") {
    $cotacao = 6.27;
} else if ($moeda === "ARS") {
    $cotacao = 0.0037;
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