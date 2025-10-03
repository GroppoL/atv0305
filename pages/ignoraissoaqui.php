<?php

// Criar um algoritmo em php que permita três tipos de conversão:
// - Conversão de Real para Dólar
// - Conversão de Real para Euro
// - Conversão de Real para qualquer moeda que vocês escolherem

 // DESAFIO EXTRA: Consumir uma API para atualizar o valor de cotação das moedas.

 // Usar o conceito de function para validar as entradas, exibir as mensagens, e para
 // realizar a conversão.

//      - estruturação do html e estilização com css - ok
 
//      - criação da página php sem functions mas funcional
 
// $valor = filter_input(INPUT_GET,"valor", FILTER_VALIDATE_FLOAT);
$valor = trim($_GET['valor']);
// $moeda = filter_input(INPUT_GET,"moeda", FILTER_SANITIZE_STRING);
$moeda = trim($_GET['moeda']);
$resultado = "";

// $taxas = [
//     "Dólar" => 5.34,
//     "Euro" => 6.27,
//     "Peso Argentino" => 0.0037
// ];

if($moeda === "Dólar"){
    $cotacao = 5.34;
    return "USD" . number_format($valor/ $cotacao, 2,'.','');
    // $resultado = $valor / $USD;
    // echo " o valor convertido é : " . $resultado;
} else if($moeda === "Euro"){
    $resultado = $valor * "EUR";
    echo " o valor convertido é : " . $resultado;
} else {
    $resultado = $valor * "ARS";
    echo " o valor convertido é : " . $resultado;
}

echo "R$ " . number_format($valor, 2, ',', '.') . 
     " = " . number_format($resultado, 2, ',', '.') . " $moeda";

// if (isset($taxas[$moeda])) {
//     $resultado = $valor * $taxas[$moeda];
//     echo "R$ " . number_format($valor, 2, ',', '.') . 
//          " = " . number_format($resultado, 2, ',', '.') . " $moeda";
// } else {
//     echo "Moeda inválida!";
// }



//      - criação da função que valida entradas
//      - criação da função que exibe a mensagem
//      - criação da função que converte para dólar
//      - criação da função que converte para euro
//      - criação da função que converte para a moeda de sua escolha 
//      - criação de uma função que consuma uma API para pegar o valor das moedas usadas na conversão

?>