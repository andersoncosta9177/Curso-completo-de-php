<?php
include_once("templates/header.php")
?>


<div class="container">
    <?php include_once("templates/backbtn.html"); ?>

    <h1 id="main-title" class="text-secondary display-4">Editar contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id']; ?>">

        <div class="form-group">
            <label for="">Nome do contato:</label>
            <input type="text" class="form-control" required name="nome" id="nome" value="<?= $contact['nome']; ?>" >

        </div>
        <div class="form-group">
            <label for="">Numero do telefone:</label>
            <input type="text" class="form-control" required name="phone" id="phone"  value="<?= $contact['phone']; ?>">

        </div>

        <div class="form-group">
            <label for="">Observações:</label>
            <textarea type="text" class="form-control" name="observations" id="observations" ><?= $contact['observations'] ?></textarea>

        </div>

        <button type="submit" class="btn mt-3 btn-primary">Editar</button>

    </form>

</div>




<?php
include_once("templates/footer.php")
?>