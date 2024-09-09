<?php
// Questão 3: Faturamento diário

// Caminho para o arquivo JSON com os dados de faturamento
$jsonFilePath = '../faturamento.json';

// Carregar e decodificar o arquivo JSON
$data = json_decode(file_get_contents($jsonFilePath), true);

// Inicializar variáveis
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
$total = 0;
$count = 0;

// Calcular menor, maior valor e total
foreach ($data as $day) {
    if ($day['valor'] > 0) {
        $total += $day['valor'];
        $count++;
        $min = min($min, $day['valor']);
        $max = max($max, $day['valor']);
    }
}

// Calcular a média
$average = $total / $count;
$aboveAverageDays = 0;

// Contar dias acima da média
foreach ($data as $day) {
    if ($day['valor'] > $average) {
        $aboveAverageDays++;
    }
}

// Exibir resultados
echo "<p>Questão 3:</p>";
echo "<p>Menor valor: R$" . number_format($min, 2, ',', '.') . "</p>";
echo "<p>Maior valor: R$" . number_format($max, 2, ',', '.') . "</p>";
echo "<p>Dias acima da média: $aboveAverageDays</p>";
?>
