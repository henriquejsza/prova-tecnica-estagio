<?php
// Questão 2: Sequência de Fibonacci

// Função para verificar se um número está na sequência de Fibonacci
function isFibonacci($num) {
    $a = 0;
    $b = 1;
    
    if ($num == $a || $num == $b) return true;
    
    while (($c = $a + $b) <= $num) {
        if ($c == $num) return true;
        $a = $b;
        $b = $c;
    }
    
    return false;
}

// Número a ser verificado
$number = 21; 

// Verifica se o número pertence à sequência e exibe o resultado
echo "Questão 2:<br><br>";
echo ($number = isFibonacci($number)) 
    ? "$number pertence à sequência de Fibonacci.<br>" 
    : "$number não pertence à sequência de Fibonacci.<br>";
?>
