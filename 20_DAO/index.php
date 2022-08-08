<?php
include_once "db.php";
include_once("dao/carDao.php");

$carDao = new CarDao($conn);

$cars = $carDao->findAll();

?>



<h1>Insira um carro:</h1>

 <form action="process.php" method="POST">
    <div>
        <label for="">Marca do carro:</label>
        <input type="text" name="brand" id="" placeholder="marca">
    </div>

    <div>
        <label for="">Km:</label>
        <input type="text" name="km" id="" placeholder="Kilometragem">
    </div>

    <div>
        <label for="">Cor do carro:</label>
        <input type="text" name="color" id="" placeholder="Cor do carro">
    </div>

    <input type="submit" value="Enviar">



 </form>


 <ul>

 <?php foreach($cars as $car):?>
    <li><?=$car->getBrand() ?> </li>

 <?php endforeach; ?>

 </ul>