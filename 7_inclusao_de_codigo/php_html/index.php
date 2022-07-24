<?php
include_once "backend.php";

?>

<h1>Seja bem vindo ao site</h1>
<p><?= $nome; ?>, Veja nossa ofertas!</p>

<h2>Confira nossos produtos</h2>
<?php foreach($produtos as $produto):?>
    <ul>
        <li><?= $produto; ?></li>
    </ul>
    <?php endforeach; ?>