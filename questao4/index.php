<?php
// Questão 4: Percentual de faturamento por estado

// Array associativo com o faturamento por estado
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

// Calcular o faturamento total
$total = array_sum($faturamento);

// Exibir o título da questão
echo "<p>Questão 4:</p>";

// Calcular e exibir o percentual de faturamento por estado
foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    echo "<p>$estado: " . number_format($percentual, 2, ',', '.') . "%</p>";
}
?>
