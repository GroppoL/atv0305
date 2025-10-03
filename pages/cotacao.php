<?php 
$valor = trim($_GET['valor']);
$moeda = trim($_GET['moeda']);

// Definir a cotação conforme a moeda
if ($moeda === "USD") {
    $cotacao = 5.34;
} else if ($moeda === "EUR") {
    $cotacao = 6.27;
} else if ($moeda === "ARS") {
    $cotacao = 0.0037;
} else {
    $cotacao = null; // moeda inválida
}

if ($cotacao) {
    $resultado = $valor / $cotacao;
    echo "R$ " . number_format($valor, 2, ',', '.') . 
         " = " . number_format($resultado, 2, ',', '.') . " $moeda";
} else {
    echo "Moeda inválida!";
}

?>