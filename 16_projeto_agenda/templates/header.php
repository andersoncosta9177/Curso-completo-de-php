<?php
include_once "config/url.php";
include_once "config/process.php";
// include_once("templates/backbtn.html"); 

//limpa a mensagem
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <!-- <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon"> -->
    <!-- boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css  -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href="<?= $BASE_URL ?>index.php" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="">
            </a>

            <div>
                <div class="navbar-nav">
                    <a class="nav-link " id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
                </div>
            </div>
        </nav>

    </header>