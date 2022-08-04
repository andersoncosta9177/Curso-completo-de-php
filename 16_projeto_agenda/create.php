<?php
include_once("templates/header.php")
?>


<div class="container">
    <?php include_once("templates/backbtn.html"); ?>

    <h1 id="main-title" class="text-secondary display-4">Adicionar contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="">Nome do contato:</label>
            <input type="text" class="form-control" required name="nome" id="nome" placeholder="Digite o nome">

        </div>
        <div class="form-group">
            <label for="">Numero do telefone:</label>
            <input type="text" class="form-control" required name="phone" id="phone" placeholder="Digite o telefone">

        </div>

        <div class="form-group">
            <label for="">Observações:</label>
            <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Insira as observações"></textarea>

        </div>

        <button type="submit" class="btn mt-3 btn-primary">Cadastrar</button>

    </form>

</div>




<?php
include_once("templates/footer.php")
?>