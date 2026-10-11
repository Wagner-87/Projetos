<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-third w3-display-middle">

    <?php

    $idamigo = $_GET['id'];

    require_once 'conexaoBD.php';

    $sql = "DELETE FROM amigo1 WHERE idamigo = '$idamigo'";

    if ($conexao->query($sql) === TRUE) {

        echo '
            <h1 class="w3-button w3-large w3-teal w3-block">
                Exclusão realizada com sucesso!
            </h1>

            <a href="listar.php"
               class="w3-button w3-gray w3-block">
                Voltar para a lista
            </a>
        ';

    } else {

        echo '
            <h1 class="w3-button w3-red w3-block">
                Erro ao excluir!
            </h1>

            <a href="listar.php"
               class="w3-button w3-gray w3-block">
                Voltar
            </a>
        ';

    }

    $conexao->close();

    ?>

</div>

<?php require_once ('rodape.php'); ?>
