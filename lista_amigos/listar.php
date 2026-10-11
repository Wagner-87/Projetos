<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

    <h1 class="w3-center w3-teal w3-round-large w3-margin">
        Lista de Amigos
    </h1>

    <?php

    require_once 'conexaoBD.php';

    $sql = "SELECT * FROM amigo1";

    $resultado = $conexao->query($sql);

    while ($linha = mysqli_fetch_array($resultado)) {

        echo '
            <div class="w3-card-4 w3-margin-bottom w3-padding">

                <h3>' . $linha['nome'] . '</h3>

                <p>
                    <b>Apelido:</b> ' . $linha['apelido'] . '
                </p>

                <p>
                    <b>E-mail:</b> ' . $linha['email'] . '
                </p>

                <a href="editar.php?id=' . $linha['idamigo'] . '"
                   class="w3-button w3-blue w3-round-large">

                    <i class="fa fa-edit"></i>
                    Editar

                </a>

                <a href="excluir.php?id=' . $linha['idamigo'] . '"
                   class="w3-button w3-red w3-round-large">

                    <i class="fa fa-trash"></i>
                    Excluir

                </a>

            </div>
        ';
    }

    $conexao->close();

    ?>

    <a href="principal.php"
       class="w3-button w3-gray w3-block">

        Voltar

    </a>

</div>

<?php require_once ('rodape.php'); ?>