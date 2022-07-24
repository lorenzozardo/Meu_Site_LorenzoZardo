<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// captura os dados via get
$id = $_GET['id'];
?>

<div class="content">
    <div class="left-side">
        <img src="./content/<?php echo $produtos[$id]['imagem']?>">
    </div>
    <div class="right-side">
        <h5><?php echo $produtos[$id]['categoria']?></h5>
        <h1><?php echo $produtos[$id]['nome']?></h1>
        <p><?php echo $produtos[$id]['descricao']?></p>
        <h4>R$ <?php echo $produtos[$id]['preco']?></h4>
        <a href="login.php">COMPRAR</a>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>