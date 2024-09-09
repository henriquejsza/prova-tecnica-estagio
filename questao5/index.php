<?php
// Questão 5: Inverter string

// Função para inverter uma string
function reverseString($str) {
    $reversed = ''; // Inicializa a string invertida
    // Itera sobre a string original do final para o início
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // Adiciona cada caractere ao final da string invertida
    }
    return $reversed; // Retorna a string invertida
}

// String a ser invertida
$string = "Exemplo";

// Exibir o título da questão
echo "Questão 5:<br><br>";
// Exibe a string invertida
echo reverseString($string) . "<br>";
?>
