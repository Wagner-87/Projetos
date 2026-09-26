<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-third w3-margin w3-display-topright">

    <form action="logoutAction.php" class="w3-container" method="post">

        <button
            name="btnLogout"
            class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right">

            <i class="w3-xxlarge fa fa-times-rectangle"></i>
            Logout

        </button>

    </form>

</div>

<div class="w3-padding w3-content w3-text-grey w3-half w3-display-middle w3-center">

    <h1 class="w3-center w3-teal w3-round-large w3-margin">
        Projeto Lista de Amigos
    </h1>

    <div class="w3-row">

        <!-- Botão Adicionar -->

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large"
             style="width:45%;">

            <a href="cadastro.php" style="text-decoration: none;">

                <i class="fa fa-user-plus" style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Adicionar
                </p>

            </a>

        </div>

        <!-- Botão Listar -->

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-right"
             style="width:45%;">

            <a href="listar.php" style="text-decoration: none;">

                <i class="fa fa-vcard-o" style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Listar
                </p>

            </a>

        </div>

        <!-- Botão Cookie -->

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-margin-top"
             style="width:45%;">

            <a href="cookie.php" style="text-decoration: none;">

                <i class="fa fa-key" style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Criar Cookie
                </p>

            </a>

        </div>

        <!-- Botão Ler Cookie -->

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-margin-top w3-right"
             style="width:45%;">

            <a href="lerCookie.php" style="text-decoration: none;">

                <i class="fa fa-cookie-bite" style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Ler Cookie
                </p>

            </a>

        </div>

    </div>

</div>

<?php require_once ('rodape.php'); ?>