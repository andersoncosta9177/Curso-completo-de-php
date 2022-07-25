<?php

// header("Content-type: text/plain");

//pular linha
// echo "isso aqui vai ficar na primerira linha\ne esse aqui na seguda";


// echo "testando o tab \t aqui";


// $idade = 23;
//  echo  "eu tenho $idade anos<br>";
//  echo "eu tenho {$idade} anos<br>";


// $arr = [
//     'Carro' => 100,
//     'Carreta'=> 5000,
//     'Motor'  => 10272,
//     'Onibus' => 90828
// ];
// // print_r($arr);

//  function itensCaros($arr){
//     $arrItensCaros = [];
//     foreach($arr as $item => $preco){
//         if($preco > 5550){
//             array_push($arrItensCaros, $item);
//         }
//     }
//     return $arrItensCaros;
//  }


//  $novoArr  =  itenscaros($arr);
//  print_r($novoArr);

// print('ola, mundo<br>');
// $nome = 'miguel';
//  print "ola $nome";
// $num = 222.3222;
// // printf("Numero  %f", $num);

// printf("O NUMERO é %d  e o outro é %d", $num, 123); 


// $frase = "O rato roeu a roupa do  rei";
//  echo strlen($frase);


// $string = 'esta e uma mensagem muito grande ';

// for($i =0; $i < strlen($string); $i ++){
//     echo "$string[$i]<br>";
// }


// $frase = "O rato roeu a roupa do  rei";

// $letrasA =  0;
// for($i =0; $i < strlen($frase); $i++){
    
//     if($frase[$i] == "r"){
//         $letrasA ++;
//     }
// }

// echo "O numero de letras 'A' na frase é $letrasA";



// $frase = "O RATO ROEU A ROUPA DO REI DE ROMA";\
// $lower = strtolower($frase);
// echo $lower;
// $frase = "O rato roeu a roupa do  rei";
// $upper = strtoupper($frase);
// echo $upper;



// $frase = "O rato roeu a roupa do  rei";
//  echo ucfirst($frase);
//  echo "<br>============<br>";
//  echo ucwords($frase);
//  echo "<br>========<br>";
 

// $str = 'este item esta em promoçao ';
// $promo = 'promoção';

// echo ucfirst($str).strtoupper($promo);


// $frase  = "O rato roeu a roupa do  rei de roma";
// $nova = substr($frase, 3,7);
// echo $nova;
// echo "<br>";
// echo $frase;

// $frase =   "O rato roeu a roupa do  rei de roma";

// $rev = strrev($frase);
// echo $rev;

// $str = 'teste';
// $strRepeat = str_repeat($str, 10);

// echo"$strRepeat <br>";

//     $frase =   "O rato roeu, a roupa do,  rei de roma";
// $fraseExplode = explode(" ",$frase);
// print_r($fraseExplode);
// echo "<br>";

// $frase  = "carro, moto, aviao,navio";
//  $fraseArray = explode(",", $frase);
//  print_r($fraseArray);
// for($i =0; $i < count($fraseArray); $i++){
//     echo "<br>";
//     echo "$fraseArray[$i]";
// }


// $str = 'carro-navio-helicoptero-barco-jangada';
// $NovoArray = explode("-",$str);
// print_r($NovoArray);

//  for($i = 0; $i < count($NovoArray); $i ++){
//   echo "<br>";
//   echo "$NovoArray[$i]";
//  }



//  $arr = ['Arroz','feijao','Cafe','leite','açucar'];

//  $newArray = implode(' - ',$arr);
//  echo "$newArray<br>";
 

//  $arr = ['O', 'php','é','muito','legal'];
//   $newArray = implode(" ", $arr);
//   echo "<br>";
//   echo $newArray;


// $frase =   "O rato roeu a roupa do  rei de roma";
// $newFrase = strpos($frase, "roeu");
// echo "palavra encontrada nao posiçao ".$newFrase;
// if($newFrase === false){
//     echo "palavra nao encontrada";
// }














?>