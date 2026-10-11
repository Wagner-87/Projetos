<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

    <h1 class="w3-center w3-teal w3-round-large w3-margin">
        Cadastro de Amigo
    </h1>

    <form action="inserir.php" method="post" class="w3-container">

        <label>Nome</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtNome"
            placeholder="Digite o nome"
            required
        >

        <label>E-mail</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="email"
            name="txtEmail"
            placeholder="Digite o e-mail"
            required
        >

        <label>Apelido</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtApelido"
            placeholder="Digite o apelido"
            required
        >

        <button
            class="w3-button w3-teal w3-block w3-margin-bottom"
            type="submit">

            <i class="fa fa-save"></i>
            Cadastrar

        </button>

    </form>

    <a
        href="principal.php"
        class="w3-button w3-gray w3-block">

        Voltar

    </a>

</div>

<?php require_once ('rodape.php'); ?>