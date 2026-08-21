<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["txtNome"];
    $valorCompra = floatval($_POST["txtValorCompra"]);
    $formaPagamento = $_POST["cmbPag"];

    $desconto = 0;
    $formaPagamentoTexto = "";

    if ($formaPagamento == "deposito") {

        $desconto = $valorCompra * 0.10;
        $formaPagamentoTexto = "Depósito";

    } elseif ($formaPagamento == "boleto") {

        $desconto = $valorCompra * 0.08;
        $formaPagamentoTexto = "Boleto";

    } elseif ($formaPagamento == "cartaoCredito") {

        $desconto = 0;
        $formaPagamentoTexto = "Cartão de crédito";

    } else {

        $formaPagamentoTexto = "Forma de pagamento inválida.";
    }

    $valorFinal = $valorCompra - $desconto;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Resultado - Madeira e Cia</title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="container">

        <h1>Resultado da Compra</h1>

        <div class="resultado">

            <?php if ($formaPagamentoTexto != "Forma de pagamento inválida.") { ?>

                <h2>Olá, <?php echo htmlspecialchars($nome); ?>!</h2>

                <p>
                    <strong>Valor da compra:</strong>
                    R$
                    <?php
                    echo number_format(
                        $valorCompra,
                        2,
                        ',',
                        '.'
                    );
                    ?>
                </p>

                <p>
                    <strong>Forma de pagamento:</strong>
                    <?php echo $formaPagamentoTexto; ?>
                </p>

                <p>
                    <strong>Desconto:</strong>
                    R$
                    <?php
                    echo number_format(
                        $desconto,
                        2,
                        ',',
                        '.'
                    );
                    ?>
                </p>

                <div class="valor-final">

                    <strong>
                        Valor final:
                    </strong>

                    R$
                    <?php
                    echo number_format(
                        $valorFinal,
                        2,
                        ',',
                        '.'
                    );
                    ?>

                </div>

            <?php } else { ?>

                <p>
                    <?php echo $formaPagamentoTexto; ?>
                </p>

            <?php } ?>

        </div>

        <a
            href="index.php"
            class="botao-voltar"
        >
            Nova compra
        </a>

    </div>


    <!--
    COMENTÁRIO REFLEXIVO

    Para desenvolver esta atividade, primeiro analisei o código recebido
    no enunciado e identifiquei os erros relacionados aos percentuais
    de desconto.

    No código original, o boleto estava recebendo 10% de desconto,
    enquanto o correto é 8%. O depósito estava recebendo 8%, mas o
    correto é 10%. O cartão de crédito estava correto, pois não possui
    desconto.

    Depois de identificar esses erros, utilizei as estruturas
    condicionais if, elseif e else para verificar a forma de pagamento
    escolhida pelo cliente e aplicar o percentual correspondente.

    Após calcular o desconto, foi necessário calcular também o valor
    final da compra. Para isso, subtraí o valor do desconto do valor
    original da compra.

    Também utilizei a função number_format() para apresentar os valores
    com duas casas decimais e no padrão brasileiro de moeda.

    O formulário foi desenvolvido separadamente no arquivo index.php,
    enquanto o processamento dos dados foi colocado no arquivo
    resultado.php. Dessa forma, cada arquivo possui uma função
    específica, deixando o projeto mais organizado.

    O método POST foi utilizado para enviar os dados do formulário para
    o arquivo resultado.php.

    O arquivo estilo.css foi separado dos arquivos PHP para facilitar
    a organização e a manutenção do visual da página.

    Por fim, foram realizados testes utilizando as três formas de
    pagamento para verificar se os descontos e os valores finais
    estavam sendo calculados corretamente.
    -->

</body>

</html>
```
