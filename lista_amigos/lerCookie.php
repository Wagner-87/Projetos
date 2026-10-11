<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-third w3-display-middle w3-center">

    <h1 class="w3-teal w3-round-large w3-padding">
        Ler Cookie
    </h1>

    <?php

    if (isset($_COOKIE['usuario'])) {

        echo '
            <h2 class="w3-padding">
                Usuário armazenado no Cookie:
            </h2>

            <h2 class="w3-text-teal">
                ' . $_COOKIE['usuario'] . '
            </h2>
        ';

    } else {

        echo '
            <h2 class="w3-text-red">
                Cookie não encontrado!
            </h2>
        ';

    }

    ?>

    <a href="principal.php"
       class="w3-button w3-gray w3-block w3-margin-top">

        Voltar

    </a>

</div>

<?php require_once ('rodape.php'); ?>