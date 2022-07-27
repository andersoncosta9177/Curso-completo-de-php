<!-- PARA LIDAR COM ESTAS REQUISIÇOES O PHP DA ALGUMAS VAR GLOBAIS
1- $_ENV => VARIAVEIS DE AMBIENTE 
2 -$_GET = PARAMETRO QUE FORAM ENVIADOS POR REQUEST GET 
3 -$_POST => PARAMETROS QUE FORAM ENVIADO PELO POST  -->

<?php

// var_dump($_SERVER);
// echo "<br>";
// echo $_SERVER['MYSQL_HOME'];
// echo "<br>";
// echo $_SERVER['REQUEST_TIME_FLOAT'];
// echo  "<br>";


// $usuario =[
//     'nome'=> 'mateus',
//     'idade'=> 23,
//     'profissao'=> 'programador'
// ];

// if($usuario){
//     $nome = $usuario['nome'];
//     $idade = $usuario['idade'];
//     $profissao = $usuario['profissao'];
// }


// if(isset($_POST['ingredientes'])){
//     $ingredientes = $_POST['ingredientes'];
//     print_r($ingredientes);
// }

// if(isset($_FILES)){
//     print_r($_FILES);
// }

// $validacao = [];

// if (count($_POST) > 0) {

//     if ($_POST['name'] === "") {
//         $validacao[] = 'Por favor,preencha o nome do usuario';
//     }

//     if ($_POST['email'] === "") {
//         $validacao[] = 'Por favor,preencha o email do usuario';
//     }

//     if($_POST['senha'] != $_POST['confirm']){
//         $validacao = 'As senhas não corresponde,';
//     }
// }

// setcookie('nome','mateus',time() +  360);
// if(isset($_COOKIE['nome']))
// {
//     $nome = $_COOKIE['nome'];
// }

// print_r($_COOKIE);


// session_start();

// // print_r($_SESSION);
// $_SESSION['nome'] =  'mateus santos';







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form action="processamento.php" method="GET">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" id="">

        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu email" id="">

        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" id="">

        </div>
        <div>
            <input type="submit" value="Enviar">

        </div>

    </form> -->


    <!-- <form action="cadastro.php" method="post">

        <div>
            <input type="text" name="marca" id="" placeholder="Marca">
        </div>

        <div>
            <input type="text" name="preco" id="" placeholder="Preço">
        </div>
        <div>
        <input type="checkbox" name="opcionais[]" value="Teto solar" id="">Teto solar
        <input type="checkbox" name="opcionais[]" value="Pelicula" id=""> Pelicula
        <input type="checkbox" name="opcionais[]" value="Blindado" id=""> Blindado

        </div>
        <div>
            <input type="submit" value="enviar" id="">
        </div>
    </form> -->


    <!-- <div>
        <form action="">
           <div>
           <input type="text" name="" value="<?= $nome ?>" id="">
           </div>
           <div>
           <input type="text" name="" value="<?= $idade ?>" id="">
           </div>    <div>
           <input type="text" name="" value="<?= $profissao ?>" id="">
           </div>
        </form>
    </div> -->


    <!-- <form action="index.php" method="post">

        <input type="checkbox" name="ingredientes[]" value="tomate" id="">Tomate
        <input type="checkbox" name="ingredientes[]" value="Cebola" id="">Cebola
        <input type="checkbox" name="ingredientes[]" value="Repolho" id="">Repolho
        <input type="checkbox" name="ingredientes[]" value="Alface" id="">Alface
        <input type="submit" value="enviar">
    </form> -->


    <!-- <form action="index.php" method="POST" enctype="multipart/form-data" style="margin: 20px;">
    <input type="file" name="file" id="">
    <input type="submit" value="enviar" id="">
</form> -->

<!-- <h1>Ola mundo</h1> -->
<!-- <?php if($nome != ''): ?>
           <p>Seja bem vindo <?=$nome ?></p>
    <?php endif;?> -->

    <!-- <form action="index.php" method="post">
        <div>
            <input type="text" name="name" placeholder="Digite seu nome" id="">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu email" id="">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha" id="">
        </div>
        <div>
            <input type="password" name="confirm" placeholder="Confirme  sua senha" id="">
        </div>

        <div>
            <input type="submit" id="">
        </div>

    </form> -->



</body>

</html>