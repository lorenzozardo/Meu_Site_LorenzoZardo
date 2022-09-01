<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1 style="font-weight: bold; text-align: center; padding-top: 20px; font-size: 45px;">FAÇA O LOGIN</h1>

<div class="login">
    <form class="form-contato" action="./pagamento.php" method="post">
        <label class="entry-label" for="txtNome">Nome Completo:</label>
        <input class="entry" type="text" name="txtNome" id="txtNome">
        <label class="entry-label" for="email">E-Mail:</label>
        <input class="entry" type="email" name="email" id="email">
        <label class="entry-label" for="telefone">Telefone:</label>
        <input class="entry" type="tel" name="telefone" id="telefone">
        <label class="entry-label" for="endereco">Endereço:</label>
        <input class="entry" type="text" name="text" id="endereco">
        <label class="entry-label" for="complemento">Complemento:</label>
        <input class="entry" type="num" name="num" id="complemento">
        <br>
        <input class="entry" type="submit" value="Cadastrar">
    </form>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>