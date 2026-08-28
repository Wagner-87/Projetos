<?php
/**
 * ATIVIDADE PRÁTICA: Agenda 4 
 * TEMA: Controle de Manutenção de Equipamentos Industriais
  */

// -------------------------------------------------------------------
// 1. FUNÇÃO CUSTOMIZADA (COM RETORNO)
// -------------------------------------------------------------------
// Função simples que calcula os dias restantes para a manutenção
function calcularDiasRestantes($dataProximaManutencao) {
    $tempoManutencao = strtotime($dataProximaManutencao); // Função nativa strtotime()
    $tempoHoje = strtotime(date("Y-m-d"));                // Função nativa date()
    
    // Calcula a diferença de segundos e divide por 86400 (segundos em 1 dia)
    return ($tempoManutencao - $tempoHoje) / 86400;
}

// -------------------------------------------------------------------
// 2. ESTRUTURA DE DADOS (ARRAY ASSOCIATIVO MULTIDIMENSIONAL)
// -------------------------------------------------------------------
$equipamentos = [
    [
        "nome" => "Prensa Hidráulica 01",
        "setor" => "Usinagem",
        "proxima_manutencao" => "2026-09-10"
    ],
    [
        "nome" => "Torno CNC 03",
        "setor" => "Corte",
        "proxima_manutencao" => "2026-08-20" // Data no passado (atrasada)
    ],
    [
        "nome" => "Compressor de Ar B",
        "setor" => "Pintura",
        "proxima_manutencao" => "2026-08-28" // Data agendada para hoje
    ]
];

// USO DE FUNÇÃO NATIVA: Exibição do cabeçalho
echo "<h1>Relatório de Manutenção Industrial</h1>";
echo "<p>Data de geração do relatório: " . date("d/m/Y") . "</p>"; // Função nativa date()
echo "<hr>";

// -------------------------------------------------------------------
// 3. ESTRUTURA DE REPETIÇÃO: foreach
// -------------------------------------------------------------------
// Percorre todo o array de equipamentos sem a necessidade de contadores manuais
echo "<h2>Status dos Equipamentos</h2>";

foreach ($equipamentos as $maquina) {
    // Chamada da função customizada para obter o retorno numérico
    $diasRestantes = calcularDiasRestantes($maquina["proxima_manutencao"]);
    
    // Estrutura condicional para formatar a situação do equipamento
    if ($diasRestantes < 0) {
        $status = "<strong style='color:red;'>ATRASADA (" . abs($diasRestantes) . " dias de atraso)</strong>";
    } elseif ($diasRestantes == 0) {
        $status = "<strong style='color:orange;'>AGENDADA PARA HOJE</strong>";
    } else {
        $status = "<strong style='color:green;'>EM DIA (Faltam {$diasRestantes} dias)</strong>";
    }
    
    // Exibição dos dados do equipamento
    echo "<strong>Equipamento:</strong> " . $maquina["nome"] . "<br>";
    echo "<strong>Setor:</strong> " . $maquina["setor"] . "<br>";
    echo "<strong>Status:</strong> " . $status . "<br><br>";
}

// -------------------------------------------------------------------
// 4. ESTRUTURA DE REPETIÇÃO: for
// -------------------------------------------------------------------
// Executa uma repetição contada para simular a geração de log do servidor
echo "<hr>";
echo "<h3>Log de Verificação do Sistema</h3>";

for ($i = 1; $i <= 3; $i++) {
    echo "Checagem automática #{$i} realizada com sucesso.<br>";
}
?>