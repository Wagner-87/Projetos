<?php

require_once ('verificarAcesso.php');

setcookie("usuario", $_SESSION['logado'], time() + 3600);

require_once ('cabecalho.php');

?>

<div class="w3-padding w3-content w3-third w3-display-middle w3-center">

    <h1 class="w3-teal w3-round-large w3-padding">
        Cookie criado com sucesso!
    </h1>

    <a href="principal.php"
       class="w3-button w3-gray w3-block">

        Voltar

    </a>

</div>

<?php require_once ('rodape.php'); ?>