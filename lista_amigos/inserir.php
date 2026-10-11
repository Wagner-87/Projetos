<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

    <?php

    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $apelido = $_POST['txtApelido'];

    require_once 'conexaoBD.php';

    $sql = "INSERT INTO amigo1 (nome, email, apelido)
            VALUES ('$nome', '$email', '$apelido')";

    if ($conexao->query($sql) === TRUE) {

        echo '
            <h1 class="w3-button w3-large w3-teal w3-block">
                Cadastro realizado com sucesso!
            </h1>

            <a href="principal.php"
               class="w3-button w3-gray w3-block">
                Voltar
            </a>
        ';

    } else {

        echo '
            <h1 class="w3-button w3-red w3-block">
                Erro ao cadastrar!
            </h1>

            <a href="cadastro.php"
               class="w3-button w3-gray w3-block">
                Voltar
            </a>
        ';

    }

    $conexao->close();

    ?>

</div>

<?php require_once ('rodape.php'); ?>