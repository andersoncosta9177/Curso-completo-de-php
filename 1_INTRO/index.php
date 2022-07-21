<?php


echo "<h1>ola</h1>";
echo  "ola mundo<br>";
echo "<hr>";
 $nome = "anderson miguel";
 $sobrenome = "costa";
 echo $nome." ".$sobrenome;

//intruçao maiores nao precisam de ponto e virgula
if(6> 3){
    echo "<br>";
    echo "dentro do if";
}else{
    echo "fora do if";
}

//espacos em brancos
echo                 "<br>ok, testando espaço";
echo  " <br>ok,           testando espaço<br><br>";


//cometarios em php
//cometarios de varias limhas
/*
if(6> 3){
    echo "<br>";
    echo "dentro do if<br>";
}else{
    echo "fora do if<br>";
}
*/
//comentarios de uma linha abaixo(igual nessa kkk)
// $nome = "anderson miguel";
// $sobrenome = "costa";
// echo $nome." ".$sobrenome;

//exercicios
$nome =  'Miguel' ; //variavel que armazena o nome
$sobrenome =  'costa' ; //variavel que armazena o sobrenome
$idade =  23;  //variavel que armazena a idade
$profissao = 'Estudante';

echo $nome." ".$sobrenome ." tem ". $idade. " anos e sua profissão é ". $profissao;


//palavras reservadas
// algumas palavras sao rservadas no php 
// por exemplo
// funtion, nao posso atribuir esse nome a uma variavel
// outraas palavras , return while, switch, new , date etc

?>