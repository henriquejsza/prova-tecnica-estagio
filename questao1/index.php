<?php
// Questão 1: Soma dos números de 1 a 13

$INDICE = 13; // Valor máximo para a soma
$SOMA = 0;    // Inicializa a soma
$K = 0;       // Inicializa o contador

// Soma os números de 1 até 13
while ($K < $INDICE) {
    $K++;
    $SOMA += $K;
}

// Exibe o resultado
echo "Questão 1:<br><br>";
echo "O valor da variável SOMA é $SOMA<br>";
?>
