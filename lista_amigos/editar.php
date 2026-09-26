<?php require_once ('verificarAcesso.php'); ?>

<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

    <h1 class="w3-center w3-teal w3-round-large w3-margin">
        Editar Amigo
    </h1>

    <?php

    $idamigo = $_GET['id'];

    require_once 'conexaoBD.php';

    $sql = "SELECT * FROM amigo1 WHERE idamigo = '$idamigo'";

    $resultado = $conexao->query($sql);

    $linha = mysqli_fetch_array($resultado);

    ?>

    <form action="alterar.php" method="post" class="w3-container">

        <input
            type="hidden"
            name="txtId"
            value="<?php echo $linha['idamigo']; ?>"
        >

        <label>Nome</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtNome"
            value="<?php echo $linha['nome']; ?>"
            required
        >

        <label>Apelido</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="text"
            name="txtApelido"
            value="<?php echo $linha['apelido']; ?>"
            required
        >

        <label>E-mail</label>

        <input
            class="w3-input w3-border w3-margin-bottom"
            type="email"
            name="txtEmail"
            value="<?php echo $linha['email']; ?>"
            required
        >

        <button
            class="w3-button w3-teal w3-block w3-margin-bottom"
            type="submit">

            <i class="fa fa-save"></i>
            Alterar

        </button>

    </form>

    <a href="listar.php"
       class="w3-button w3-gray w3-block">

        Voltar

    </a>

</div>

<?php require_once ('rodape.php'); ?>
