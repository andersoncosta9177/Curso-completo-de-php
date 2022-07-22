<?php

//numeros inteiros
echo 5;
echo "<br>";
echo 21;
echo "<br>";
echo 4433;
echo "<br>";
echo 32.433;
echo "<br>";

echo 4 * 343;
echo "<br>";
echo 444/333;
echo "<br>";
echo "=======================================<br>";

//verificando se dado é inteiro
   $num = 232;
if(is_int($num)){
    echo "O numero ".$num ." é inteiro<br>";
}else{
    echo "Numero nao é inteiro<br>";
}
//    echo is_int($num);


echo "=======================================<br>";


//floats

//verificando se dado é float
$num2 = 23.332;
if(is_float($num2)){
    echo "O numero ". $num2 ." é float<br>";
}else{
    echo "O Numero " .$num2. " nao é float<br>";
}
echo "=======================================<br>";


// STRINGS EM PHP
//string e tudo que esta entre aspas simples ou duplas
$nome = 'miguel';
$sobrenome = "costa";
echo $nome." ".$sobrenome;
echo "<br>";



//verificando se dado é string
$city = "Brasilia";
if(is_string($city)){
    echo "A variavel ". $city. " é uma string<br>";
}else{
    echo "A variavel ". $city. " não é uma string<br>";

}

echo "=======================================<br>";

//exercicios
//testando float negativos
$numF = -33.333;
if(is_float($numF)){
    ECHO "sim, podemos ter float negativos";
}else{
    echo "Não podemos ter float negativos";
}
