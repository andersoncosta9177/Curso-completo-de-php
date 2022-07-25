<?php

//adicionando dados em um array

// $arr = [];
// print_r($arr);
// echo "<br>";

// $arr[0] = 10;
// print_r($arr);
// echo "<br>";



// $arr[0] += 11;
// print_r($arr);
// echo "<br>";

//  $arr = [1,2,3];
// print_r($arr);
// echo "<br>";
//  $arr[] = 4;
//  print_r($arr);


// $arr[] = range(1,10);
// print_r($arr);


// $arr = range(10,45);
// for($i=0;$i<count($arr); $i++){
//     $soma = $arr[$i] + 6;
//     if($soma > 30){
//         echo "deu um resultado acima de 30: .$soma <br>";
//     }else{
//         echo "$soma<br>";
//     }

// }


// $arr = range(1,10);

// echo count($arr);



// $arr = [
//     [1,2,3],
//     [4,5,6]
// ];
// print_r($arr[1][2]);

// $arr = [
//     [1,2,3],
//     [4,5,6],
//     [7,8,9]
// ];

// for($i = 0; $i< count($arr); $i++ ){
//   echo "Imprimindo array externo: ".($i)."<br>";
//   for($j =0; $j < count($arr); $j ++){
//     echo $arr[$i][$j]."<br>";
//   }


// $pessoa =  ["MIGUEL",23, "Programador",'Verde'];
// print_r($pessoa);
// echo "<br>";
// $list = [$nome, $idade, $profissao, $corOlhos]  = $pessoa;

// echo "Nome: $nome<br>";
// echo "Idade: $idade <br>";
// echo "<profissão: $profissao<br>";
// echo "Cor dos olhos: $corOlhos <br>";


// $car = ['Jaguar', 3.0,'Azul',18,'Automático'];
//  $newCar = [$marca, $motor,$cor, $aro,$cambio] =  $car;

// echo "Marca: $marca<br>";
// echo "Motor: $motor<br>";
// echo "Cor: $cor<br>";
// echo "Aro: $aro<br>";
// echo "Cambio: $cambio<br>";

// var_dump($newCar);
// echo "<br>";



// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// $slice1 = array_slice($arr,4);
// // print_r($slice1);
// echo random_int(1, 60);
// echo "<br>";
// echo random_int(1, 60);
// echo "<br>";
// echo random_int(1, 60);
// echo "<br>";
// echo random_int(1, 60);
// echo "<br>";
// echo random_int(1, 60);
// echo "<br>";
// echo random_int(1, 60);
// echo "<br>";


// $arr = range(1,20);
// print_r(array_chunk($arr,4));


// $carro = [
//     'Marca' => 'bmw',
//     'motor'=> '2.4',
//     'teto solar' => true,
//     'cambio'=> 'manual',
//     'portas' => 4
// ];

// $chaves = array_keys($carro);
// print_r($chaves);
// echo "<br>";
// $valores  = array_values($carro);
// print_r($valores);
// echo "<br>";


// $pessoa = ['Nome'=> 'MIGUEL', 'IDADE'=> 22];
// if(array_key_exists("Nome",$pessoa)){
//     echo "A chave existe";

// }else{
//     echo "A chave nao existe";
// }

// $pessoa = ['Nome'=> 'MIGUEL', 'IDADE'=> 22];
// if(isset($pessoa['teste'])){
//     echo "A chave existe";
// }else{
//     echo "A chave nao existe";
// }

// $arr = [1,2,3,4,5,6,7,8];

// $removidos = array_splice($arr,4);

// print_r($arr);
// echo "<br>";
// print_r($removidos);


// $arr = ['maça','batata','pera','feijao','arroz'];

// $removidos = array_splice($arr, 0,2);
// print_r($arr);
// echo "<br>";


//compact 
// $marca = 'bmw';
// $motor = '3.4';
// $tetosolar = true;
// $portas = 4;

// $carro =  compact('marca','motor','tetosolar','portas');
// print_r($carro);
// $raca = 'vira lata';
// $nome = 'tulipa';
// $idade = 3;
// $cor = 'cinza';
//  $tuti = compact('raca','nome','idade','cor');


//  foreach($tuti as $caracteristicas => $value){
//     echo "$caracteristicas: $value<br>";
//  }


// $person = ['Nome'=> 'Anderson', 'Idade'=> 33, 'Profissao'=>'Programador', 'Pais'=>'Brasil'];


// foreach($person as $caract => $pessoa ){
//     echo " $caract: $pessoa<br>";
// }

// $num = [1,3,0,56,345,23,12,50,33];
// // sort($num);
// // print_r($num);

// rsort($num);


// $arr = [1,2,3,4,5,6];
// // $arr = [ 'Miguel','Sandra','vanda','maria'];
// //  print_r(array_reverse($arr));
// $soma = array_sum($arr);
// // echo array_sum($arr);

// $arr = range(1,20);
// shuffle($arr);
// print_r($arr);

// $arr = [1,2,3];
// $arr2 = [4,5,6];
//  $union = array_merge($arr,$arr2);
//  print_r($union);

$arr1 = [1,2,3];
$arr2  = [1,2,3];
 $diff =  array_diff($arr1,$arr2);

 print_r($diff);
 echo "<br>";