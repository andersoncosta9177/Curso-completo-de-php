<?php

// $x = 0;
// while($x < 10){
//     echo "$x. <br>";
//     $x++;
// }

// echo "saiu do codigo.";



// $x = 0;
// while($x <= 10){
//     echo "$x. <br>";
//     $x++;
// }

// echo "saiu do codigo.";

// $arr = [4, 'mateus', 'true', 'false', '"opa',12.44];

// $x = count($arr);
// $y = 0;

// while ($y < $x) {
//     if (is_string($arr[$y])) {
//         echo "$arr[$y]. <br>";
//     }

//     $y++;
// }


// $num = 0;
// while($num <=100){
//     echo "O num  é $num<br>";
//     if($num === 22){
//         echo "Saiu do loop<br>";
//         break;
//     }

//     $num ++;
// }

// $num = 4;
// while($num <= 30){
//     echo "$num<br>";
//     if($num ===24){
//         echo "Parou no 24";
//         break;
//     }
//     $num  +=2;
// }


// $i = 1;
// while ($i <= 10) {
//     echo  "LOOP EXTERNO $i <BR>";
//     $j = 1;
//     while ($j <= 5) {
//         echo "Loop interno $j <br>";
//         $j++;
//     }

//     $i++;
// }


// $a = 10;
// while($a > 0){
//     if($a == 5 || $a == 7){
//         echo "Pulou a execuçao do$a<br> ";
//         $a --;
//         continue;
//     }
//     echo "Executando o lopp $a  <br>";

//     $a--;
// }

// $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
// $i = 0;

// while ($i < count($arr)) {
//     $atual = $arr[$i];
//     if ($atual == 30 || $atual == 40) {
//         $i++;
//         continue;
//     }

//     echo "Elementos: $arr[$i]<br>";
//     $i++;
// }

// $j = 0;
// do {
//     echo "Testando do while $j<br>";
//     $j++;
// } while ($j < 10);



// $j = 10;
// do {
//     echo "Testando do while $j<br>";
//     $j--;
// } while ($j > 0);


//estrutura for 

// for($i =0;$i<=10;$i ++){
//     echo "$i<br>";
// }

// for($i =10;$i >0;$i --){
//     echo "$i<br>";
// }



// $arr = [];
// for($i =0;$i<=20;$i ++){
//     $arr = $i;
//     if($i % 2 == 0){
//         echo "<br>";
//         print_r($arr);
//     }

// }

// $arr  = [];
// for($i = 10;$i <=20;$i ++){
//     array_push($arr, $i);
// }

// print_r($arr);
// echo "<br>";


// for($i =0; $i < count($arr); $i++ ){
//     if($arr[$i] % 2 == 1){
//         echo "Numero impar: $arr[$i]<br>";
//     }
// }


//foreach

// $arr = ['miguel','anderson','bruno','andreia','daniela'];

// foreach($arr as $item){
//     echo  "$item <br>";
//     if($item == 'miguel'){
//         echo "encontrei o miguel<br>";
//     }
// }