<?php
echo " funcoes em php <br>";

//  function soma(){
//    $a = 3;
//    $b = 3;
//    echo $a +  $b;
//  }
//  soma();

// echo strtoupper('testando funcao');

// $arr = ['augusto','vanda','miguel','andreia','adriana','alex','alan'];

// $teste = implode("- ", $arr);
//  echo $teste;

//  function mult(){
//     $a = 4;
//     $b = 3;
//     $c = 5;
//     $res = $a * $b * $c;
//     echo $res;

//  }

//  mult();



// function user(){
//     $nome = "anderosn";
//     $sobrenome = "costa";
//     echo  $nome." ".$sobrenome;
// }
// user();
 



// // fucoes com paramentos;
// // function soma($a, $b){
// //     return $a + $b;
// // }

// // echo soma(12,2);

// function velocityMax($vel){
//     echo "O carro atinge a velocidade maxima de $vel km/h<br>";
// }

//  velocityMax(234);
//  velocityMax(122);
 
//   function  DesAnimal($nome, $tipo){
//     echo "O $nome é  $tipo<br>";

//   }

//   DesAnimal("Tulipa",'felino');
//   DesAnimal('bily','mamifero');



// function ApresentarPessoa($nome,$idade){
//     echo "ola, eu sou $nome e tenho $idade anos<br>";
// }
// ApresentarPessoa("Miguel",32);
// ApresentarPessoa('Maria',33);

//  function verifyNumber($num){
//     if($num % 2 == 0){
//         echo "O numero $num é par<br>";
//     }else{
//         echo "O numero $num é impar<br>";
//     }
//  }
//    verifyNumber(23);
//    verifyNumber(12);


// function soma($n1,$n2){
//     return $n1  + $n2;
// }



// echo "O resultado é: ".soma(22,33)."<br>";
// echo "O resultado é: ".soma(112,45);



//escopo
//  $a = 10;
//   function testeEscopo(){
//     $a = 5;
//     echo "Escopo local de $a<br>";
//   }

// testeEscopo();
//   echo "Escopo global de $a<br>";

// $arr = [];
//  for($i =0; $i <30; $i++){
//     array_push($arr, $i);
//  }

//   print_r($arr);



//   function arrayMaiorQue7($array){
//     $arrayRetorno =  [];
//     for($j =0; $j < count($array); $j ++){
//         if($array[$j] > 7){
//             array_push($arrayRetorno, $array[$j]);
//         }
//     }
//     return $arrayRetorno;

//   }

//  $novoArray = arrayMaiorQue7($arr);
//  print_r($novoArray);
// $arr = [];
// for($i =0; $i <=10; $i++){
//    array_push($arr, $i);
//    print_r($arr);
// }




//funcoes com param default

// function defineCor($cor = 'red'){
//     echo "A cor do carro é $cor<br>";

// }


// echo defineCor();
// echo defineCor("yellow");


// function soma($a, $b){
//     print_r(func_get_arg());
//     echo "<br>";
//     echo func_get_arg(). "<br>";
//     return $a + $b;
// }

// soma(2,3);


// $list =  ['arroz','feijao','carne','macarrão'];

// function listaParaString($arr){
//     $str = "Voce levou esses itens do mercado: ";
//     for($i =0; $i < count($arr); $i++){
//         $str .= "$arr[$i], ";
//     }
//     return $str;
// }

// echo listaParaString($list);

$arr = [
    "teste",
    123,
    true,
    false,
    [1,2,3]
];

print_r($arr);
echo "<br>";
var_dump($arr);



?>