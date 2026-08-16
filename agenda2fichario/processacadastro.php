<?php

// Recebendo os dados enviados pelo formulário
$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <!-- Compatibilidade com telas de celulares -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro Realizado</title>

    <!-- Framework W3.CSS -->
    <link rel="stylesheet"
        href="https://www.w3schools.com/w3css/5/w3.css">
</head>

<body style="background-color: #F8F5EF;">


    <!-- CABEÇALHO -->
    <header
        class="w3-container w3-center w3-padding-32"
        style="background-color: #172033; color: #FFFFFF;">

        <h1>Cadastro Realizado</h1>

        <p>
            Lojas Brincos e Companhia
        </p>

    </header>


    <!-- CONTEÚDO -->
    <main
        class="w3-content w3-padding-32"
        style="max-width: 700px;">


        <!-- DADOS CADASTRADOS -->
        <div
            class="w3-card-4"
            style="background-color: #FFFFFF;">

            <div
                class="w3-container w3-padding-16"
                style="background-color: #1E293B; color: #FFFFFF;">

                <h2>
                    Dados do Colaborador
                </h2>

            </div>


            <div class="w3-container w3-padding-16">

                <p style="color: #1E293B;">
                    <strong>Nome completo:</strong>
                    <?php echo $nome; ?>
                </p>

                <p style="color: #1E293B;">
                    <strong>Idade:</strong>
                    <?php echo $idade; ?> anos
                </p>

                <p style="color: #1E293B;">
                    <strong>Profissão:</strong>
                    <?php echo $profissao; ?>
                </p>

                <p style="color: #1E293B;">
                    <strong>Salário pretendido:</strong>
                    R$
                    <?php
                    echo number_format(
                        $salario,
                        2,
                        ',',
                        '.'
                    );
                    ?>
                </p>

                <p style="color: #1E293B;">
                    <strong>Experiência anterior:</strong>
                    <?php echo $experiencia; ?>
                </p>

            </div>

        </div>


        <!-- MENSAGEM DE SUCESSO -->
        <div
            class="w3-panel w3-leftbar w3-margin-top"
            style="
                background-color: #E5F2EA;
                border-left-color: #2F6B52;
                color: #1E293B;
            ">

            <h3 style="color: #2F6B52;">
                Cadastro enviado com sucesso!
            </h3>

            <p>
                Olá,
                <strong><?php echo $nome; ?></strong>!
            </p>

            <p>
                Recebemos seu cadastro para a profissão de
                <strong><?php echo $profissao; ?></strong>.
            </p>

            <p>
                Agradecemos por compartilhar sua experiência:
                <strong><?php echo $experiencia; ?></strong>.
            </p>

            <p>
                Seu cadastro foi registrado com sucesso
                e será analisado pela equipe de Recursos Humanos.
            </p>

        </div>


        <!-- BOTÃO VOLTAR -->
        <div class="w3-center">

            <a
                href="cadastro.html"
                class="w3-button w3-margin-top w3-margin-bottom"
                style="
                    background-color: #C9A86A;
                    color: #172033;
                    font-weight: bold;
                ">

                Voltar para o formulário

            </a>

        </div>

    </main>


    <!-- RODAPÉ -->
    <footer
        class="w3-container w3-center w3-padding-16"
        style="background-color: #172033; color: #FFFFFF;">

        <p>
            Lojas Brincos e Companhia
        </p>

        <p>
            Sistema de Cadastro de Colaboradores
        </p>

    </footer>

</body>

</html>